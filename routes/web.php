<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MoreCategoryController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\ShopController;
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
Route::resource('abouts',AboutController::class);
Route::resource('quotes',QuotesController::class);
Route::resource('feedback',FeedbackController::class);


Route::get('/MoreCategory',[MoreCategoryController::class,'index'])->name('MoreCategory');


// Pages:
// Route::get('/contact',[ContactController::class,'index']);
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blog-details',[BlogDetailsController::class,'index'])->name('blog-details');
Route::get('/shop',[ShopController::class,'index'])->name('shop');
//Email - contact :
 Route::get('/contact', [ContactController::class, 'create'])->name('contact');
 Route::post('/contact', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Slider:
// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

//     Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
//     Route::get('sliders', 'index');
//     Route::get('sliders/create', 'create');
//     Route::post('sliders/create', 'store');
// });
// })



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    });
});

// FAQ:
Route::resource('faqs',FaqController::class);

require __DIR__.'/auth.php';
