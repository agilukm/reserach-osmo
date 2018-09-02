<?php

namespace App\Services\Laporans;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $guarded = ['id'];
    protected $table = 'laporan';
    const STATUS_BELUM = 0;
    const STATUS_SUDAH = 1;

    public static function listStatus()
    {
        return [
            self::STATUS_BELUM    => 'Belum Diisi',
            self::STATUS_SUDAH => 'Terkirim',
        ];
   }

    public function pembangkit()
    {
        return $this->belongsTo(\App\Services\Pembangkits\Pembangkit::class, 'pembangkit_id');
    }

    public function status()
    {
       $list = self::listStatus();
       return isset($list[$this->status]) ? $list[$this->status] : $this->status;
    }

}
