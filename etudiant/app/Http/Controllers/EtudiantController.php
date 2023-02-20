<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;


class EtudiantController extends Controller
{
    public function etu(){
        $etudiants = Etudiant::all(); 
        return view('liste',['etude'=>$etudiants]);
    }
}
