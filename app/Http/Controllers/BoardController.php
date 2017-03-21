<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use Illuminate\Support\Facades\Storage;

class BoardController extends Controller
{
    public function create(Request $request){
        $filelocation = Storage::put($request->Abbreviation.'.jpg', $request->Header);
        
        $board =  Board::create([
            'Name' => $request->Name,
            'Abbreviation' => $request->Abbreviation, 
            'Description' => $request->Description,
            'moderators' => $request->moderators,
            'Header' => $filelocation,
        ]);

        return redirect('/boards');

    }

    public function read(){

    	$boards = Board::all();
        $with = ['boards'=> $boards];
    	
    	return view('boards')->with($with);
    }

    public function update(){

    }
    public function delete(){
    	
    }
}
