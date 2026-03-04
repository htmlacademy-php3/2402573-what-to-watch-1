<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index() {
        return new SuccessResponse([], 200);
    }

    public function update($id) {
        return new SuccessResponse([], 200);
    }
}
