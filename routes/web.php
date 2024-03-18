<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\MoreCategoryController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\slideController;
use App\Http\Controllers\DropDownController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
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
Route::get('about',[AboutController::class, 'about'])->name('about');
Route::resource('quotes',QuotesController::class);
Route::resource('feedback',FeedbackController::class);


Route::get('/MoreCategory',[MoreCategoryController::class,'index'])->name('MoreCategory');
Route::get('/product-category/{id}', [CategoryController::class, 'Afficher'])->name('product-category');
Route::get('/cart',[CartController::class,'index'])->name('cart');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');


// page de contact:
Route::get('/inbox',[ContactController::class,'index'])->name('inbox');

// search:
Route::get('/search_Shop',[ShopController::class, 'search']);
Route::get('/search_Blog',[BlogController::class, 'search']);

// Pages:
// Route::get('/contact',[ContactController::class,'index']);
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/shop',[ShopController::class,'index'])->name('shop');

// Delete all FAQ:
Route::delete('/faq/delete-all', [FaqController::class, 'destroyAll'])->name('faq.destroy-all');
Route::get('/faqs', [FaqController::class, 'index'])->name('Faq.index');

//Email - contact :
Route::resource('/contact', ContactController::class);
//  Route::post('/contact', [ContactController::class, 'sendEmail'])->name('send.email');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    });
});

// FAQ:
Route::resource('faqs',FaqController::class);

Route::resource('Brands' , BrandController::class);
Route::resource('Color', ColorController::class);
Route::resource('sizes', SizeController::class);
Route::resource('Articles', ArticleController::class);


// Search:
Route::get('/search_Home',[StoreController::class,'search']);
// slide:
Route::resource('slides',slideController::class);

// Banners:
Route::resource('banners', BannerController::class);

// Informations:
Route::resource('infos', InfosController::class);

// Review:
Route::post('/reviews', [ReviewController::class, 'store'])->middleware('auth')->name('reviews.store');


// WishList:
Route::post('/wishlist/{product}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');

Route::delete('/wishlist/{Wishlist}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');

Route::post('/cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
Route::patch('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Define routes for other cart operations

// Tag:
Route::resource('Tags', TagsController::class);

// Checkout - payment part
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place-order');
Route::get('/Factorys', [CheckoutController::class, 'Factory'])->name('Factory');


// OrderList:
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

// Dropdown:
Route::get('dropdown',[DropDownController::class,'index']);
Route::post('api/fetch-state',[DropDownController::class,'fatchState']);
Route::post('api/fetch-cities',[DropDownController::class,'fatchCity']);





// Newsletter :
Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');



Route::middleware('auth')->group(function () {
    Route::get('/delete-user', [ProfileController::class, 'delete_user'])->name('delete_user');
    Route::get('/update-password', [ProfileController::class, 'update_password'])->name('update_password');
    Route::get('/profile-details', [ProfileController::class, 'index'])->name('profile');
    Route::get('/My_Orders', [ProfileController::class, 'My_Orders'])->name('My_Orders');
    // Route::get('/Wish_List', [ProfileController::class, 'Wish_List'])->name('Wish_List');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
