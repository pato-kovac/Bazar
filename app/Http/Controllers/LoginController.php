<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
     public function authenticate(Request $request)
    {
        // ✅ Validate
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // ✅ Find user by email
        $user = DB::table('users')->where('email', $request->email)->first();

        // ✅ Check if exists and password is correct
        if ($user && Hash::check($request->password, $user->password)) {
            // Store session info
            Session::put('user', [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ]);

            return redirect()->route('home')->with('success', 'Prihlásenie úspešné!');
        }

        // ❌ Wrong credentials
        return back()->withErrors(['login' => 'Nesprávny e-mail alebo heslo.']);
    }
}
