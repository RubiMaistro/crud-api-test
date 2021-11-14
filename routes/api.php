<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostApiController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    header('Contetnt-Type: text/html');

Route::get('/posts', [PostApiController::class, 'index']);

Route::get('/posts/{post}', [PostApiController::class, 'getPost']);

Route::post('/posts', [PostApiController::class, 'store']);

Route::put('/posts/{post}', [PostApiController::class, 'update']);

Route::delete('/posts/{post}', [PostApiController::class, 'destroy']);

Route::get('/employees', [EmployeeController::class, 'getEmployees']);

Route::get('/employee/{id}', [EmployeeController::class, 'getEmployeeById']);

Route::post('/addEmployee', [EmployeeController::class, 'addEmployee']);

Route::put('/updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);

Route::delete('/deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);
