<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
     protected $table = 'topics';
  	  public $timestamps = true;
  	  const CREATED_AT = 'created_at';
      const UPDATED_AT = 'updated_at';
      protected $fillable = ['id','Board', 'Author', 'Placeholder'];
      
 	public function replies(){
 		return $this->hasMany('App\Reply');
 	}
 	public function board(){
 		return $this->belongsTo('App\Board');
 	}
}
