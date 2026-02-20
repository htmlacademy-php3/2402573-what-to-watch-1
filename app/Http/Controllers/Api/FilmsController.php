<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FilmsController extends Controller
{
    public function index(){
        return response()->json();
    }
    public function show($id) {
        return response()->json();
    }
    public function store(){
        return response()->json();
    }
    public function update($id) {
        return response()->json();
    }
    public function indexSimilar($id){
        return response()->json();
    }
    public function showPromo(){
        return response()->json();
    }
    public function storePromo($id) {
        return response()->json();
    }
}
