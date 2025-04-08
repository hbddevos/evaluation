@extends('layout')

@section('contenue')
    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Ajouter un produit</h2>
        <br>

        <form action="{{ route('produit.update', $produit) }}" method="post">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Nom du produit</label>
                    <input id="username" type="text" name="nom_produit" value="{{ $produit->nom_produit ?? old('nom_produit') }}"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
                <div class="text-red-800">
                    @error('nom_produit')
                        {{ $message }}
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Prix</label>
                    <input id="emailAddress" value="{{ $produit->prix ?? old('prix') }}" type="text" name="prix"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
                <div class="text-red-800">
                    @error('prix')
                        {{ $message }}
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Lien</label>
                    <input id="password" value="{{ $produit->lien_image ?? old('lien_image') }}" type="text" name="lien_image"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
                @error('lien_image')
                    {{ $message }}
                @enderror

            </div>

            <div class="flex justify-end mt-6">
                <button
                    class="px-8 py-2.5 leading-5  transition-colors duration-300 transform  rounded-md  focus:outline-none cursor-pointer">Enrégistrer</button>
            </div>
        </form>
    </section>
@endsection
