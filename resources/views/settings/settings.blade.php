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
        Edit Blog Settings
    </h2>

    <form action="{{route('settings.update')}}" method="post" style="margin-right:50%">
        {{csrf_field()}}
  <div class="form-group">
    <label for="site_name">Site Name</label>
    <input type="text" class="form-control" name="site_name" value="{{$settings->site_name}}">
  </div>

  <div class="form-group">
    <label for="address">Adress</label>
    <input type="text" class="form-control" name="address" value="{{$settings->address}}">
  </div>

  <div class="form-group">
    <label for="contact_number">Contact Number</label>
    <input type="text" class="form-control" name="contact_number" value="{{$settings->contact_number}}">
  </div>

  <div class="form-group">
    <label for="contact_email">Contact Email</label>
    <input type="email" class="form-control" name="contact_email" value="{{$settings->contact_email}}">
  </div>

  

  <div class="form-group">
      <div class="text-center">
      <button type="submit" class="btn btn-success" >Update Settings</button>
      </div>
        
  </div>

  </form>
   
   

@stop