<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function login()
    {
        return new SuccessResponse([], 200);
    }
    public function logout()
    {
        return new SuccessResponse([], 200);
    }

    public function store()
    {
        return new SuccessResponse([], 200);
    }
}
