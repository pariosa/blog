<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Board;
use App\Topic;
use Auth;
class ReplyController extends Controller
{
public function create(Request $request){
    $board = Board::where('id', '=', $request->Board)->first();
   	$user = auth()->user()->id;
   	//dd($request->Board);
   	$topic = Topic::where('id', '=', $request->Topic)->first();
    //dd($board->Abbreviation);
   	$id = $topic->id;
   	$reply = Reply::Create([
   		'Board' => $request->Board,
   		'Author' => $user,
   		'Topic' => $id,
   		'Subject' => $request->Subject,
   		'Content' => $request->Content,
   		'Image' => $request->Image,
   		]);
   	return redirect('/b/'.$board->Abbreviation."/".$id);

    }

    public function read(){

    }

    public function update(){

    }
    public function delete(){
    	
    }
}
