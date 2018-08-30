<?php

namespace App\Services\Pembangkits;

use Illuminate\Database\Eloquent\Model;

class Pembangkit extends Model
{
    protected $guarded = ['id'];
    protected $table = 'pembangkit';

    public function company()
    {
        return $this->belongsTo(\App\Services\Companies\Companies::class, 'company_id');
    }

    public function laporan()
    {
        return $this->hasMany(\App\Services\Laporans\Laporan::class, 'pembangkit_id');
    }
}
