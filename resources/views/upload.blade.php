@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload Form</div>
                       
                   <div class="card-body">
                         @if(session('success'))
                       <div class="alert alert-success">
                          {{ session('success') }}
                       </div> 
                     @endif
                    <form action="{{route('upload.save')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Title</label>
                             <input type="text" name ="title"class="form-control" id="title">
                         </div>

                        <div class="form-group">
                            <label for="auther">Auther</label>
                            <input type="text" name="auther" class="form-control" id="auther">
                        </div>


                        <div class="form-group">
                            <label for="information">Information</label>
                            <textarea  name="info" type="text" class="form-control" id="info"></textarea>
                            </div>

                        <div class="form-group">
                            <select class="form-control" name="category">
                                @if(count($categories)>0)
                                  @foreach($categories as $category)
                                     <option value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                     @endforeach

                                   @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="file"  name="image"class="form-control" id="img"/>
                          </div>

                        <div class="form-group">
                            <input type="file"  name="book"class="form-control" id="book"/>
                          </div>

                        <div class="form-group">
                          <button type="submit" name="upload" class="btn btn-primary btn-block">upload book</button>
                        </div>

                    </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
