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
Route::group([],function(){
	Route::get('/hello',function(){
		return 'Hello welcome Laravel';
	});
	Route::get('/goods/{id}',function($id){
		echo '商品的详情页 id为'.$id;
	})->where('id','\d+');
	Route::get('/{type}-{id}',function($type,$id){
		echo '类型为'.$type.',id为'.$id;
	});
	Route::get('/admin/usr/index',[
		'as' => 'userinfo',
		'uses' => function(){
			echo '用户信息 别名';
			echo route('userinfo');
		}
	
	]);
	Route::get('/session',function(){
		session(['uid'=>2]);
	});
	Route::get('/admin/setting',[
		'middleware' => 'login:job',
		'uses'		 => function(){
			echo '后台设置页面';
		}
	]);
	Route::get('/login',function(){
		echo '<h1>后台登录页面</h1>';
	});
	Route::get('/404',function(){
		abort(404);
	});
	Route::get('/film',function(){
		return view('./film');
	});
	Route::get('/show','UserController@show');
	Route::get('/info',[
		'middleware' => 'login',
		'uses'		 => 'UserController@info'

	]);
	Route::resource('news','NewsController');
});
