<?php

namespace incubator\Repositories;

use incubator\{Student, Specialty};

class StudentsRepository
{
    // /**
    // * Получить все события по тегу.
    // *
    // * @param  string $tagId
    // * @return Collection
    // */
    // public function findByTagId($tagId)
    // {
    //     $tag = Tag::find($tagId);
    //     return $tag->events()
    //                ->orderBy('created_at', 'desc')
    //                ->paginate(10);
    // }

    /**
    * Возвращает список событий, отсортированных по дате, с пагинацией.
    *
    * @return Collection
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
        $student = Student::find($studentId);
        $specialty = $student->specialty;
        var_dump($specialty->toJson());
        return Student::find($studentId);
    }
}
