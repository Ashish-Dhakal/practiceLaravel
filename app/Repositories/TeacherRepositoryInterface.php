<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface TeacherRepositoryInterface
{
    public function update($data);
    public function getTeachersId();
    public function getAllTeachers();

}
