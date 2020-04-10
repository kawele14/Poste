<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankInfo extends Model
{
    protected $table = 'bank_infos';
    protected $guarded = [];

    public function location()
    {
        //return $this->hasOne('App\Models\PersonalInfo');
    }
}
