<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use \App\Category;
use \App\Book;

class UploadController extends Controller
{
    public function index(){
        //$categories=Category::all();
    	return view('upload');
    	//->with('categories',$categories);

    }


   public function upload(Request $request){
    	$this->validate($request,[
    				'title'=>'required',
    				'auther'=>'required',
				    'info'=>'required',
				    'image'=>'required|image',
    				'book'=>'required|mimes:pdf',
    	]);

    	  if ($request->hasFile('image')){
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = time().'thumnnail.'.$imageExt;
            $request->file('image')->storeAs('thumbnails/',$imageName);
        }
        if ($request->hasFile('book')){
            $bookExt = $request->file('book')->getClientOriginalExtension();
            $bookName = time().'book.'.$bookExt;
            $request->file('book')->storeAs('books/',$bookName);
        }
//dd((int)$request->input('category'));
    	$book =new Book();
    	$book->title=$request->input('title');
    	$book->auther=$request->input('auther');
    	$book->info=$request->input('info');
    	 $book->image=$imageName;
    	$book->bookfile=$bookName;
$book->user_id = auth()->user()->id;
$book->category_id =(int) $request->input('category');         
         $book->save();
         
         return redirect(route('upload'))->with('success', 'success uploaded');;








    }
}
