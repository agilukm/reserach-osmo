<?php

namespace App\Services\Pembangkits;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $guarded = ['id'];
    protected $table = 'alert';

    public function laporans()
    {
        return $this->belongsTo(Pembangkit::class, 'pembangkit_id');
    }

}
