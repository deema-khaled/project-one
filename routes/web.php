<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return "welcome";
});

Route::get('yourname/{name}', function ($name) {
    return "welcome"." ".$name;
});

Route::get('yourname/{name?}', function ($name="deema") {
    return "welcome"." ".$name;
});


/*Route::get('login', function () {
    return "welcome";
});


Route::get('login', function () {
    return view ('login');
});

Route::get('login', function () {
    return view ('login',['name'=>'deema']);
});
*/
Route::get('/getlogin', [LoginController::class, 'getlogin']);

Route::get('page1', function () {
    return view ('page1');
});
Route::get('article', function () {
    return view ('article');
});

Route::fallback( function () {
    return "not found";
});

