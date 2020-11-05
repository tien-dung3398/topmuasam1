<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

/* 
<!-------------------------------------------------ADMIN----------------------------------------------------!>
 */

/* Admin */
Route::group(['prefix' => '127.33.98'], function () {
    Route::get('/', 'AdminController@login')->name('admin.login');
    Route::get('trangquantri', 'AdminController@index')->name('admin.index');
    Route::post('post-login', 'AdminController@loginPost')->name('loginPost');
    Route::get('logout', 'AdminController@logout')->name('admin.logout');
    Route::get('register', 'AdminController@register')->name('admin.register');
    Route::post('create-account', 'AdminController@create')->name(('admin.create'));
});
