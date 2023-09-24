<?php

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
    
    $data = [
        'name' => 'John',
        'surname' => 'Wayne',
        'mail' => 'johnwayne@gmail.com',
        'navlinks' => ['Login','About Us','Contact']
    ];

    return view("home",$data);
});


Route::get('/about', function () {

    $data = [
        'namePage' => 'About Us',
        'navlinks' => ['Login','About Us','Contact']
    ];

    return view("about",$data);
});

Route::get('/contact', function () {
    
    $data = [
        'namePage' => 'Contact',
        'navlinks' => ['Login','About Us','Contact']
    ];

    return view("contact",$data);
});
