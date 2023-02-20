<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function liste()
    {
        $etudiants = Etudiant::all(); 

        return view('liste', [
            'etudiants' =>$etudiants
        ]);
    }

    public function store(Request $request)
    {
        Etudiant::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'langage' => $request->langage,
            'niveau' => $request->niveau,
            'age' => $request->age
        ]);
       
        return redirect()->back(); 

    }

    public function ajout()
    {
        return view('ajout');
    }

    public function edit($id)
    {
        $etudiant = Etudiant::find($id);
        return view('edit', ['etudiant' =>$etudiant]);
       
    }

    public function update($id,Request $request) {
        $etudiant = Etudiant::find($id);
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->langage = $request->langage;
        $etudiant->niveau = $request->niveau;
        $etudiant->age = $request->age;

        $etudiant->save();
        return redirect('/liste');
    }

    public function delete($id) {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/liste');
    }
}
