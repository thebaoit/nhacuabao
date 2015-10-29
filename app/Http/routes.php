<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
$number_only = '[0-9\.]+';
$text_only = '[A-Za-z\.]+';
$text_number = '[0-9A-Za-z\.]+';
$email = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$';

Route::get('/', 'HomeController@index');
Route::get('/detail/{detail_article}', 'HomeController@detail')->where(array('detail_article' => $text_number));

Route::get('/tui-noi-nham', 'HomeController@category')->where(array('category' => $text_only));
Route::get('/tui-nghiem-tuc', 'HomeController@category')->where(array('category' => $text_only));
Route::get('/tui-suu-tam', 'HomeController@category')->where(array('category' => $text_only));
Route::get('/tui-chup', 'HomeController@category')->where(array('category' => $text_only));
Route::get('/tui-di', 'HomeController@category')->where(array('category' => $text_only));
Route::get('/tui-binh-loan', 'HomeController@category')->where(array('category' => $text_only));


// Admin URL

Route::get('/admin/login', 'AdminUserController@index');
Route::post('/admin/login', 'AdminUserController@index');
Route::group(['prefix' => 'admin' ,'middleware' => 'auth'], function() use ($number_only, $text_only, $text_number, $email)
{
	Route::get('/','AdminHomeController@index');
	Route::get('/logout', 'AdminUserController@getLogout');

	Route::get('/tui-noi-nham', 'AdminNoiNhamController@index');
	Route::get('/tui-noi-nham/tao-moi', 'AdminBaseController@insert');
	Route::post('/tui-noi-nham/tao-moi', 'AdminBaseController@insert');
	Route::get('/tui-noi-nham/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));
	Route::post('/tui-noi-nham/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));

	Route::get('/tui-nghiem-tuc', 'AdminNghiemTucController@index');
	Route::get('/tui-nghiem-tuc/tao-moi', 'AdminBaseController@insert');
	Route::post('/tui-nghiem-tuc/tao-moi', 'AdminBaseController@insert');
	Route::get('/tui-nghiem-tuc/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));
	Route::post('/tui-nghiem-tuc/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));

	Route::get('/tui-suu-tam', 'AdminSuuTamController@index');
	Route::get('/tui-suu-tam/tao-moi', 'AdminBaseController@insert');
	Route::post('/tui-suu-tam/tao-moi', 'AdminBaseController@insert');
	Route::get('/tui-suu-tam/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));
	Route::post('/tui-suu-tam/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));

	Route::get('/tui-chup', 'AdminChupController@index');
	Route::get('/tui-chup/tao-moi', 'AdminBaseController@insert');
	Route::post('/tui-chup/tao-moi', 'AdminBaseController@insert');
	Route::get('/tui-chup/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));
	Route::post('/tui-chup/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));

	Route::get('/tui-di', 'AdminDiController@index');
	Route::get('/tui-di/tao-moi', 'AdminBaseController@insert');
	Route::post('/tui-di/tao-moi', 'AdminBaseController@insert');
	Route::get('/tui-di/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));
	Route::post('/tui-di/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));

	Route::get('/tui-binh-loan', 'AdminBinhLoanController@index');
	Route::get('/tui-binh-loan/tao-moi', 'AdminBaseController@insert');
	Route::post('/tui-binh-loan/tao-moi', 'AdminBaseController@insert');
	Route::get('/tui-binh-loan/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));
	Route::post('/tui-binh-loan/chinh-sua/{id}', 'AdminBaseController@update')->where(array('id' => $number_only));









	Route::get('/charts', function()
	{
		return View::make('mcharts');
	});

	Route::get('/tables', function()
	{
		return View::make('table');
	});

	Route::get('/forms', function()
	{
		return View::make('form');
	});

	Route::get('/grid', function()
	{
		return View::make('grid');
	});

	Route::get('/buttons', function()
	{
		return View::make('buttons');
	});


	Route::get('/icons', function()
	{
		return View::make('icons');
	});

	Route::get('/panels', function()
	{
		return View::make('panel');
	});

	Route::get('/typography', function()
	{
		return View::make('typography');
	});

	Route::get('/notifications', function()
	{
		return View::make('notifications');
	});

	Route::get('/blank', function()
	{
		return View::make('blank');
	});

	Route::get('/documentation', function()
	{
		return View::make('documentation');
	});
});