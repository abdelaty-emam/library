<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Category;
use \App\Book;
use \App\Comment;


class PagesController extends Controller
{
    public function viewcategory($id){

	      $category_id =Category::find($id);
	      $books = $category_id->books;

	      return view('viewcategory')->with(['books'=>$books,'category'=>$category_id]);

    }

    public function viewbook($id){
           $book= Book::findorFail($id);
           return view('book')->with('book',$book);

    }
    public function addcomment(Request $request,$id){
           $book= Book::findorFail($id);
           $comment=new Comment();
           $comment->user_id= auth()->user()->id;
           // dd(Auth::user());
           $comment->book_id=$book->id;
           $comment->comment=$request->input('comment');
           $comment->save();
           return redirect()->back();



    }
}
