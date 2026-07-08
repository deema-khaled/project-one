<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/deema', function () {
    return "اهلا ديما";
});

Route::get('/deema/{age}/{country}', function ($age,$country) {
    return "عمري ".$age." من دولة ".$country.".";
});

Route::prefix('country')->group(function(){
    Route::get('name/{name}', function ($name) {
        return "Your country is ".$name;
    });

    Route::get('age/{age}', function ($age) {
        return "Your age is ".$age;
    });
});

