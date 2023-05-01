<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Lab;
use Illuminate\Http\Request;
class labsController extends Controller
{

    public function labs()
    {
        $labs=Lab::all();
        return response()->json($labs);
    }
}
