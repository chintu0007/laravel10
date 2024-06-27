<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Main Page';
});


Route::get('xxx', function () {
    return 'hello';
})->name('hello');

Route::get('greet/{name}', function($name){
    return "Greet: ".$name;
});


Route::get('hallo', function (){
    return redirect()->route('hello');
});

Route::fallback(function () {
    return 'Still got somewhere!';
});
