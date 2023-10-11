<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;


// Route::get('/', function () {
//     echo "hello, laravel";
// });

// Route::get('/daily_report/{id}', function($id){
//     echo $id;
// })->name('home');

// Route::get('/daily_report/{id}/{name}', function($id, $name){
//     echo $id , $name;
// })->name('daily_report.details');

Route::get('/', [StaffController::class, 'index']);
Route::get('/about', [StaffController::class, 'about']);

