<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\storelogin;

class LogginController extends Controller
{
    public function create()
    {
        return view('auth.Login');
    }

    public function store(storelogin $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
      //  return redirect()->back() ;
      
    }

    public function destory(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}