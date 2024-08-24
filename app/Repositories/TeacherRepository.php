<?php

namespace App\Repositories;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherRepository implements TeacherRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(public Teacher $teacher)
    {
        //
    }



    public function getTeachersId()
    {

        $teacherId = Auth::id();
        return $teacherId;
    }

    
    public function getAllTeachers()
    {
        $teacherId = Auth::id();
        return $this->teacher->where('id', $teacherId)->first(); // Retrieve the teacher record matching the authenticated user's ID
    }
    

    public function update($data)
    {
        $id = $this->getTeachersId(); // Get the logged-in teacher's ID

        $teacher = $this->teacher->find($id); // Find the teacher by ID

        if ($teacher) {
            $teacher->update($data); // Update the teacher's data
        }

        return $teacher;
    }

    public function index()
    {
        return $this->teacher->all();
    }
}
