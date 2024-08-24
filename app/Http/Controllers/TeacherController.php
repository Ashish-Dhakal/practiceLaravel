<?php

namespace App\Http\Controllers;

use App\Repositories\TeacherRepositoryInterface;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct(public TeacherRepositoryInterface $teacherRepository) {}




    public function index()
    {        
        $data['teacher'] = $this->teacherRepository->getAllTeachers(); // Changed to 'teacher'
        return view('teacher.dashboard', $data);
    }
    
    public function update(Request $request)
    {

        $data = $request->all();
        $teacher = $this->teacherRepository->update($data);

        if ($teacher) {
            return redirect()->route('teacher.dashboard');
            // return response()->json(['message' => 'Teacher updated successfully'], 200);
        } else {

            return response()->json(['message' => 'Teacher not updated'], 400);
        }
    }
}
