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
| Here AMAKOEis where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Auth::routes();
// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/index', function () {
//     return view('index');
// })->middleware('auth')->name('index');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Route::middleware('auth')->group(function () {

//     Route::get('/add_computer', [AddComputerController::class, 'create'])->name('add_computer');
//     Route::post('/add_computer', [AddComputerController::class, 'store'])->name('add_computer.store');

//     Route::get('/formulaire', function () {
//         return view('formulaire');
//     });

    // Route::get('/view_computers', [AddComputerController::class, 'index'])->name('view_computers');
    // Route::delete('view_computers/{id}', [AddComputerController::class, 'destroy'])->name('computers.destroy');

    // Route::get('view_computers/{id}/edit', [AddComputerController::class, 'edit'])->name('computers.edit');

    // Route::put('view_computers/{id}', [AddComputerController::class, 'update'])->name('computers.update');

// });

// Route::get('/view_computer', function () {
//     return view('view_computer');
// });


// Route::get('/view_computer', [AddComputerController::class, 'index'])->name('view_computer');
// Route::delete('view_computer/{id}', [AddComputerController::class, 'destroy'])->name('computers.destroy');

// Route::get('view_computer/{id}/edit', [AddComputerController::class, 'edit'])->name('computers.edit');

// Route::put('view_computer/{id}', [AddComputerController::class, 'update'])->name('computers.update');

Auth::routes();

// Page de connexion par défaut
Route::get('/', function () {
    return view('login');
})->name('login');

// Routes d'authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::middleware('auth')->group(function () {

    // Ajouter un ordinateur
    Route::get('/add_computer', [AddComputerController::class, 'create'])->name('add_computer');
    Route::post('/add_computer', [AddComputerController::class, 'store'])->name('add_computer.store');

    // Liste des ordinateurs
    Route::get('/view_computer', [AddComputerController::class, 'index'])->name('view_computer');

    // Suppression d'un ordinateur
    Route::delete('view_computer/{id}', [AddComputerController::class, 'destroy'])->name('computers.destroy');

    // Édition d'un ordinateur
    Route::get('view_computer/{id}/edit', [AddComputerController::class, 'edit'])->name('computers.edit');
    Route::put('view_computer/{id}', [AddComputerController::class, 'update'])->name('computers.update');
});
