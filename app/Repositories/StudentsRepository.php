<?php

namespace incubator\Repositories;

use incubator\{Student, Specialty};

class StudentsRepository
{
    public function findByStatus($isActive)
    {
        return $this->findByColumn('is_active', $isActive)
                    ->orderBy('is_active', 'desc')
                    ->orderBy('points', 'desc')
                    ->get();
    }

    public function findBySpecialty($specialtyId)
    {
        return $this->findByColumn('specialty_id', $specialtyId)
                    ->orderBy('is_active', 'desc')
                    ->orderBy('points', 'desc')
                    ->get();
    }

    public function findByColumn($key, $value)
    {
        return Student::where($key, '=', $value);
    }

    /**
    * Возвращает список событий, отсортированных по дате, с пагинацией.
    *
    * @return mixed
    */
    public function get()
    {
        return Student::orderBy('is_active', 'desc')->orderBy('points', 'desc')->get();
    }

    /**
    * Возвращает конкретное событие.
    *
    * @param  string $studentId
    * @return Student
    */
    public function find($studentId)
    {
        return Student::with('specialty')->find($studentId)->setHidden(['id']);
    }


}
