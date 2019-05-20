<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
  
    public function listBlog(){
    	$blogs = Blog::get();
    	$siteName = "Bloger";
    	return view('blogList')->with(['blogs'=>$blogs,'siteName'=>$siteName]);
    }
    public function displayBlog($blogid){
    	$blog =  Blog::find($blogid);
		return view('singleBlog')->with(['singleBlog'=>$singleBlog]);
    }
	public function newComment(){
		return view('addBlog');
	}
	public function saveComment(Request $request){
	$blog = new Blog();
	$blog->title= $request->title;
	$blog->content = $request->content;
	$blog->sender= $request->sender;
	$blog->save();
	return view('singleBlog',compact('singleBlog'));
	}
}
