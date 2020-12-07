<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{   
    protected $table = 'patients';

    public function report(){
        return $this->hasOne('App\Report', 'patient_id');
    }
}
