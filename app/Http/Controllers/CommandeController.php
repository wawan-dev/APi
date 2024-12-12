<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    // Exemple de méthode qui récupère les identifiants de client et de produit dans le corps de la requête
    function ajouterCommande(Request $request){
        $commande = new Commande();

        $commande->id_client = $request->id_client;
        $commande->id_produit = $request->id_produit;
        $commande->quantite = $request->quantite;
        $commande->date = $request->date;
        $commande->save();
        return response()->json($commande);

        // Code permettant de créer une commande
    }
}
