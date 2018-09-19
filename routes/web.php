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
Route::group(['prefix'=>'admin'],function(){

	Route::get('home_admin','home_studentController@homestudent');

	Route::group(['prefix'=>'danhsachsinhvien'],function(){
		Route::get('danh_sach_sinh_vien','home_dssvController@dssv');

		Route::post('them_sv','thong_tin_svController@themsv')->name('them_sv');
		Route::post('them','thong_tin_svController@them')->name('them');

		Route::get('sua_sv/{user_name}','thong_tin_svController@suasv')->name('sua_sv');
		Route::post('sua/{user_name}','thong_tin_svController@sua')->name('sua');

		Route::get('xoa_sv/{user_name}','thong_tin_svController@xoasv')->name('xoa_sv');
	});

	Route::get('capnhat','TTCa_NhanController@capnhat');

	

	Route::post('danh_sach_giang_vien','home_dsgvController@dsgv');

	Route::post('danh_sach_bo_mon','home_bomonController@bomon');

	Route::post('change_password','change_passwordController@change_password');

	Route::post('dangky','home_dangkynvController@dangky');
	Route::get('login',function(){
		return view('login.login');
	});

	Route::post('login_form','loginController@login')->name('login_form');


});