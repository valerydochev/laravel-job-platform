<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;

class SessionController extends Controller
{
   public function create()
   {
       return view('auth.login');
   }

   public function store()
   {
        $attrributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(! Auth::attempt($attrributes))
        {
           throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match our records.',
           ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
   }

   public function destroy()
   {
      Auth::logout();

      return redirect('/');
   }
}
