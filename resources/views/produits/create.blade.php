@extends('layout')

@section('contenue')
    <section class="">
        <h2 class="display-1">Ajouter un produit</h2>
        <br>
        <p class="h1">Classe h1 pour grossir la police</p>
        <form action="{{ route('produit.store') }}" method="post">
            @csrf
            <div class="d-flex gap-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="mb-3">
                    <label for="exemp" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exemp" placeholder="name">
                </div>
            </div>
            <div class="mb-3">
                <label for="exemp" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exemp" placeholder="name">
            </div>
            <div class="">
                <div>
                    <label class="" for="username">Nom du produit</label>
                    <input id="username" type="text" name="nom_produit" value="{{ old('nom_produit') }}"
                        class="form-control">
                </div>
                <div class="text-red-800">
                    @error('nom_produit')
                        {{ $message }}
                    @enderror
                </div>

                <div>
                    <label class="" for="emailAddress">Prix</label>
                    <input id="emailAddress" value="{{ old('prix') }}" type="text" name="prix" class="form-control">
                </div>
                <div class="">
                    @error('prix')
                        {{ $message }}
                    @enderror
                </div>

                <div>
                    <label class="" for="password">Lien</label>
                    <input id="password" value="{{ old('lien_image') }}" type="text" name="lien_image"
                        class="form-control border-bottom border-danger">
                </div>
                @error('lien_image')
                    {{ $message }}
                @enderror

            </div>

            <div class="">
                <button class="btn btn-primary">Enrégistrer</button>
                <button class="btn btn-outline-primary">Enrégistrer</button>
            </div>
        </form>
    </section>
@endsection
