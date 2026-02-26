<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function index() {
        return response()->json();
    }
    public function store($id) {
        return response()->json();
    }

    public function destroy($id) {
        return response()->json();
    }
}
