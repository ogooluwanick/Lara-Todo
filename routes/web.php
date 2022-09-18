<?php

use App\Http\Controllers\TodoListControl;
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

Route::get('/', [TodoListControl::class,"index"]);

Route::post('/saveItem',[TodoListControl::class ,"saveItem"] )->name("saveItem");

Route::post('/markDone/{id}',[TodoListControl::class ,"markDone"] )->name("markDone");
