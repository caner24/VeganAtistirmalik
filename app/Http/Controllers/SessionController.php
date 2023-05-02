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

            $userId = auth()->user()->id;
            if (auth()->user()->isrequest == 1) {
                $durum = 1;
            } else {
                $durum = 0;
            }
            auth()->logout();
            return view("Home.disabled", ['durum' =>  $durum, "userId" => $userId]);
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
