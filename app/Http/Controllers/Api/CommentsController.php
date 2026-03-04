<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index() {
        return new SuccessResponse([], 200);
    }
    public function store($id) {
        return new SuccessResponse([], 200);
    }
    public function update($id) {
        return new SuccessResponse([], 200);
    }
    public function destroy($id) {
        return new SuccessResponse([], 200);
    }
}
