<?php

namespace App\Http\Controllers;

use App\Exceptions\IncorrectPasswordException;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(LoginRequest $request) {
        $data = $request->validated();
        $user = User::where('user', $data['user'])->firstOrFail();
        if (!Hash::check($data['password'], $user->password)) throw new IncorrectPasswordException();
        $user->tokens()->delete();
        $token = [
            'access_token' => $user->createToken('server-token')->plainTextToken
        ];
        $expiration = config('sanctum.expiration', null);
        if (!is_null($expiration)) $token['expired_at'] = Carbon::now()->add(intval($expiration), 'minute');
        return $token;
    }

    function refresh() {
        $user = Auth::user();
        $token = [
            'access_token' => $user->createToken('server-token')->plainTextToken
        ];
        $expiration = config('sanctum.expiration', null);
        if (!is_null($expiration)) $token['expired_at'] = Carbon::now()->add(intval($expiration), 'minute');
        return $token;
    }

    function admin() {
        return User::user();
    }
}
