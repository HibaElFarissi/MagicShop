<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[StoreController::class,'index']);

Route::resource('products',ProductController::class);
Route::resource('categories',CategoryController::class);

// Pages:
// Route::get('/contact',[ContactController::class,'index']);
Route::get('/about',[AboutController::class,'index']);

//Email - contact :
 Route::get('/contact', [ContactController::class, 'create'])->name('contact');
 Route::post('/contact', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    });
});


require __DIR__.'/auth.php';
