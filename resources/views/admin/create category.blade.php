@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Categories</h3>
    <div class="box-tools pull-right">
      <a class="btn btn-primary" href="{{route('categories.index')}}"> view categories </a>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">



        
<form action="{{route('categories.store')}}"  method="POST">
{{csrf_field()}}
  <div class="form-group">

        <label for="categoryname">Name</label>

        <input type="text" class="form-control" id="name" placeholder="categoryname" name="name">

    </div>
  <div class="form-group">
    <button type="submit"  name="add" class="btn btn-primary">AddCategory</button>
  </div>
</form>

  </div>
  <!-- /.box-body -->

            
@stop
