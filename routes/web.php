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

Route::get('/','WelcomeController@homePage');
Route::get('/product-detail', function () {
    return view('product-detail');
});
Route::get('/department/{id}/{slug}','DepartmentController@departmentview');
Route::get('/products', function () {
    return view('products');
});
Route::get('/proffesional', function () {
    return view('proffesional');
});
Route::get('/proffesional-view', function () {
    return view('proffesional-view');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::group(['middleware' => ['auth']],function (){
  Route::resource('project','ProjectController');

  Route::get('/dashboard/project', function () {
      return view('dashboard.projects.create');
  });

  Route::get('/dashboard/profile', function () {
      return view('dashboard.profile.profile');
  });
});

Route::get('/shopping', function () {
    return view('shopping-cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
