<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtectedController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'You have accessed a protected route!']);
    }
}