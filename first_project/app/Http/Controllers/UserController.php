<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Fonction d'inscription
    public function register(Request  $request)
    {
        //Validation des données de l'utilisateur
        $validateData = $request->validate([
            'pseudo' => 'required | string | unique : users,pseudo',
            'email' => 'required | email | unique : users,email',
            'phone' => 'required | string | phone : TG | unique : users,phone',
            'password' => 'required | string | min:6 | confirmed'
        ]);
        //Création de l'utilisateur
        $user = User::create([
            'pseudo' => $validateData['pseudo'],
            'email' => $validateData['email'],
            'phone' => $validateData['phone'],
            'password' => $validateData['password']
        ]);
        //Auth::login($user);
    }
    //Fonction de connexion
    public function login(Request $request)
    {
        $connectionData = $request->validate([
            'pseudo' => 'required | string | unique : users,pseudo',
            'password' => 'required | string | min:6 | confirmed'
        ]);
        if (Auth::attempt($connectionData)) {
            $request->session()->regenerate();

            // return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'pseudo' => 'Ce pseudo ne figure pas dans la base de données',
            'password' => 'Ce mot de passe est invalide',
        ]);
    }
    //Fonction de déconnexion
    public function logout()
    {
        Auth::logout();
    }
}
