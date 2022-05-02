<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\storeRegister;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterContoller extends Controller
{
    public function create()
    {
        return view('auth.Register');
    }

    public function store(storeRegister $request)
    {
          $user=User::create($request->all());

          Auth::login($user);
          return redirect()->route('auth.Register')->with('success',__('public.user success'));
    }
}