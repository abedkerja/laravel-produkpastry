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

Route::get('/', ['as' => 'home', 'uses' => 'DepanController@index']);
Route::get('/produk', 'DepanController@produklist');
Route::get('/produk/{id}', 'DepanController@produk');
Route::get('/profile', 'DepanController@profile');
Route::get('/resep', 'DepanController@resep');
Route::get('/testimonial', 'DepanController@testimonial');


// Auth::routes();

Route::get('/admin/login',function(){
	return view('auth.login');
})->middleware('guest');

// Routing untuk authentifikasi
Route::group(['namespace' => 'auth'],function(){
	Route::post('/admin/login','LoginController@login')->name('login');
    Route::get('/admin/logout',function(){
        Auth::logout();
        return redirect('/admin/login');
    })->name('logout');
    Route::get('admin/resetpassword','LoginController@resetpass')->name('admin.resetpass')->middleware('admin');
    Route::post('resetpassword','LoginController@reset')->name('reset');
});

// Routing untuk user level admin
Route::group(['namespace' => 'backend','prefix' => 'admin','middleware' => 'admin'], function() {
    Route::get('/', 'DashboardCtrl@index')->name('admin');
    Route::resource('produk','ProdukCtrl');
    Route::resource('profile','ProfileUsaha');
    Route::resource('testimonial', 'TestimonialCtrl');
    Route::resource('resep','ResepCtrl');

    // Route::resource('pengumuman','PengumumanCtrl');

    // Route::resource('kejuruan','KejuruanCtrl');
});

// Route::get('/home', 'HomeController@index')->name('home');
