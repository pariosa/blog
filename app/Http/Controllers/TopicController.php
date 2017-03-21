<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Board;
use App\Topic;
use Auth;

class TopicController extends Controller
{
    public function create(Request $request){
    $board = Board::where('id', '=', $request->Board)->first();
   	$user = auth()->user()->id;
   	//dd($request->Board);
   	$topic = Topic::Create([
            'Board' => $request->Board, 
            'Author' => $user,
   		]);
    //dd($board->Abbreviation);
   	$id = $topic->id;
   	$first = Reply::Create([
   		'Board' => $request->Board,
   		'Author' => $user,
   		'Topic' => $id,
   		'Subject' => $request->Subject,
   		'Content' => $request->Content,
   		'Image' => $request->Image,
   		]);
   	return redirect('/b/'.$board->Abbreviation);

    }

    public function read(){

    }

    public function update(){

    }
    public function delete(){
    	
    }
}
