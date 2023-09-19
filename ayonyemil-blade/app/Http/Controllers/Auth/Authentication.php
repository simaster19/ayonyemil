<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Authentication extends Controller
{

    public function index()
    {
        return view('Admin.login');
    }

    public function login(Request $request)
    {
        //validation
        $validations = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validations->fails()) {
            return back()->with(['error_message' => $validations->messages()]);
        }


        if (Auth::attempt(["username" => $request->username, "password" => $request->password])) {
            $userLogin = User::where('username', '=', Auth::user()->username)->get()->first();

            if ($userLogin->email_verified_at == NULL) {
                $userLogin->sendEmailVerificationNotification();
                return back()->with([
                    'message' => 'Silahkan verifikasi terlebih dahulu, Email verifikasi sudah dikirim!'
                ]);
            }


            if (Auth::user()->role == 'admin') {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            } else if (Auth::user()->role == 'user') {
                $request->session()->regenerate();

                return redirect()->route('home');
            }
        } elseif (!Auth::attempt(["username" => $request->username, "password" => $request->password])) {
            return back()->with([
                'message' => 'Username / Password Salah!'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
}
