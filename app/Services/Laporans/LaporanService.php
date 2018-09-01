<?php

namespace App\Services\Laporans;

use QueryBuilder;
use App\Services\Pembangkits\PembangkitService;
use App\Services\Skttks\SkttkService;
use App\Services\Companies\CompanyService;
use App\Services\Companies\Companies;

class LaporanService
{
    protected $model;
    protected $pembangkit;
    protected $skttk;
    protected $company;

    public function __construct(Laporan $model, PembangkitService $pembangkit, SkttkService $skttk, CompanyService $company)
    {
        $this->model = $model;
        $this->pembangkit = $pembangkit;
        $this->skttk = $skttk;
        $this->company = $company;
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
        $data = $this->fill($this->model, $input);
        $data->save();
        $this->generateToken($data->id);
        $pembangkit = $this->pembangkit->update($input, $input['pembangkit_id']);
        $skttk = $this->skttk->laporanAdd($input, $input['company_id']);

        if(isset($input['status']) && $input['status'] == 1){
            $this->addIntervalCompanyUpdated($input['pembangkit_id']);
        }

        return $data;
    }

    public function update($input, $id)
    {
        $query = $this->get($id);
        $data = $this->fill($query, $input);
        $query->fill($data->toArray());
        $query->save();
        $pembangkit = $this->pembangkit->update($input, $input['pembangkit_id']);
        $skttk = $this->skttk->laporanAdd($input, $input['company_id']);
        return $query;
    }

    public function generateToken($id)
    {
        $laporan = $this->get($id);
        $token = md5(base64_encode($id.date('m').date('Y')));
        $laporan->token = $token;
        $laporan->save();
        return $laporan;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function fill(Laporan $laporan, $input)
    {
        $laporan->pembangkit_id = $input['pembangkit_id'];
        $laporan->jenis_bahan_bakar = $input['jenis_bahan_bakar'];
        $laporan->konsumsi_bahan_bakar = $input['konsumsi_bahan_bakar'];
        $laporan->jenis_pelumas = $input['jenis_pelumas'];
        $laporan->konsumsi_pelumas = $input['konsumsi_pelumas'];
        $laporan->waktu_operasi_mesin = $input['waktu_operasi_mesin'];
        $laporan->produksi_listrik = $input['produksi_listrik'];
        $laporan->jumlah_kerusakan = $input['jumlah_kerusakan'];
        $laporan->sambungan_badan_usaha = $input['sambungan_badan_usaha'];
        $laporan->sambungan_in_out = $input['sambungan_in_out'];
        $laporan->sambungan_rata_rata = $input['sambungan_rata_rata'];
        $laporan->sambungan_cara_distribusi = $input['sambungan_cara_distribusi'];
        return $laporan;
    }

    public function addIntervalCompanyUpdated($id)
    {
        $pembangkit = $this->pembangkit->get($id);
        $company = $this->company->get($pembangkit->company_id);
        $date = date_create($company->last_updated_time);
        $new_date = date_add($date, date_interval_create_from_date_string('6 months'));
        $company->last_updated_time = date_format($new_date, 'Y-m-d');
        $company->save();
        return $company;
    }

}
