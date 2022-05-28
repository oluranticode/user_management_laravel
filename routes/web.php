<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/getuser', function () {
//     return view('getuser');
// });

Route::get('/', [HomeController::class, "Index"]);

// add User
Route::post('/adduser', [HomeController::class, "AddUser"]);

// fetch all users
Route::get('/', [HomeController::class, "GetUsers"]);

// Edit Users
Route::get('edit-users/{id}', [HomeController::class, 'EditUser']);

// Update Users
Route::post('update', [HomeController::class, 'UpdateUser']);

// Delete users
Route::get('/delete-users/{id}', [HomeController::class, 'DeleteUser']);





