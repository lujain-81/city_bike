<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelLoginController extends Controller
{
    public function getForm(Request $request)
    {
        return view('panel.auth.login');
    }

    public function postForm(Request $request)
    {
        $credentials = $request->validate([
            'Email'         => ['required', 'email'],
            'password'      => ['required']
        ]);
        $rememberMe = $request->has('remember_me') ? true : false;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('panel.home'));
        }
        return back()->withErrors(['email' => ['Email or Password not correct']]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('panel.login'));
    }
}
