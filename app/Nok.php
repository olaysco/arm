<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nok extends Model
{
    protected $guarded = [];
    protected $table = 'nok';

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
