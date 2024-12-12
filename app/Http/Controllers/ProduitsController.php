<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    function liste(){
        return response()->json(Produit::all());
    }

    function detail($id){
        $produit = Produit::find($id);
        return response()->json($produit);
    }

    function ajouter(Request $request){
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->lien_image = $request->lien_image;
        $produit->prix = $request->prix;
        $produit->tva = $request->tva;
        $produit->save();
        return response()->json($produit);
    }
}
