<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\Subjects\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request) {
        User::all();
        dd($request->all());
    }
}
