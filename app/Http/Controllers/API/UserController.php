<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Kelas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            return response()->json(['success' => $success], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function logout(Request $request)
    {
        $logout = $request->user()->token()->revoke();
        if ($logout) {
            return response()->json([
                'message' => 'Successfully logged out'
            ]);
        }
    }
    public function myProfil()
    {
        $user = User::findOrFail(Auth::user()->id);
        $data = collect();
        $user_id = Kelas::select('id_user')->where('id', $user->id_kelas)->first();
        $walikelas = User::where('id', $user_id->id_user)->first();
        $data->push([
            'name' => $user->name,
            'email' => $user->email,
            'wali_kelas' => $walikelas->name
        ]);


        return $data;
    }
}
