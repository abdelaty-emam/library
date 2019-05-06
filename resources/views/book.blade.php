@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$book->title}}</div>
                       
                   <div class="card-body">
                          <div class="row">
                            <div class="col-md-3"> 
                                <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-thumbnail"/>
                            </div>
                            <div class="col-md-9 text-center">
                                <p>{{$book->info}}</p>
                                <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download </a>
                  
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>
<hr>
@include('commentbox')

@endsection
