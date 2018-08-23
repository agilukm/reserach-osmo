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
        $query =  new QueryBuilder($this->model, $input);
        return $query->build()->get();
    }

    public function add($input)
    {
        $data = $this->fill($input);
        $data->save();
        return $data;
    }

    public function update($input, $id)
    {
        $query = $this->get($id);
        $data = $this->fill($input);
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

}
