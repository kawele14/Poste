<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table = 'personal_infos';
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne('App\Models\BankInfo');
    }
}
