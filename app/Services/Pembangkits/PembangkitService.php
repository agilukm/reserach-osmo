<?php

namespace App\Services\Pembangkits;

use QueryBuilder;

class PembangkitService
{
    protected $model;

    public function __construct(Pembangkit $model)
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
        $data = $this->fill($this->model, $input);
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

    public function fill(Pembangkit $pembangkit, $input)
    {
        $pembangkit->company_id = $input['company_id'];
        $pembangkit->tgl_berlaku = $input['tgl_berlaku'];
        $pembangkit->tgl_berakhir = $input['tgl_berakhir'];
        $pembangkit->no_sertifikat = $input['no_sertifikat'];
        $pembangkit->no_registrasi = $input['no_registrasi'];
        $pembangkit->tahun_pembuatan = $input['tahun_pembuatan'];
        $pembangkit->mesin_jenis_turbin = $input['mesin_jenis_turbin'];
        $pembangkit->mesin_merk_pembuat = $input['mesin_merk_pembuat'];
        $pembangkit->mesin_negara_pembuat = $input['mesin_negara_pembuat'];
        $pembangkit->mesin_tahun_pembuatan = $input['mesin_tahun_pembuatan'];
        $pembangkit->mesin_tipe_seri_mesin = $input['mesin_tipe_seri_mesin'];
        $pembangkit->mesin_kapasitas = $input['mesin_kapasitas'];
        $pembangkit->generator_merk_pembuat = $input['generator_merk_pembuat'];
        $pembangkit->generator_negara_pembuat = $input['generator_negara_pembuat'];
        $pembangkit->generator_tahun_pembuatan = $input['generator_tahun_pembuatan'];
        $pembangkit->generator_tipe_seri_mesin = $input['generator_tipe_seri_mesin'];
        $pembangkit->generator_kapasitas = $input['generator_kapasitas'];
        $pembangkit->generator_fasa = $input['generator_fasa'];
        $pembangkit->generator_frekuensi = $input['generator_frekuensi'];
        $pembangkit->generator_tegangan = $input['generator_tegangan'];
        $pembangkit->generator_arus = $input['generator_arus'];
        $pembangkit->generator_power_factor = $input['generator_power_factor'];
        $pembangkit->generator_daya = $input['generator_daya'];
        return $pembangkit;
    }

}
