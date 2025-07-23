<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Stand;
use Illuminate\Http\Request;

class StandsController extends Controller
{
    /**
     * Affiche la liste des stands approuvés.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
       return view('public.stands.create');
    }
    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    // Gestion de l'image
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('stands', 'public');
    }

    Stand::create([
        'nom' => $request->nom,
        'description' => $request->description,
        'image' => $imagePath,
        'user_id' => Auth::id() ?? 1, // met Auth::id() si l'user est connecté, sinon un id temporaire
        'approuve' => true,
        
    ]);

    return redirect()->route('stands.index')->with('success', 'Stand créé avec succès.');
}
    public function index()
    {
        // Récupère uniquement les stands approuvés
        $stands = Stand::where('approuve', true)->get();

        // Affiche la vue 'stands.index' avec les stands
        return view('public.stands.index', compact('stands'));
    }

    /**
     * Affiche les détails d'un stand spécifique avec ses produits et son propriétaire.
     *
     * @param  \App\Models\Stand  $stand
     * @return \Illuminate\View\View
     */
    public function show(Stand $stand)
    {
        // Récupère les produits et le propriétaire associés à ce stand
        $produits = $stand->produits;
        $user = $stand->user;

        // Affiche la vue 'stands.show' avec les données
        return view('public.stands.show', compact('stand', 'produits', 'user'));
    }
}
