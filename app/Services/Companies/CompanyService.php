<?php

namespace App\Services\Companies;

use QueryBuilder;

class CompanyService
{
    protected $model;

    public function __construct(Companies $model)
    {
        $this->model = $model;
    }

    public function get($id='')
    {
        return $this->model->findOrFail($id);
    }

    public function browse($input)
    {
        $kotas = array();
        if (\Auth::check()) {

            if (\Auth::user()->roles != 'admin') {

                $accessess = \DB::table('accesses')->where('user_id', \Auth::user()->id)->get();
                foreach ($accessess as $key => $access) {
                    $kotas[] = $access->kota;
                }

                return $this->model->whereIn('kota', $kotas)->get();
            }
        }
        $query =  new QueryBuilder($this->model, $input);
        return $query->build()->get();
    }

    public function add($input)
    {
        $data = $this->fill($this->model, $input);
        $data->last_updated_time = $input['tgl_terbit'];
        $data->save();
        return $data;
    }

    public function update($input, $id)
    {
        $query = $this->get($id);
        $data = $this->fill($query, $input);
        $query->fill($data->toArray());
        $query->save();
        return $query;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function fill(Companies $company, $input)
    {
        $company->nama = $input['nama'];
        $company->alamat = $input['alamat'];
        $company->email = $input['email'];
        $company->kota = $input['kota'];
        $company->nomor_pertek = $input['nomor_pertek'];
        $company->tgl_pertek = $input['tgl_pertek'];
        $company->nomor_dpmptsp = $input['nomor_dpmptsp'];
        $company->tgl_terbit = $input['tgl_terbit'];
        $company->tgl_berlaku = $input['tgl_berlaku'];
        $company->tgl_berakhir = $input['tgl_berakhir'];
        return $company;
    }

    public function getNeedReport()
    {
        return \DB::select('select *, datediff(NOW(),last_updated_time) from companies left join pembangkit on pembangkit.company_id = companies.id where exists(select * from pembangkit where pembangkit.company_id = companies.id) and (datediff(NOW(), last_updated_time) > 180 OR not exists (select * from laporan where laporan.pembangkit_id = pembangkit.id)) group by companies.id');
    }

}
