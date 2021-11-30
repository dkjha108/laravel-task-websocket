<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index']);    //create task on this route
   
Route::post('task',  [TaskController::class, 'store'])->name('task'); 

Route::get('task-listing-websockets', [TaskController::class, 'taskListing'])->name('task-listing');  //task listing using websockets
