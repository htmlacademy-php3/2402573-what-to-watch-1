<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Responses\SuccessResponse;
use App\Http\Responses\ErrorResponse;
use Illuminate\Http\Request;
class FilmsController extends Controller
{
    public function index(){
        return new SuccessResponse([], 200);
    }
    public function show($id) {
        return new ErrorResponse(404, 'Запрашиваемая страница не существует.');
    }
    public function store(){
        return new SuccessResponse([], 200);
    }
    public function update($id) {
        return new SuccessResponse([], 200);
    }
    public function indexSimilar($id){
        return new SuccessResponse([], 200);
    }
    public function showPromo(){
        return new SuccessResponse([], 200);
    }
    public function storePromo($id) {
        return new SuccessResponse([], 200);
    }
}
