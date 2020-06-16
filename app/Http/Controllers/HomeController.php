<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Student model
use App\Student;

class HomeController extends Controller
{
    public function index()
    {
        // select all students
        // $students = Student::all();

        // select students where email != default
        // $students = Student::where('email', '!=', 'name@domain.com')
        //    ->get();

        // select all students order desc
        // $students = Student::where('id', '>=', 1)
        //     ->orderBy('name', 'desc')
        //     ->get();

        // select first student where description not empty
        // $students[] = Student::where('description', '!=', '')
        //     ->first();

        // find student by id
        // $student_list = Student::all();
        // $students[] = $student_list->find(3);

        // select all students except id 2 and 3
        $students = Student::all();
        $students = $students->except([2, 3]);

        return view('welcome', compact('students'));
    }
}
