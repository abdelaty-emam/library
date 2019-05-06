<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = ['title','auther','info','image','bookfile','category_id'];     
 public function category(){

        return $this->belongsTo('\App\Category','category_id');


    }
  /**
  users-book relaation
  **/
      public function user(){

        return $this->belongsTo('\App\User');


    }  

 /**
 comments-book relation
 **/
  public function comments(){

        return $this->hasMany('\App\Comment');


    }  



}
