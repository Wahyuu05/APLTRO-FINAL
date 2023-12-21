<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\InventoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
//use App\Models\Inventory;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

//ROUTE UNUTUK LECTURERS
Route::get('/users/lecturers', [UserController::class, 'index_lecturers'])->name('users.index_lecturers');
Route::get('/users/lecturers/create', [UserController::class,'create_lecturers'])->name('users.create_lecturers');
Route::post('/users/lecturers', [UserController::class, 'store_lecturers'])->name('users.store_lecturers');
Route::put('/users/lecturers/{id}', [UserController::class, 'update_lecturers'])->name('users.update_lecturers');
Route::get('/users/lecturers/{id}', [UserController::class, 'show_lecturers'])->name('users.show_lecturers');
Route::get('/users/lecturers/{id}/edit_lecturers', [UserController::class, 'edit_lecturers'])->name('users.edit_lecturers');
Route::delete('/users/lecturers/{id}', [UserController::class, 'destroy_lecturers'])->name('users.destroy_lecturers');

//ROUTE UNUTUK STUDENTS
Route::get('/users/students', [UserController::class, 'index_students'])->name('users.index_students');
Route::get('/users/students/create', [UserController::class,'create_students'])->name('users.create_students');
Route::post('/users/students', [UserController::class, 'store_students'])->name('users.store_students');
Route::put('/users/students/{id}', [UserController::class, 'update_students'])->name('users.update_students');
Route::get('/users/students/{id}', [UserController::class, 'show_students'])->name('users.show_students');
Route::get('/users/students/{id}/edit_students', [UserController::class, 'edit_students'])->name('users.edit_students');
Route::delete('/users/students/{id}', [UserController::class, 'destroy_students'])->name('users.destroy_students');

//ROUTE UNUTUK INVENTORYS
Route::get('/inventorys', [InventoryController::class, 'index'])->name('inventorys.index');
Route::get('/inventorys/add', [InventoryController::class, 'create'])->name('inventorys.create');
Route::post('/inventorys/store', [InventoryController::class, 'store'])->name('inventorys.store');
Route::put('/inventorys/{id}', [InventoryController::class, 'update'])->name('inventorys.update');
Route::get('/inventorys/{id}', [InventoryController::class, 'show'])->name('inventorys.show');
Route::get('/inventorys/{id}', [InventoryController::class, 'edit'])->name('inventorys.edit');
Route::delete('/inventorys/{id}', [InventoryController::class, 'destroy'])->name('inventorys.destroy');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', 'AuthController@logout')->name('logout');

//ROUTE UNUTUK USAGES
// Route::prefix('usages')->group(function () {
//     Route::get('', [UsageController::class, 'index'])->name('usages.index');
//     Route::get('create', [UsageController::class, 'create'])->name('usages.create');
//     Route::post('store', [UsageController::class, 'store'])->name('usages.store');
//     Route::get('show/{idpb}', [UsageController::class, 'show'])->name('usages.show');
//     Route::get('edit/{idpb}', [UsageController::class, 'edit'])->name('usages.edit');
//     Route::put('edit/{idpb}', [UsageController::class, 'update'])->name('usages.update');
//     Route::delete('destroy/{idpb}', [UsageController::class, 'destroy'])->name('usages.destroy');
// });