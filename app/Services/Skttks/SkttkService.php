<?php

namespace App\Services\Skttks;

use QueryBuilder;

class SkttkService
{
    protected $model;

    public function __construct(Skttk $model)
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

    public function fill(Skttk $skttk, $input)
    {
        $skttk->company_id = $input['company_id'];
        $skttk->nama = $input['nama'];
        $skttk->penerbit = $input['penerbit'];
        $skttk->nomor = $input['nomor'];
        $skttk->tanggal = $input['tanggal'];
        $skttk->bidang = $input['bidang'];
        $skttk->level = $input['level'];
        $skttk->ket = $input['ket'];
        return $skttk;
    }

}
