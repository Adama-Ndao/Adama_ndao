<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function stud(){
        $students = Classe::all();
        
    }
}
