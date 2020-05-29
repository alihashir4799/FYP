<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function attendances(){
        return $this->belongsToMany('App\Attendance')->withPivot('status');
    }
    public function salaries(){
        return $this->belongsToMany('App\Salarie')->withPivot('Amount');
    }
}
