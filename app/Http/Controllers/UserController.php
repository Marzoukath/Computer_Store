<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Affiche le formulaire d'inscription
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Stocke un nouvel utilisateur
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'agreement' => ['accepted']
        ]);

        // Hash du mot de passe avant enregistrement
        $attributes['password'] = Hash::make($attributes['password']);

        // Création de l'utilisateur et connexion automatique
        $user = User::create($attributes);
        Auth::login($user);

        // Message flash de confirmation
        session()->flash('success', 'Votre compte a été créé avec succès.');

        // Redirection vers la page d'accueil ou tableau de bord
        return redirect()->route('login'); // Remplace 'dashboard' par le nom correct de ta route
    }
}
