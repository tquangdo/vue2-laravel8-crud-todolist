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
    $todo_list = \App\Models\TodoList::get();
    dd($todo_list);
    // logger('welcome route. DoTQ!!!!!!');
    return view('welcome');
});
