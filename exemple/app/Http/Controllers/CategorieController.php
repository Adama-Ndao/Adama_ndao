<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function categorie()
    {
        $categories = Categorie::all(); 

        return view('categorie', [
            'categories' =>$categories
        ]);
    }

    public function ajouter()
    {
        return view('ajouter');
    }

    public function stored(Request $request)
    {
        Categorie::create([
            'nom' => $request->nom,
            
        ]);
       
        return redirect()->back(); 

    }
}
