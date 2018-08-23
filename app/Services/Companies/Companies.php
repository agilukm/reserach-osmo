<?php

namespace App\Services\Companies;

use Illuminate\Database\Eloquent\Model;
use Gency\Filterable\Filterable;

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
        return $this->hasMany(\App\Services\Skttk\Skttk::class, 'company_id');
    }
}
