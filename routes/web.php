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

//Route::get('/test/{Id}/{username}',function ($Id,$username){
    //return "u bitch".$Id.$username;});
//Route::get('/test1/{id}/{username}',function ($id,$username){
  // return"hiiiiiiiiiii".$id.$username;})->name("show.con");
//Route::get('/post/{id}/{UserName}','postController@index')->where(['id'=>'[1-9]+','UserName'=>'[a-z]+']);
Route::resource('/post','postController');
Route::resource('/dir', 'dirController');
Route::resource('comment','CommentController');
Route::get('/news',function (){
  return  view('post.news');
});


































