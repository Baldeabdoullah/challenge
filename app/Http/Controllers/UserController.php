<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    //creer un utilisateur

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:6',
        ]);

        //code le mode de pass
        $formFields['password'] = bcrypt($formFields['password']);

        //creer l'utilisateur

        $user = User::create($formFields);

        //connexion
        auth()->login($user);

        return redirect('/challenges')->with('message', 'utilisateur crée et connecté');
    }

    // deconnecter l'utilisateur

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/challenges')->with('message', 'vous avez été deconnecté');
    }

    //montrer la page de connexion

    public function login()
    {
        return view('users.login');
    }

    //authentifier un utilisateur

    public function authenticate(Request $request)
    {

        $formFields = $request->validate([

            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/challenges')->with('message', 'vous etes connecté');
        }

        return back()->withErrors(['email' => 'invalide'])->onlyInput('email');
    }
}
