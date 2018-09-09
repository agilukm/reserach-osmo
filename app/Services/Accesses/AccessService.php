<?php

namespace App\Services\Accesses;

use QueryBuilder;

class AccessService
{
    protected $model;

    public function __construct(Access $model)
    {
        $this->model = $model;
    }

    public function get($id='')
    {
        return $this->model->findOrFail($id);
    }

    public function browse($input)
    {
        return $this->model->groupBy('user_id')->get();
    }

    public function add($input)
    {
        foreach($input['kotas'] as $key => $value) {
            $model = new Access;
            $data = $this->fill($model, $input, $key);
            $data->save();
        }
        return $data;
    }

    public function update($input, $id)
    {
        $this->model->where('user_id', $input['user_id'])->delete();
        foreach($input['kotas'] as $key => $value) {
            $model = new Access;
            $data = $this->fill($model, $input, $key);
            $data->save();
        }
        return $data;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function fill(Access $access, $input, $key)
    {
        $access->user_id = $input['user_id'];
        $access->kota = $input['kotas'][$key];
        return $access;
    }

}
