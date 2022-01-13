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
    return view('login');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/users', 'HomeController@allUsers');
    Route::get('/my-account', 'HomeController@myAccount');
    
    Route::get('/waterdirnk', 'HomeController@allwaterdirnk');
    
    Route::any('/update-account', 'admin\AdminAccountSettingController@myAccountUpdate');
    Route::get('/type', 'HomeController@alltype');
    Route::get('/volume', 'HomeController@allvolume');
    Route::get('/minerals', 'HomeController@allminerals');

    Route::get('/brands', 'admin\BrandManagementController@index');
    Route::get('/brand/create', 'admin\BrandManagementController@create');
    Route::get('/brand/edit/{id}', 'admin\BrandManagementController@edit');
    Route::any('/brand/update/{id}', 'admin\BrandManagementController@update');
    Route::any('/brand/delete/{id}', 'admin\BrandManagementController@destroy');
    Route::any('/brand/store', 'admin\BrandManagementController@store');
    Route::get('/type', 'admin\TypeManagementController@index');
    Route::any('/type/create','admin\TypeManagementController@create');
    Route::get('/type/edit/{id}', 'admin\TypeManagementController@edit');
    Route::any('/type/update/{id}', 'admin\TypeManagementController@update');
    Route::any('/type/store', 'admin\TypeManagementController@store');
    Route::any('/type/delete/{id}', 'admin\TypeManagementController@destroy');
    Route::get('/volume', 'admin\VolumeManagementController@index');
    Route::any('/volume/create','admin\VolumeManagementController@create');
    Route::any('/volume/update/{id}', 'admin\VolumeManagementController@update');
    Route::any('/volume/delete/{id}', 'admin\VolumeManagementController@destroy');
    Route::any('/volume/store','admin\VolumeManagementController@store');
    Route::get('/minerals', 'admin\MineralManagementController@index');
    Route::any('/minerals/create','admin\MineralManagementController@create');
    Route::any('/minerals/update/{id}', 'admin\MineralManagementController@update');
    Route::any('/minerals/delete/{id}', 'admin\MineralManagementController@destroy');
    Route::any('/minerals/store','admin\MineralManagementController@store');
    Route::get('/volume/edit/{id}', 'admin\VolumeManagementController@edit');
    Route::get('/minerals/edit/{id}', 'admin\MineralManagementController@edit');
    Route::get('/water', 'admin\WaterTypeManagementController@index');
    Route::any('/water/create','admin\WaterTypeManagementController@create');
    Route::any('/water/store','admin\WaterTypeManagementController@store');
    
});

