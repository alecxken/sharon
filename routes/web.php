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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/raceit', function () {
    return view('receit');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-industry', 'CompanyController@createcompany')->name('home');

Route::post('/industry-store', 'CompanyController@storecompany');

Route::get('/drop-industry/{id}', 'CompanyController@deletecompany');


#create-store routes
Route::get('/profile','HomeController@user');

Route::get('/calendar','ProductController@calendar');

Route::get('/product-view','ProductController@viewproduct');

Route::get('/product-create','ProductController@createproduct');

Route::get('product-get/{id}','ProductController@getproduct');

Route::get('/product-drop/{id}','ProductController@deleteproduct');

Route::post('/product-store','ProductController@storeproduct');

Route::post('/product-update','ProductController@updateproduct');


Route::get('/loan-settings','ProductController@createloan');

Route::post('/store-loan-settings','ProductController@storeloansettings');

Route::get('/getloandestroy/{id}','ProductController@getloandestroy');


Route::get('/dashboard', 'AdminController@index')->name('Dashboard');

//permissions and Roles
Route::resource('admin', 'UserController');
Route::resource('roles', 'RoleController');
//roles RouteServiceProvider
Route::get('/roles_index','RoleController@index');
Route::get('/roles_create','RoleController@create');

Route::post('/roles_store','RoleController@store');
Route::post('/roles_update/{id}','RoleController@update');
Route::post('/roles_destroy/{id}','RoleController@destroy');
Route::post('/roles_edit/{id}','RoleController@edit');
Route::post('/roles_show/{id}','RoleController@show');

//permissions and Roles
Route::get('/user_index','UserController@index');
Route::get('/user_create','UserController@create');
Route::get('/users_create','UserController@create');
Route::post('/user_stores','UserController@storez');

Route::post('/user_store','UserController@store');
Route::post('/user_update/{id}','UserController@update');
Route::get('/user_destroy/{id}','UserController@destroy');
Route::post('/user_edit/{id}','UserController@edit');
Route::post('/user_show/{id}','UserController@show');

//permissions and Roles
Route::get('/permissions_index','PermissionController@index');
Route::get('/permission_create','PermissionController@create');
Route::post('/permissions_store','PermissionController@store');
Route::post('/permissions_update/{id}','PermissionController@update');
Route::post('/permissions_destroy/{id}','PermissionController@destroy');
Route::post('/permission_edit/{id}','PermissionController@edit');
Route::post('/permission_show/{id}','PermissionController@show');
Route::resource('/permissions', 'PermissionController');


Route::get('/get_roles/{id}','UsermanagementController@getroles');



Route::get('/get_users_details/{id}','UsermanagementController@getusers');

Route::get('/drop_users_details/{id}','UsermanagementController@dropusers');

Route::post('/user_update_data','UsermanagementController@update');

Route::get('/user_index','UsermanagementController@index');

Route::post('/user_store_data','UsermanagementController@store');

Route::post('/roles_admin_store','UsermanagementController@storeroles');