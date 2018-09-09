<?php

namespace App\Services\Accesses;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $guarded = ['id'];
    protected $table = 'accesses';

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
