<?php

namespace incubator;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function specialty()
    {
        return $this->hasOne('incubator\Specialty', 'id', 'specialty_id');
    }
}
