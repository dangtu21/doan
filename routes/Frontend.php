<?php
use Illuminate\Support\Facades\Route;
Route::get('/','App\Http\Controllers\FrontendController@index')->name('home');
Route::get('/home','App\Http\Controllers\FrontendController@home')->name('home1');
Route::get('/SingIn','App\Http\Controllers\FrontendController@singIn')->name('SingIn');
Route::post('/SingIn', 'App\Http\Controllers\Auth\LoginController@login')->name('SingIn');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::get('/register', function () {
    return view('Frontend.singUp');
})->name('register');
Route::get('/register', 'App\Http\Controllers\FrontendController@singUp')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/products','App\Http\Controllers\FrontendController@products')->name('products');
Route::get('/balo','App\Http\Controllers\FrontendController@balo')->name('balo');
Route::get('/balo/baloHocSinh','App\Http\Controllers\FrontendController@baloHocSinh')->name('baloHocSinh');
Route::get('/balo/baloLapTop','App\Http\Controllers\FrontendController@baloLapTop')->name('baloLapTop');
Route::get('/balo/baloLapTop','App\Http\Controllers\FrontendController@baloLapTop')->name('baloLapTop');
Route::get('/balo/baloNam','App\Http\Controllers\FrontendController@baloNam')->name('baloNam');
Route::get('/balo/baloNu','App\Http\Controllers\FrontendController@baloNu')->name('baloNu');
Route::get('/balo/baloTheThao','App\Http\Controllers\FrontendController@baloTheThao')->name('baloTheThao');
Route::get('/balo/baloThoiTrang','App\Http\Controllers\FrontendController@baloThoiTrang')->name('baloThoiTrang');
Route::get('/hienthisanpham/{id}', 'App\Http\Controllers\FrontendController@hienthisanpham')->name('hienthisanpham.hienthisanpham');
Route::get('/giohang', 'App\Http\Controllers\FrontendController@giohang')->name('giohang');
Route::get('/thanhtoan', 'App\Http\Controllers\FrontendController@thanhtoan')->name('thanhtoan');


?>