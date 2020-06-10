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
Route::get('/produk', 'DepanController@produklist')->name('produk');
Route::get('/produk/{slug}', 'DepanController@produkdetail');
Route::get('/profile', 'DepanController@profile')->name('profile');
Route::get('/resep', 'DepanController@reseplist')->name('resep');
Route::get('/resep/{id}', 'DepanController@resepdetail');
Route::get('/testimonial', 'DepanController@testimonial')->name('testimonial');
Route::get('/galeri', 'DepanController@galeri')->name('galeri');
Route::get('/blog', 'DepanController@blog')->name('blog');
Route::get('/hubungi-kami', 'DepanController@hubungi_kami')->name('hubungi-kami');
Route::post('/hubungi-kami', 'DepanController@hubungikami_store')->name('hubungi-kami.simpan') ;


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
    Route::resource('galeri', 'GaleriController');
    Route::resource('blog', 'BlogController');
    Route::resource('hubungi-kami', 'HubungiKamiCtrl');
});