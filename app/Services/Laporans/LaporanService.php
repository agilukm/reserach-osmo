<?php

namespace App\Services\Laporans;

use QueryBuilder;

class LaporanService
{
    protected $model;

    public function __construct(Laporan $model)
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

}
