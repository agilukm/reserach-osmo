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
        $laporan->company_id = $input['company_id'];
        $laporan->tgl_berlaku = $input['tgl_berlaku'];
        $laporan->tgl_berakhir = $input['tgl_berakhir'];
        $laporan->no_sertifikat = $input['no_sertifikat'];
        $laporan->no_registrasi = $input['no_registrasi'];
        $laporan->tahun_pembuatan = $input['tahun_pembuatan'];
        $laporan->mesin_jenis_turbin = $input['mesin_jenis_turbin'];
        $laporan->mesin_merek_pembuat = $input['mesin_merek_pembuat'];
        $laporan->mesin_negara_pembuat = $input['mesin_negara_pembuat'];
        $laporan->mesin_tahun_pembuatan = $input['mesin_tahun_pembuatan'];
        $laporan->mesin_tipe_seri_mesin = $input['mesin_tipe_seri_mesin'];
        $laporan->mesin_kapasitas = $input['mesin_kapasitas'];
        $laporan->generator_merek_pembuat = $input['generator_merek_pembuat'];
        $laporan->generator_negara_pembuat = $input['generator_negara_pembuat'];
        $laporan->generator_tahun_pembuatan = $input['generator_tahun_pembuatan'];
        $laporan->generator_tipe_seri_mesin = $input['generator_tipe_seri_mesin'];
        $laporan->generator_kapasitas = $input['generator_kapasitas'];
        $laporan->generator_fasa = $input['generator_fasa'];
        $laporan->generator_frekuensi = $input['generator_frekuensi'];
        $laporan->generator_tegangan = $input['generator_tegangan'];
        $laporan->generator_arus = $input['generator_arus'];
        $laporan->generator_power_factor = $input['generator_power_factor'];
        $laporan->generator_daya = $input['generator_daya'];
        return $laporan;
    }

}
