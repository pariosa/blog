<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
      protected $table = 'boards';
  	  public $timestamps = true; 
  	  const CREATED_AT = 'created_at';
      const UPDATED_AT = 'updated_at';
      protected $fillable = ['id','Name', 'Abbreviation', 'Description', 'moderators', 'Header'];
      
      public function topics(){
      	return $this->hasMany('App\Topic', 'Board', 'id');
      }
      public function replies(){
      	return $this->hasMany('App\Reply', 'Board', 'id');
      }
}
  