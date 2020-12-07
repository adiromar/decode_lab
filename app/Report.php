<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    public function patient() {
        return $this->belongsTo('App\Patient', 'patient_id');
      }
}
