@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$category->name}}</div>
                       
                   <div class="card-body">
                    @if(count($books)>0)

                       @foreach($books as $book )
                          <div class="row">
                            <div class="col-md-3">
                               <a href="{{route('book',$book->id)}}"> 
                                <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-thumbnail"/>
                                </a>

                            </div>
                            <div class="col-md-9 text-center">
                                <h2>{{$book->title}}</h2>
                                <p>{{$book->info}}</p>
                                <br>
                                Author:{{$book->auther}} <br/>
                               
                  
                </div>
            </div>
            <hr>
               @endforeach
            @endif

        </div>
    </div>
</div>
@endsection
