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

    public function register(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric'
        ]);

        if ($validators->fails()) {
            return response()->json([
                'status' => 422,
                'message' => 'Pesan Error',
                'data' => $validators->errors()
            ], 422);
        }

        if (!$request->has('foto')) {
            $request['password'] = Hash::make($request->password);
            $user = User::create($request->all())->sendEmailVerificationNotification();

            event(new Registered($user));

            // $accessToken = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status' => 200,
                'message' => 'Succesfully Registered, Cek email untuk verifikasi!',
                'data' => $user,
                // 'auth' => [
                //     'token' => $accessToken,
                //     'type' => 'Bearer'
                // ]
            ], 200);
        } else {

            $foto = $request->file('foto');
            $foto->storeAs('public/images/user/', $foto->hashName());

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'foto' => $foto->hashName(),
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);

            event(new Registered($user));

            // $accessToken = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status' => 200,
                'message' => 'Succesfully Registered, Cek email untuk verifikasi!',
                'data' => $user,
                // 'auth' => [
                //     'token' => $accessToken,
                //     'type' => 'Bearer'
                // ]
            ], 200);
        }
    }

    public function verify(Request $request, $id)
    {
        if (!$request->hasValidSignature()) {
            return response()->json([
                'status' => 401,
                'message' => 'Error Verify',
                'data' => NULL
            ], 401);
        }

        $user = User::findOrFail($id);

        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        return redirect()->to('/');
    }

    public function notice()
    {
        return response()->json([
            'status' => 401,
            'message' => 'Anda belum melakukan Verifikasi email!',
            'data' => NULL
        ], 401);
    }

    // public function resend(Request $request)
    // {

    //     dd($request);
    //     if ($request->hasVerifiedEmail()) {
    //         return response()->json([
    //             'status' => 400,
    //             'message' => 'Email Sudah di Verifikasi',
    //             'data' => NULL
    //         ], 400);
    //     }

    //     // auth()->user()->sendEmailVerificationNotification();
    //     return response()->json([
    //         'status' => 200,
    //         'message' => 'Email Verification sudah terkirim',
    //         'data' => NULL
    //     ], 200);
    // }
}
