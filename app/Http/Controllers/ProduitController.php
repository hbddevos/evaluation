<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Broadcasting\Broadcasters\RedisBroadcaster;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //

public function index()
{

    $produits = Produit::all(['id', 'nom_produit', 'prix', 'lien_image']);
    return view('produits.index', compact('produits'));
}

    public function create()
    {
        return view('produits.create');
    }

    public function store(Request $request)
    {
        $validatedDatas = $request->validate([
            'nom_produit' => "required|string|min:4",
            'prix' => "required|integer",
            'lien_image' => "string|required|url"
        ]);


        Produit::create($validatedDatas);
        // return to_route('produit.create');
        return to_route('produit.index');
    }

    public function show(Produit $produit)
    {
        // dd($produit);
        return view('produits.show', compact('produit'));
    }

    public function edit(Produit $produit)
    {
        return view('produits.edit', compact('produit'));
    }

    public function update(Produit $produit, Request $request)
    {
        // revalidation des données
        $validatedDatas = $request->validate([
            'nom_produit' => "required|string|min:4",
            'prix' => "required|integer",
            'lien_image' => "string|required|url"
        ]);

        //Enrégistrement des modifications

        $produit->update($validatedDatas);


        //redirectoion vers la route de show pour voir les modifications
        return to_route('produit.show', $produit);

    }
}
