<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $user->delete();
        dd($request->user());
        return response()->json([
            'status' => 1
        ]);
    }
}
