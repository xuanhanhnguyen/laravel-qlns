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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//------------------------------------
//-------------admin------------------
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'nhansu'], function () {
        //thêm sửa xóa danh sách nhân sự
        Route::get('danh-sach', 'NhanSuController@getDanhSach');

        Route::get('them', 'NhanSuController@getThem');
        Route::post('them', 'NhanSuController@postThem');

        Route::get('sua/{id}', 'NhanSuController@getSua');
        Route::post('sua/{id}', 'NhanSuController@postSua');

        Route::get('xoa/{id}', 'NhanSuController@getXoa');
        //Lịch sử công tác
        Route::get('lich-su-cong-tac/{id}', 'NhanSuController@getLichSu');
        Route::post('lich-su-cong-tac', 'NhanSuController@postLichSu');
    });
    Route::group(['prefix' => 'xinnghi'], function () {
        //xin nghỉ
        Route::get('xin-nghi/{id}', 'NhanSuController@getXinNghi');
        Route::post('xin-nghi', 'NhanSuController@postXinNghi');

        Route::get('them', 'NhanSuController@getThemXN');
        Route::post('them', 'NhanSuController@postThemXN');

        Route::get('phe-duyet/{id}', 'NhanSuController@getPheDuyet');

        Route::get('sua/{id}', 'NhanSuController@getSuaXN');
        Route::post('sua/{id}', 'NhanSuController@postSuaXN');

        Route::get('xoa/{id}', 'NhanSuController@getXoaXN');
    });
});


