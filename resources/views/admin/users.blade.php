@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Users</h3>
    <div class="box-tools pull-right">
      <a class="btn btn-primary" href="#">  Add user </a>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">

<table class="table table-dark">
  <thead>
    <tr>
      <td> #</td>
      <td> Name</td>
      <td> Email</td>
    </tr>
  </thead>
  @if(count($users)>0)
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
       @endforeach
   @endif 
  
</table>

  </div>
  <!-- /.box-body -->

            
@stop
