<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticateController;





Route::post('/register',  [UserAuthController::class, 'register']);
Route::post('/login', [UserAuthController::class, 'login']);


Route::apiResource('employee', EmployeeController::class)->middleware('auth:api');
//get all user
Route::get('user', [UserController::class,'viewUser'])->middleware('auth:api');
Route::get('singleuser/{id}', [UserController::class,'getsingleUser'])->middleware('auth:api');
//update role
Route::get('user/{id}', [UserController::class,'updateUser'])->middleware('auth:api');
//downgrade user
Route::get('userdown/{id}', [UserController::class,'downUser'])->middleware('auth:api');
//delete user
Route::get('userdelete/{id}', [UserController::class,'deleteUser'])->middleware('auth:api');
//admin login


