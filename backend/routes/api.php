<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TodoListControl;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/index', [TodoListControl::class, 'index']);
Route::post('/add', [TodoListControl::class, 'add']);
Route::post('/delone', [TodoListControl::class, 'delone']);
Route::post('/delall', [TodoListControl::class, 'delall']);
Route::post('/doneall', [TodoListControl::class, 'doneall']);
