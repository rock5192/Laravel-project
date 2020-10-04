@extends('layouts.app')

@section('content')

  @if(count($errors)>0)

      <ul class="list-group">
        @foreach($errors->all() as $error)

              <li class="list-group-item text-danger">
                  {{$error}}
              </li>
        @endforeach  

      </ul>

  @endif
     <br>
      <h2 class="text-center" style="margin-right:50%">
        Category
    </h2>

    <form action="{{route('category.store')}}" method="post" style="margin-right:50%">
        {{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name">
  </div>

  

  <div class="form-group">
      <div class="text-center">
      <button type="submit" class="btn btn-success" >Store Category</button>
      </div>
        
  </div>

  </form>
   
   

@stop