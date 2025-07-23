@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">{{ $stand->nom }}</h1>
    <p class="mb-6">{{ $stand->description }}</p>

    <h2 class="text-xl font-semibold mb-4">Produits disponibles</h2>

    <form action="{{ route('stands.commande', $stand) }}" method="POST">
        @csrf

        @foreach ($produits as $index => $produit)
            <div class="mb-4 p-4 border rounded">
                <h3 class="font-semibold">{{ $produit->nom }}</h3>
                <p>{{ $produit->description }}</p>
                <p>Prix : {{ number_format($produit->prix, 0, ',', ' ') }} FCFA</p>

                <label>
                    Quantité :
                    <input
                        type="number"
                        name="panier[{{ $index }}][quantite]"
                        min="0"
                        value="0"
                        class="border rounded px-2 py-1 w-20"
                    />
                </label>

                <input type="hidden" name="panier[{{ $index }}][id]" value="{{ $produit->id }}">
            </div>
        @endforeach

        <button type="submit" class="mt-6 px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
            Passer commande
        </button>
    </form>
</div>
@endsection
