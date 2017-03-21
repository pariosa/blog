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


Route::get('/post',  'blogController@post');

Route::post('/blogpost', 'blogController@create');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/blog', 'blogController@index');
Route::post('/delete', 'blogController@delete');

Route::get('/setup', function(){

	if( (App\User::all()->isEmpty()) ){
		return view('setup');

	} 
});

Route::post('/setupRun', 'Auth\RegisterController@createAdmin');

Route::get('/users', function(){
	return App\User::all();
});

Route::get('/admin', 'AdminController@index');
Route::post('/createBoard', 'BoardController@create');

Route::get('/board', 'BoardController@read');

Route::get('b/{board}', function($board){
	$board = App\Board::where("Abbreviation", '=', $board)->first();
	//dd($board);
	$topics = App\Topic::where("Board", '=', $board->id)->get();
	$with = ['board' => $board, 
		'topics' =>$topics];
	return view('board')->with($with);
});

Route::post('/createTopic', 'TopicController@create');

Route::get('/topics', function(){

	return App\Topic::all();
});

Route::get('/replies', function(){

	return App\Reply::all();
});