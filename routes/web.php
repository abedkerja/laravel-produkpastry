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

Route::get('/', ['as' => 'home', 'uses' => 'frontend\DepanController@index']);
Route::get('/produk', 'DepanController@produklist');
Route::get('/produk/{id}', 'DepanController@produk');


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
    Route::resource('stok', 'StokCtrl');
    Route::resource('blog','BlogCtrl');

    // Route::resource('pengumuman','PengumumanCtrl');

    // Route::resource('kejuruan','KejuruanCtrl');
});

// Route::get('/home', 'HomeController@index')->name('home');
