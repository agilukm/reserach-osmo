<?php

namespace App\Services\Companies;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $guarded = ['id'];
    protected $filterable = [
        'id'
    ];

    public function pembangkits()
    {
        return $this->hasMany(\App\Services\Pembangkits\Pembangkit::class, 'company_id');
    }
    public function skttks()
    {
        return $this->hasMany(\App\Services\Skttks\Skttk::class, 'company_id');
    }
}
