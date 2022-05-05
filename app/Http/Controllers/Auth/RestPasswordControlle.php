<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class RestPasswordControlle extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function create()
    {
        return view('auth.forget-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'exists:users']
        ]);

        $status = Password::sendResetLink($request->only('email'));

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('successSendEmail', true);
        }
    }

    public function resetForm($token)
    {

        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPasword(Request $request)
    {
        $request->validate(
            [
                'token' => 'required',
                'password' => 'required|min:8|confirmed',
            ]
        );

        $status = Password::reset($request->only('password', 'password_confirmation', 'token'), function ($user, $password) {

            $user->forceFill(['password' => $password])->setRememberToken(Str::random(60));

            $user->save();
        });

        if ($status ==  Password::PASSWORD_RESET) {
            return redirect()->route('auth.login')->with('resetPasswordsuccess', true);
        }
    }
}