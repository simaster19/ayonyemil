<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
  public function index()
  {
    return view('Admin.register');
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
      return view('Layouts.index')->with([
        'message' => $validators->errors()
      ]);
    }

    if (!$request->has('foto')) {
      $request['password'] = Hash::make($request->password);
      $user = User::create($request->all())->sendEmailVerificationNotification();

      event(new Registered($user));

      // $accessToken = $user->createToken('authToken')->plainTextToken;

      return view('Admin.Dashboard.register')->with([
        'message' => 'Succesfully Register, Please Cek Email Anda untuk
        Verifikasi!'
      ]);
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

      return view('Admin.Dashboard.register')->with([
        'message' => 'Succesfully Register, Please Cek Email Anda untuk
        Verifikasi!'
      ]);
    }
  }

  public function verify(Request $request, $id)
  {
    if (!$request->hasValidSignature()) {
      return view('Admin.Dashboard.register')->with([
        'message' => 'Error Verify'
      ]);
    }

    $user = User::findOrFail($id);

    if (!$user->hasVerifiedEmail()) {
      $user->markEmailAsVerified();
    }

    return redirect()->route('login');
  }

  public function notice()
  {
    return redirect()->route('login')->with([
      'message' => 'Anda belum melakukan Verifikasi email!',
    ]);
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
