<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('panel.auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate(['USER_EMAIL' => 'required|email|exists:user',]);
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'EMAIL' => $request->USER_EMAIL,
            'TOKEN' => $token,
        ]);
        Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->USER_EMAIL);
            $message->subject('Reset Password');
        });
        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token)
    {
        $resetPassword = DB::table('password_resets')->where('TOKEN', $token)->first();
        if (!$resetPassword) {
            return back()->with('message', 'Token Invalid');
        }
        return view('panel.auth.forgetPasswordLink', ['resetPassword' => $resetPassword]);
    }


    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'USER_EMAIL' => 'required|email|exists:user',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'EMAIL' => $request->USER_EMAIL,
                'TOKEN' => $request->token
            ])
            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('USER_EMAIL', $request->USER_EMAIL)->update(['USER_PASSWORD' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['EMAIL'=> $request->USER_EMAIL])->delete();
        return redirect()->route('panel.login')->with('message', 'Your password has been changed!');
    }
}
