<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function posts()
    {
        $posts=Posts::all();
        return response()->json($posts);
    }
}
