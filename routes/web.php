<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user/{id}', function ($id) {
    return view('user');
});

Route::get('/test', function () {
    return "This is a test";
})->name("testpage");

Route::prefix("portfolio")->group(function () {
    Route::get('', function () {
        return view('portfolio');
    });

    Route::get('/company', function () {
        return view('company');
    });    

    Route::get('/organization', function () {
        return view('organization');
    });    
});

Route::post('/sign-in', function (Request $request) {

    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    $email = $request->input('email');
    $password = $request->input('password');

    return "Your email is: $email and your password is: $password";
})->name("sign-in");
