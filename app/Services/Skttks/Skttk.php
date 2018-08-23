<?php

namespace App\Services\Skttks;

use Illuminate\Database\Eloquent\Model;

class Skttk extends Model
{
    protected $guarded = ['id'];
    protected $table = 'skttk';

    public function company()
    {
        return $this->belongsTo(\App\Services\Companies\Company::class, 'company_id');
    }
}
