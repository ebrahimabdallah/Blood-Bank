<?php

use App\Http\Controllers\api\Donation_RequestController;
use App\Http\Controllers\api\labsController;
use App\Http\Controllers\api\MemberController;
use App\Http\Controllers\api\PostsController;
use App\Http\Controllers\api\UserController;
use App\Models\Donation_Request;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('donation',[Donation_RequestController::class,'donation']);
Route::post('donation',[Donation_RequestController::class,'store']);

Route::get('posts',[PostsController::class,'posts']);
Route::get('users',[UserController::class,'users']);
Route::get('labs',[labsController::class,'labs']);
Route::post('members',[MemberController::class,'store']);

Route::get('members',[MemberController::class,'members']);
Route::get('members/{id}',[MemberController::class,'show']);