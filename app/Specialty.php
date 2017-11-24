<?php

namespace incubator;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public function students()
    {
        return $this->belongsToMany('incubator\Student');
    }
}
