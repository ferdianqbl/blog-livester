<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // LOGIN
    public function loginView()
    {
        return view('login.index');
    }

    public function loginAuthentication(Request $request)
    {
        $validateData = $request->validate([
            'username' => ['required', 'min:3', 'max:30', 'alpha_dash'],
            'password' => [
                'required', 'min:8', 'max:255',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'
            ],
        ]);

        if (Auth::attempt($validateData)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with([
            'loginStatus' => 'Login failed!.',
        ]);
    }

    // REGISTER
    public function registerView()
    {
        return view('register.index');
    }

    public function registerStore(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|min:3|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users', 'alpha_dash'],
            'password' => [
                'required', 'min:8', 'max:255',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'
            ],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'You have successfully registered!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
