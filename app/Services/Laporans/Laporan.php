<?php

namespace App\Services\Laporans;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $guarded = ['id'];
    protected $table = 'laporan';

    public function pembangkit()
    {
        return $this->belongsTo(\App\Services\Pembangkits\Pembangkit::class, 'pembangkit_id');
    }
}
