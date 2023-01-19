<?php

use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::middleware(['auth:sanctum', 'abilities:ver'])->get('/user', function (Request $request) {
    return $request->user();
});
//login
Route::post('/login', [AuthController::class, 'login']);

//purchase
Route::get('login/purchases/{purchase}', [PurchaseController::class,'showById']);
Route::get('login/purchases', [PurchaseController::class, 'showAll']);

//product
Route::get('login/products', [ProductController::class, 'showAll']);
Route::post('login/products', [ProductController::class, 'createProduct']);
Route::get('login/products/{id}', [ProductController::class, 'showById']);
Route::delete('login/products/{id}', [ProductController::class, 'deleteProduct']);
Route::put('login/products/{id}', [ProductController::class, 'updateProduct']);

//employee
Route::get('login/employees', [EmployeeController::class, 'showAll']);
Route::post('login/employees', [EmployeeController::class, 'createEmployee']);
Route::get('login/employees/{id}', [EmployeeController::class, 'showById']);
Route::delete('login/employees/{id}', [EmployeeController::class, 'deleteEmployee']);
Route::put('login/employees/{id}', [EmployeeController::class, 'updateEmployee']);


