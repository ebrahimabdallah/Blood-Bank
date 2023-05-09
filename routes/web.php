<?php
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Donation_RequestController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostsController;
use App\Http\Requests\DonationRequest;
use App\Models\Donation_Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {

    
});
Route::get('/', function () {
    return view('welcome');
});



define('pagination_count',6);
Route::resource('Main',MainController::class);
Route::resource('Donation',Donation_RequestController::class);
Route::resource('donor', DonorController::class);


// Route::resource('Donation', Donation_RequestController::class)->only(['edit','destroy'])
// ->middleware('CheckUser');


// Route::resource('donor', DonorController::class)->only(['edit','destroy'])
// ->middleware('CheckUser');

Route::resource('Contact',ContactController::class);
Route::resource('Labs',LabController::class);
Route::resource('Members',MemberController::class);
Route::resource('Posts',PostsController::class);
Route::resource('contacts',ContactController::class);


Route::middleware(['CheckUser'])->group(function () {
    Route::resource('Donation', Donation_RequestController::class)->only(['edit', 'destroy']);
    Route::resource('donor', DonorController::class)->only(['edit', 'destroy']);
});


Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
