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
// Route::get('/about',function(){
// 	return view('about');
// });
// Route::view('/about','about');
use Illuminate\Http\Request;

Route::get('/', function () {
	$siteName = "Bloger"; 
	$blogs = [
	[
	'title' => 'first entry',
	'content' =>'welcome to my first blog',
	'sender'=> 'Gs'
	],
	[
	'title' => 'greetings',
	'content' =>' good day !!',
	'sender'=> 'Ps'
	]
	];
    return view('blogList')->with(['blogs'=>$blogs,'siteName'=>$siteName]);
});
Route::get('/blogs/{blogid}/view', function($blogid){
$siteName = "Bloger"; 
	$blogs = [
	[
	'title' => 'first entry',
	'content' =>'welcome to my first blog',
	'sender'=> 'Gs'
	],
	[
	'title' => 'greetings',
	'content' =>' good day !!',
	'sender'=> 'Ps'
	]
	];
$singleBlog = $blogs[$blogid];
return view('singleBlog')->with(['singleBlog'=>$singleBlog]);
});
Route::view('/blog/addEntry','addBlog');
Route::post('/blog/newEntryView',function(Request $request){
	$singleBlog = [];

	$singleBlog['title'] = $request->title;
	$singleBlog['content'] = $request->content;
	$singleBlog['sender'] = $request->sender;
	return view('singleBlog',compact('singleBlog'));
});