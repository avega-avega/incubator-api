<?php

namespace incubator;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $hidden = ['id', 'specialty_id', 'info'];

    public function setHidden(array $attribute)
    {
        $this->visible = $attribute;
    }


    public function specialty()
    {
        return $this->hasOne('incubator\Specialty', 'id', 'specialty_id');
    }
}
