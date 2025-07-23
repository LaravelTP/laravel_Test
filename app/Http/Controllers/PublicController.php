<?php

namespace App\Http\Controllers;

use App\Models\Stand;
use App\Models\Commande;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $stands = Stand::whereHas('user', fn($q) => $q->where('role', 'entrepreneur_approuve'))->get();
        return view('public.stands.index', compact('stands'));
    }

    public function commande(Request $req, Stand $stand)
    {
        $data = $req->validate([
            'panier' => 'required|array',
            'panier.*.id' => 'integer|exists:produits,id',
            'panier.*.quantite' => 'integer|min:1'
        ]);

        Commande::create([
            'stand_id' => $stand->id,
            'details_commande' => json_encode($data['panier']),
            'date_commande' => now()
        ]);

        return redirect()->route('stands.show', $stand)->with('success', 'Commande reçue !');
    }

    public function show(Stand $stand)
    {
        $produits = $stand->produits;
        $user = $stand->user;
        return view('public.stands.show', compact('stand', 'produits', 'user'));
    }
}
