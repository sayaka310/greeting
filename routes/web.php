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

<<<<<<< HEAD
Route::get('/', 'App\Http\Controllers\ItemController@index');

=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/freeword/{msg}', function($msg) {
    return view('message.free', ['msg' => $msg]);
});

Route::get('/comments/{greeting}', [
    App\Http\Controllers\GreetController::class, 'result'
]);
>>>>>>> 214b9cbd235ca978d08fba2dd18f114a253eff8b
