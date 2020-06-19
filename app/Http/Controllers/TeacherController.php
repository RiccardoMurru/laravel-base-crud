<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function index(Teacher $teacher)
    {
        $teachers = Teacher::all();

        return view('teachers.index', compact('teachers'));
    }
}
