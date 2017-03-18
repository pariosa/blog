<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
class blogController extends Controller
{
    public function post(){
    	return view('post');
    }

    public function create(Request $request){
    	$post = new Post;
     	$post->Title = $request->Title;
    	$post->Subtitle = $request->Subtitle;
    	$post->tags = $request->tags;
    	$post->owner = auth()->user()->id;
    	$post->Content = $request->Content;
    	$post->save();
    	return redirect('/blog');


    }

    public function index(){
    	$posts = Post::all();
    	//dd($posts);
		$with = ['posts' => $posts];
    	return view('blog')->with($with);
    }

    public function delete(Request $request){
    	$post = Post::where('id', '=', $request->id)->first();
    	$post->delete();
    	return redirect('/blog');
    }
}
