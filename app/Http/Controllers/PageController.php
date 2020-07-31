<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request) {
        return response()->json(['title' => 'Home'], 200);
    }
    public function series(Request $request) {
        return response()->json(['title' => 'Series'], 200);
    }
    public function videos(Request $request) {
        return response()->json(['title' => 'Videos'], 200);
    }
}
