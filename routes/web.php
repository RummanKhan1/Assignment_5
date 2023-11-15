<?php

use App\Http\Controllers\Experiencecontroller;
use App\Http\Controllers\Homepagecontroller;
use App\Http\Controllers\Projectcontroller;
use App\Http\Controllers\UserController;
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


Route::get("/home", [Homepagecontroller::class, 'index']);
Route::get("/projects",[Projectcontroller::class, 'index'] );
Route::get("/work_experience",[Experiencecontroller::class, 'index'] );



