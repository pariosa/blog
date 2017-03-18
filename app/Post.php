<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
  	  protected $table = 'posts';
  	  public $timestamps = true;
  	  const CREATED_AT = 'created_at';
      const UPDATED_AT = 'updated_at';
      protected $fillable = ['id','Title', 'Subtitle', 'Content', 'owner', 'tags'];
}
