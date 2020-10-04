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
        Edit: {{$tags->tag}}
    </h2>

    <form action="{{route('tags.update',['id'=>$tags->id])}}" method="post" style="margin-right:50%">
        {{csrf_field()}}
  <div class="form-group">
    <label for="tag">Tag</label>
    <input type="text" class="form-control" name="tag">
  </div>

  

  <div class="form-group">
      <div class="text-center">
      <button type="submit" class="btn btn-success" >Update Tag</button>
      </div>
        
  </div>

  </form>
   
   

@stop