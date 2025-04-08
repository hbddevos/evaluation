@extends('layout')

@section('contenue')
<div>
    <div>
        <img src="{{ $produit->lien_image }}" alt="" width="80" height="80">
    </div>
    <h2>Informations sur le produit : {{ $produit->nom_produit }}</h2>
    <div>
        <span>Nom : </span><span>{{ $produit->nom_produit }}</span>
    </div>
    <div>
        <span>Prix : </span><span>{{ $produit->prix }}</span>
    </div>
</div>
@endsection
