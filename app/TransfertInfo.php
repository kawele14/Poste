<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransfertInfo extends Model
{
    protected $table = 'transfert_infos';
    protected $guarded = [];

    public function location()
    {
        return $this->hasOne('App\Models\PersonalInfo');
    }
}
