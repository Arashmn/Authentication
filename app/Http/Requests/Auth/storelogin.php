<?php

namespace App\Http\Requests\Auth;

use Illuminate\Support\Str;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\storeRegister;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class storelogin extends storeRegister
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'exists:users'],
            'password' => ['required', 'string']
        ];
    }

    public function authenticate()
    {
        // $this->ensureIsNotRateLimited();
        if (!Auth::attempt($this->only('email', 'password'))) {
            // RateLimiter::hit($this->throttleKey());
            return redirect()->route('auth.login')->with('failed', __('public.username or password failed'));
            // return redirect()->back()->withErrors('failed', __('public.username or password failed'));
        }

        RateLimiter::clear($this->throttleKey());
    }

    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());



        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
                'email' => $this->input('email')
            ]),
        ]);
    }

    public function throttleKey()
    {
        return Str::lower($this->input('email')) . '|' . $this->ip();
    }
}