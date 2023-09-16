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


        $userLogin = User::where('username', '=', $request->username, 'AND', 'password', '=', $request->password)->get()->first();
        if (!$userLogin || !Hash::check($request->password, $userLogin->password)) {
            return back()->with([
                'message' => 'Username / Password Salah!'
            ]);
        }

        if ($userLogin->email_verified_at == NULL) {
            $userLogin->sendEmailVerificationNotification();

            return back()->with([
                'message' => 'Silahkan verifikasi terlebih dahulu, Email verifikasi sudah dikirim!'
            ]);
        }

        $request->session()->regenerate();

        if (Auth::user()->role == 'admin') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home');
        }
    }
}
