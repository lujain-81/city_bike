<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployyAuthController extends Controller
{
    public function getForm(Request $request)
    {
        return view('panel.auth.emp_login');
    }

    public function postForm(Request $request)
    {
        $credentials = $request->validate([
            'Email'         => ['required', 'email'],
            'password'      => ['required']
        ]);
        $rememberMe = $request->has('remember_me') ? true : false;
        if (auth('employees')->attempt($credentials, $rememberMe)) {
            $request->session()->regenerate();

            return redirect()->intended(route('employees.home'));
        }
        return back()->withErrors(['email' => ['Email or Password not correct']]);
    }

    public function logout()
    {
        auth('customers')->logout();
        return redirect(route('employees.login'));
    }
}
