<?php

namespace Incubator\Http\Controllers;

use Incubator\Repositories\StudentsRepository;

class StudentsController extends Controller
{
    protected $students;

    /**
     * Коснтруктор контроллера.
     *
     * @param  StudentsRepository $students
     */
    public function __construct(StudentsRepository $students)
    {
        $this->students = $students;
    }

    public function index()
    {
        return $this->students->get();
    }

    public function info($studentId)
    {
        return $this->students->find($studentId);
    }

    public function findByStatus($isActive)
    {
        return $this->students->findByStatus($isActive);
    }

    public function findBySpecialty($specialtyId)
    {
        return $this->students->findBySpecialty($specialtyId);
    }
}