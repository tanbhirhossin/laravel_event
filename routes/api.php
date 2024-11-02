<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Taskcontroller;
use App\Http\Controllers\Api\Budgetcontroller;
use App\Http\Controllers\Api\FormController;
use App\Http\Controllers\Api\RequestController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\VendorController;
// use App\Http\Controllers\Api\DesignationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function(){
    Route::post('register','_register');
    Route::post('login','_login');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(Taskcontroller::class)->group(function(){
    Route::get('taskmanagement','index');
    Route::post('taskmanagement/create','store');
    Route::get('taskmanagement/{taskmanagement}','show');
    Route::post('taskmanagement/edit/{id}','update');
    Route::delete('taskmanagement/{taskmanagement}','destroy');
});

Route::controller(Budgetcontroller::class)->group(function(){
    Route::get('budget','index');
    Route::post('budget/create','store');
    Route::get('budget/{budget}','show');
    Route::post('budget/edit/{id}','update');
    Route::delete('budget/{budget}','destroy');
});

Route::controller(FormController::class)->group(function(){
    Route::get('form','index');
    Route::post('form/create','store');
    Route::get('form/{form}','show');
    Route::post('form/edit/{id}','update');
    Route::delete('form/{form}','destroy');
});

Route::controller(RequestController::class)->group(function(){
    Route::get('event_request','index');
    Route::post('event_request/create','store');
    Route::get('event_request/{event_request}','show');
    Route::post('event_request/edit/{id}','update');
    Route::delete('event_request/{event_request}','destroy');
});

Route::controller(ClientController::class)->group(function(){
    Route::get('client','index');
    Route::post('client/create','store');
    Route::get('client/{client}','show');
    Route::post('client/edit/{id}','update');
    Route::delete('client/{client}','destroy');
});
Route::controller(EventController::class)->group(function(){
    Route::get('event','index');
    Route::post('event/create','store');
    Route::get('event/{event}','show');
    Route::post('event/edit/{id}','update');
    Route::delete('event/{event}','destroy');
});
Route::controller(RoleController::class)->group(function(){
    Route::get('role','index');
    Route::post('role/create','store');
    Route::get('role/{role}','show');
    Route::post('role/edit/{id}','update');
    Route::delete('role/{role}','destroy');
});
Route::controller(VendorController::class)->group(function(){
    Route::get('vendor','index');
    Route::post('vendor/create','store');
    Route::get('vendor/{rovendorle}','show');
    Route::post('vendor/edit/{id}','update');
    Route::delete('vendor/{vendor}','destroy');
});

