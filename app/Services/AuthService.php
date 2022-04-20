<?php

namespace App\Services;

use App\Models\Services\MobileToken;

class AuthService {
    public static function authByToken($token) : \App\Models\Subjects\User
    {
        if (str_starts_with($token, 'Bearer '))
            $token = substr($token, 7);
        if (($user = self::getUserByToken(token: $token)) === null)
            throw new \Illuminate\Validation\UnauthorizedException();
        return $user;
    }

    public static function authByApiToken($token) : \App\Models\Subjects\Company
    {
        return \App\Models\Subjects\Company::query()->first();
    }

    public static function getUserByToken($token): ?\App\Models\Subjects\User
    {
        return MobileToken::getByAccessToken($token);
    }

    public static function generateAccessToken(): string
    {
        $secret = config('app.secret');
        $string = \Illuminate\Support\Str::random();
        return \Illuminate\Support\Facades\Hash::make($secret . $string);
    }

}
