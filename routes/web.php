<?php



// Route::get('/', function () {
//     return view('welcome');
// });


//Auth
Auth::routes();
//Route::get('/', 'HomeController@welcome');

Route::get('/', 'HomeController@index')->name('home');
//News routes
Route::resource('news','NewsController');
//category routes
Route::resource('category','CategoriesController');

//change password
Route::get('/change-password','ChangePasswordController@index')->name('password.change');
Route::post('/change-password','ChangePasswordController@changePassword')->name('password.update');

//Setting Page
Route::get('/settings', 'SettingController@setting');
Route::post('/settings', 'SettingController@save');

//search News
Route::get('/search', 'NewsController@search');


