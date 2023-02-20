<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;

class CourController extends Controller
{
    public function cours()
    {
        $cours1 = new Cour(1, "JAVA", 80);
        $cours2 = new Cour(2, "PHP", 60);
        $cours3 = new Cour(3, "JAVASCRIPT", 100);
        


        return view('cours', [
            'cour1' =>$cours1,  'cour2' =>$cours2,  'cour3' =>$cours3
        ]);
    }
}
