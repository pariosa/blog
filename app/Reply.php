<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
     protected $table = 'replies';
  	  public $timestamps = true;
  	  const CREATED_AT = 'created_at';
      const UPDATED_AT = 'updated_at';
      protected $fillable = ['id','Board', 'Tripseed', 'Tripcode', 'Topic', 'Author', 'Subject', 'Content', 'Image', 'Thumbnail'];
 	
 	   public function topic(){
      	return $this->belongsTo('App\Topic');
      }
      public function board(){
      	return $this->belongsTo('App\Board');
      }
}
