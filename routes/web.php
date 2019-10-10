<?php

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

Route::group(['middleware' => 'catalog'], function() {
    Route::get('/', 'HomeController@index');
});


Route::prefix('login')->group(function (){
    //Admin
    Route::get('/admin', 'AdminAuth\LoginController@showLoginForm')->name('admin.loginForm');
    Route::post('/admin', 'AdminAuth\LoginController@login')->name('admin.login');

    //Front
    Route::get('/', 'FrontAuth\LoginController@showLoginForm')->name('login');
    Route::post('/', 'FrontAuth\LoginController@login');

});

Route::middleware('admin.auth')->prefix('admin')->namespace('Admin')->group(function (){

    Route::get('/', 'DashboardController@dashboard')->name('admin.index');


    Route::resource('/sliders', 'SliderController');

    Route::resource('/brands', 'BrandsController');

    Route::resource('/categories', 'CategoryController');
    Route::get('/categories/{id}/categories', 'CategoryController@categories')->name('categories.categories');


    /*
     * Product route
     */
    Route::resource('/products', 'ProductController');
    Route::get('/removeGalleryImage/{image_id}/{product_id}', 'ProductController@removeGalleryImage')->name('custom.ImageDelete');

    Route::resource('/users', 'UserController');
    Route::put('/users/{id}/changePassword', 'UserController@passwordChange')->name('users.change.password');
    // Profilena
    Route::get('/profile/{id}', 'ProfileController@show')->name('profile.show');

    Route::get('/dashboard/to/another/color', 'DashboardController@dashboardColorChange')->name('admin.dashboard.color.change');
    /**
     * Контакты
     */
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('/contact/edit', 'ContactController@edit')->name('contact.edit');
});




// FrontAuthentication Routes...
Route::get('logout', 'FrontAuth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'FrontAuth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'FrontAuth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'FrontAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'FrontAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'FrontAuth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'FrontAuth\ResetPasswordController@reset');
