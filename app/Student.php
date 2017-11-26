<?php

namespace Incubator;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $hidden = ['id', 'specialty_id', 'info'];

    public function specialty()
    {
        return $this->hasOne('Incubator\Specialty', 'id', 'specialty_id');
    }
}
