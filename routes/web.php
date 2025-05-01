<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',[UserController::class,'index'])->name('user');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::POST('/user/store',[UserController::class,'store'])->name('user.store');
Route::get('/user/view/{id}',[UserController::class,'show'])->name('user.view');
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::POST('/user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');
Route::get('/user/deletealluser',[UserController::class,'deletealluser'])->name('deleteall.user');

Route::get('/student',[StudentController::class,'index'])->name('student');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::POST('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/view/{id}',[StudentController::class,'show'])->name('student.view');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::PUT('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');
Route::get('/student/deletealluser',[StudentController::class,'deletealluser'])->name('deleteall.student');   

Route::get('/actor',[ActorController::class,'index'])->name('actor');
Route::get('/actor/create',[ActorController::class,'create'])->name('actor.create');
Route::POST('/actor/store',[ActorController::class,'store'])->name('actor.store');
Route::get('/actor/view/{id}',[ActorController::class,'show'])->name('actor.view');
Route::get('/actor/edit/{id}',[ActorController::class,'edit'])->name('actor.edit');
Route::POST('/actor/update/{id}',[ActorController::class,'update'])->name('actor.update');
Route::get('/actor/delete/{id}',[ActorController::class,'destroy'])->name('actor.delete');
Route::get('/actore/deleteallactor',[ActorController::class,'deleteallactor'])->name('actorall.delete');

Route::resource('customer',CustomerController::class);