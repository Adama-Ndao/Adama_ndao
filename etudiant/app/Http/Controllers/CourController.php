<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;


class CourController extends Controller
{
    public function cou(){
        //$cour = Etudiant::all();
        $cour1 = new Cour(1, "Java", 80);
        $cour2 = new Cour(2, "PHP", 60);
        $cour3 = new Cour(3, "JavaScript", 100);
      
        return view('cours',['Cour1'=>$cour1, 'Cour2'=>$cour2, 'Cour3'=>$cour3]);
    }
}
