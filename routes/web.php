<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


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
    return view('welcome');
});

Route::get('/user/{id}', function($id) {
    $data = compact('id');
    return view('user') ->with($data);
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/project',function() {
    return view('projectslist');
});

Route::get('/contribute',[ProjectController::class, 'index']);

Route::post('/addproject', [ProjectController::class, 'create']);