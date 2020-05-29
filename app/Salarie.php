<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    //
    public function employees(){
        return $this->belongsToMany('App\Employee')->withPivot('Amount');
    }
}
