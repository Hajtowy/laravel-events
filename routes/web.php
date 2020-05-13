<?php

use Illuminate\Support\Facades\Route;

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

//    $user = \App\User::create([
//        'name' => 'name2',
//        'email' => 'name2',
//        'email_verified_at' => new DateTime(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi2', // password
//        'remember_token' => 'example',
//    ]);

    dd(\App\User::all()->toArray());


    //event(new \App\Event\HomePageEvent('Marek'));
    die;

//    $user = \App\User::all()->first();

//    \Illuminate\Support\Facades\Auth::login($user);


    return view('welcome');
});
