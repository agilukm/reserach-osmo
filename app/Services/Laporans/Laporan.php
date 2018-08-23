<?php

namespace App\Services\Laporans;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $guarded = ['id'];
    protected $table = 'laporan';

    public function pembangkits()
    {
        return $this->belongsTo(\App\Services\Pembangkits\Pembangkits::class, 'pembangkit_id');
    }
}
