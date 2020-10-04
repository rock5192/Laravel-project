@extends('layouts.app')


    @section('content')

    <form action="{{route('category.update',['id'=>$category->id])}}" method="post" style="margin-right:50%">
        {{csrf_field()}}
  <div class="form-group">
    <label for="category">Update</label>
    <input type="text" class="form-control" name="name" value="{{$category->name}}">
  </div>

  <div class="form-group">
      <div class="text-center">
      <button type="submit" class="btn btn-success" >Update Category</button>
      </div>
        
  </div>

  </form>

@stop