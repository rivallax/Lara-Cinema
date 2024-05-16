<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// class facadeshash

class RegisterController extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function index(Request $request)

    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            // TANDA PAIP (|)
            'username' => ['required', 'max:255',],
            // ATAU BISA MEMAKAI ARRRAY
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);
        // ini mengunakan hash

        User::create($validateData);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
