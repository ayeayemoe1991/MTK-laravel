<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    echo "hello, laravel";
});

Route::get('/daily_report/{id}', function($id){
    echo $id;
})->name('home');

Route::get('/daily_report/{id}/{name}', function($id, $name){
    echo $id , $name;
})->name('daily_report.details');
