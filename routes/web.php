<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AddComputerController;
use App\Models\AddComputer;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->middleware('auth')->name('index');

// Route::get('register', function () {
//     return view('register');
// });

Route::post('register', [UserController::class, 'store'])->name('user.store'); 


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/add_computer', [AddComputerController::class, 'create'])->name('add_computer');
Route::post('/add_computer', [AddComputerController::class, 'store'])->name('add_computer.store');

Route::get('/formulaire', function () {
    return view('formulaire');
});

Route::get('/view_computers', [AddComputerController::class, 'index'])->name('view_computers');
Route::delete('view_computers/{id}', [AddComputerController::class, 'destroy'])->name('computers.destroy');

Route::get('view_computers/{id}/edit', [AddComputerController::class, 'edit'])->name('computers.edit');

Route::put('view_computers/{id}', [AddComputerController::class, 'update'])->name('computers.update');
