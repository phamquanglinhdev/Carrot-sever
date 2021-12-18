<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($page = 1 ){
        return view("course",['courses'=>Course::get()]);
    }
}
