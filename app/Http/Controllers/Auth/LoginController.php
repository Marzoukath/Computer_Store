<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
       
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        // dd($user);
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            return redirect()->intended(route('index'));
        }
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials, $request->has('remember'))) {
        //     return redirect()->intended('/dashboard'); // Rediriger vers la page prévue après la connexion
        // }

        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }
}
