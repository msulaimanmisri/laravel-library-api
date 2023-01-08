<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'This is Login Page',
        ]);
    }

    public function store(LoginRequest $request)
    {
        return response()->json([
            'message' => "Success Logged In",
        ]);
    }
}