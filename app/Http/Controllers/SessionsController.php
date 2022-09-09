<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class SessionsController extends Controller
{
    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect()->route('index');
        }

        return back()->withErrors(['email' => 'Incorrect Email or Passowrd']);
    }

    public function destroy(): RedirectResponse
    {
        auth()->logout();

        return redirect()->route('index');
    }
}
