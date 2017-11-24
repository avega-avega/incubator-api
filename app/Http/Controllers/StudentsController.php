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
    * @param  StudentsRepository  $students
    * @return void
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
}
