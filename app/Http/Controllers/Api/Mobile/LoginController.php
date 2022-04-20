<?php

namespace App\Http\Controllers\Api\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return response()->json([
            'access_token' => 'ey431413413413',
            'refresh_token' => 'ey431413413414'
        ]);
    }

    public function refresh(Request $request)
    {
        if ($request->get('refresh_token') === 'ey431413413414')
            return response()->json([
                'access_token' => 'ey431413413413',
                'refresh_token' => 'ey431413413414'
            ]);
        else
            return response()->json([
                'error' => 'refresh token is invalid'
            ]);
    }

}
