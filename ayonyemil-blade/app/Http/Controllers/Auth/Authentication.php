<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Authentication extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['verified']);
    // }
    
    public function index(){
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
            return response()->json([
                'status' => 402,
                'message' => 'username / password salah!',
                'data' => null
            ], 402);
        }


        $userLogin = User::where('username', '=', $request->username, 'AND', 'password', '=', $request->password)->get()->first();
        if (!$userLogin || !Hash::check($request->password, $userLogin->password)) {
            return response()->json([
                'status' => 402,
                'message' => 'username / password salah!',
                'data' => null
            ], 402);
        }

        if ($userLogin->email_verified_at == NULL) {
            $userLogin->sendEmailVerificationNotification();

            return response()->json([
                'status' => 401,
                'message' => 'Silahkan verifikasi terlebih dahulu, Email verifikasi sudah dikirim'
            ], 401);
        }

        // $token = $userLogin->createToken('bearer')->plainTextToken;
        $token = $userLogin->createToken('user_login')->plainTextToken;
        return response()->json([
            'status' => 200,
            'message' => 'Success Login!',
            'data' => NULL,
            'Auth' => [
                'token' => $token,
                'type' => 'bearer'
            ],
        ], 200);
    }

    
}
