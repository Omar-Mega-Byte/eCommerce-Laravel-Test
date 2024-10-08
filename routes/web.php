<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResetPasswordController;

Route::redirect('/','posts');

Route::get('/about-me', function () {
    return view('pages/about',[
        'page_name' => 'About Page',
        'page_description' => 'This is Description',
    ]);
})->name('about');

Route::view('/contact-me', "pages/contact" , [
    'page_name' => 'Contact Me Page',
    'page_description' => 'This is Description'
])->name('contact');

Route::get('/category/{id}/posts/{post}', function ($id,$post) {
    $cats = [
        '1' => 'Games',
        '2' => 'Programming',
        '3' => 'Books'
    ];

    return view('pages/category',[
        'page_name' => 'Category Page',
        'page_description' => 'This is Description',
        'the_id' => $cats[$id] ?? "This ID is not found !",
        'the_post' => $post
    ]);
})->name('category');

Route::middleware('guest')->group(function(){
    Route::view('/register', 'auth/register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth/login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Reset Password Routes
    Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
    Route::post('/forgot-password', [ResetPasswordController::class, 'passwordEmail']);
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->name('password.update');

    // Admin Dashboard route
    Route::get('/admin', [AdminController::class, 'index'])->middleware('verified')->name('admin');
});

Route::middleware('auth')->group(function () {
    // User Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');

    // Logout Route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Email Verification Notice route
    Route::get('/email/verify', [AuthController::class, 'verifyEmailNotice'])->name('verification.notice');

    // Email Verification Handler route
    Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmailHandler'])->middleware('signed')->name('verification.verify');

    // Resending the Verification Email route
    Route::post('/email/verification-notification', [AuthController::class, 'verifyEmailResend'])->middleware('throttle:6,1')->name('verification.send');

    // Admin Dashboard route
    Route::get('/admin', [AdminController::class, 'index'])->middleware('verified')->name('admin');
});

Route::resource('posts', PostController::class);

Route::resource('products', ProductController::class);

Route::resource('cart', CartController::class);

Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/products.shop', [ProductController::class, 'shop'])->name('shop');

Route::get('/cart.index', [CartController::class, 'showCart'])->name('cart');
Route::get('/cart.remove', [CartController::class, 'removeFromCart'])->name('removeFromCart');
Route::post('/cart.clear', [CartController::class, 'clearCart'])->name('cart.clear');

// Route::view('/cart', 'cart.index')->name('cart');

Route::resource('contacts', ContactUsController::class);

Route::resource('users', AdminController::class);

Route::get('/{user}/posts', [dashboardController::class, 'userPosts'])->name('posts.users');
