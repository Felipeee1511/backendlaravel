<?php
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\DeviceModelController;
use App\Http\Controllers\Api\DeviceController;
use App\Http\Controllers\Api\DeviceAtWarehouseController;
use App\Http\Controllers\Api\WarehouseController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Controller Routes

Route::controller(BrandController::class)->group(function (){
    Route::get('/brands', 'index');
    Route::post('/brand', 'store');
    Route::get('/brand/{id}', 'show');
    Route::put('/brand/{id}', 'update');
    Route::delete('/brand/{id}', 'destroy');
});

Route::controller(DeviceModelController::class)->group(function (){

    Route::get('/deviceModels', 'index');
    Route::post('/deviceModel', 'store');
    Route::get('/deviceModel/{id}', 'show');
    Route::put('/deviceModel/{id}', 'update');
    Route::delete('/deviceModel/{id}', 'destroy');
});

Route::controller(DeviceController::class)->group(function (){

    Route::get('/devices', 'index');
    Route::post('/device', 'store');
    Route::get('/device/{id}', 'show');
    Route::put('/device/{id}', 'update');
    Route::delete('/device/{id}', 'destroy');
});

Route::controller(WarehouseController::class)->group(function (){

    Route::get('/Warehouses', 'index');
    Route::post('/Warehouse', 'store');
    Route::get('/Warehouse/{id}', 'show');
    Route::put('/Warehouse/{id}', 'update');
    Route::delete('/Warehouse/{id}', 'destroy');
});

Route::controller(DeviceAtWarehouseController::class)->group(function (){

    Route::get('/devicesAtWarehouses', 'index');
    // Route::post('/device', 'store');
    // Route::get('/device/{id}', 'show');
    // Route::put('/device/{id}', 'update');
    // Route::delete('/device/{id}', 'destroy');
});



