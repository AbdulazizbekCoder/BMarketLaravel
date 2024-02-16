<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function loginStore(Request $request)
    {
        $user = User::where('phone', $request->get('phone'))->get()->first();
      if(!is_null($user)){
        if (\Hash::check($request->get('password'), $user->password) && $user->role === User::role['admin']) {
            Auth::login($user);
            return redirect()->route('admin/dashboard');
        } else {
            return redirect()->route('login');
        }}else{
          return redirect()->route('login');
      }
    }
}
