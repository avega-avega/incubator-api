<?php

namespace incubator\Http\Controllers;

use Illuminate\Http\Request;
use incubator\Repositories\StudentsRepository;

class StudentsController extends Controller
{
    protected $students;

    /**
     * Создание нового экземпляра контроллера.
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
//        ->get(['name', 'photo', 'info', 'specialty' => 'name', 'is_active', 'points'])
        $test = $this->students->find($studentId);
//        $test1 = $test->pluck('name', 'title');
//        $test->pull('name');
//        $test1 = $test->setVisible('info');
        return $test;
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