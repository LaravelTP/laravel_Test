<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        $validate = $request->validate(
            [
                "name"=> ['required','string'],
                "nom_entreprise" => ['required','string'],
                "email" => ["unique:users","required"],
                "password" =>["required",'confirmed'],
            ]
        );

        if ($request->hasFile('profile_image')){
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $validate['profile_image'] = $path;
        }

        if(User::create($validate)){
            redirect('/userdash');
        }

        

    }

    public function login(Request $request){
        $validate = $request->validate([
            "email" => ["required","email"],
            "password" => ["required"]
        ]);

        if(Auth::attempt($validate)){
            dd('User is connected');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
