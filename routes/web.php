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
Route::get('/project-single/{project}','ProjectController@projectsingle');
Route::get('/proffesional', function () {
    return view('proffesional');
});
Route::get('/proffesional-view', function () {
    return view('proffesional-view');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/shopping', function () {
    return view('shopping-cart');
});

Route::group(['middleware' => ['auth']],function (){
  Route::resource('project','ProjectController');
  // Route::get('/profile/{id}/{slug}','ProfileController@index');
  // Route::post('/profile/{id}/{slug}','ProfileController@store');
Route::resource('/profile','ProfileController');
  Route::get('/dashboard/project', function () {
      return view('dashboard.projects.create');
  });

  Route::get('/dashboard/profile', function () {
      return view('dashboard.profile.profile');
  });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
