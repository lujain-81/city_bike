<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Str;
use Mail;
use App\Models\Customer;
use App\Models\ResetPassword;

class CustomerAuthController extends Controller
{
    public function getForm(Request $request)
    {
        return view('user.auth.login');
    }

    public function getRegisterForm(Request $request)
    {
        return view('user.auth.register');
    }

    public function getForgetForm(Request $request)
    {
        return view('user.auth.forget');
    }

    public function getResetForm(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        if(!$customer){
            abort(404);
        }
        $token = ResetPassword::where('Token', $request->token)->where('Email', $request->email)->first();
        if(!$token){
            abort(404);
        }
        return view('user.auth.reset', compact('token', 'customer'));
    }

    public function postForm(Request $request)
    {
        $credentials = $request->validate([
            'Email'         => ['required', 'email'],
            'password'      => ['required']
        ]);
        $rememberMe = $request->has('remember_me') ? true : false;
        if (auth('customers')->attempt($credentials, $rememberMe)) {
            $request->session()->regenerate();

            return redirect()->intended(route('user.index'));
        }
        return back()->withInput()->withErrors(['email' => ['Email or Password not correct']]);
    }

    public function postRegisterForm(Request $request)
    {
        $data = $request->validate([
            'Name'  => 'required|string|min:2|max:194',
            'Email' => 'required|email|unique:customer,Email',
            'Password' => 'required|confirmed|string|min:6',
            'Phone'     => ['required', 'numeric', 'unique:customer,Phone', 'regex:/^\+?966(5|6|9)\d{8}$/'],

            'NationalID'     => 'required|numeric|unique:customer,NationalID|digits:10',
        ]);
        $data['Password'] = Hash::make($data['Password']);
        $nanny = Customer::create($data);
        auth()->guard('customers')->login($nanny);
        return redirect()->intended(route('user.index'));
    }

    public function postForgetForm(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        if(!$customer){
            return back()->withInput()->withErrors(['email' => ['Email is not correct']]);
        }
        $token = ResetPassword::create([
            'Token'   => Str::random(40),
            'Email'   => $customer->Email
        ]);
        $data = compact('token', 'customer');
        Mail::send('email.forgetPassword', $data, function($message) use($token, $customer) {
            $message->to($customer->Email, $customer->Name)->subject('Reset Password');
            $message->from('info@city-bike.com', 'Info');
         });
        return back()->withFlashMessage('We have sent an email for you please check it out.');
    }

    public function postResetForm(Request $request)
    {
        $data = $request->validate([
            'token'  => 'required',
            'email'  => 'required|email',
            'password' => 'confirmed|string|min:6'

        ]);
        $customer = Customer::where('email', $request->email)->first();
        if(!$customer){
            abort(404);
        }
        $token = ResetPassword::where('Token', $request->token)->where('Email', $request->email)->first();
        if(!$token){
            abort(404);
        }
        $customer->update([
            'Password' => Hash::make($request->password)
        ]);
        $token->delete();
        auth()->guard('customers')->login($customer);
        return redirect()->intended(route('user.index'))->withFlashMessage('The password has been reset.');
    }

    public function logout()
    {
        auth('customers')->logout();
        return redirect(route('user.login'));
    }

}
