<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produit()
    {
        $produits = Produit::all(); 

        return view('produit', [
            'produits' =>$produits
        ]);
    }

    public function ajout()
    {
        $categories = Categorie::all();
        return view('ajout', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $produit = Produit::create([
            'nom' => $request->nom,
            'quantite' => $request->quantite,
            
        ]);
        $produit->categories()->attach($request->categories);
        return redirect()->back(); 

    }

    
    
    
}
