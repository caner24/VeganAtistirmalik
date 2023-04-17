<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('User.login');
    }
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        auth()->attempt(request(['email', 'password']));
        if (auth()->user()->isdisable == 1) {
            echo 'hesap devre dışı';
            auth()->logout();
        } else {
            return redirect()->to('/');
        }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
