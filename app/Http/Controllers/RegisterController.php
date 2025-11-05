<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

public function store(Request $request)
{
    try {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'register_date' => now()->toDateString(),
        ]);

        return back()->with('success', 'Registrácia úspešná!');
    } catch (\Exception $e) {
        dd('Error:', $e->getMessage());
    }
}
}