<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
    Comments-Book relation
    **/
     public function book(){

        return $this->belongsTo('\App\Book');


    }

/**
    Comments-User relation
    **/
     public function user(){

        return $this->belongsTo('\App\User');


    }
    }
