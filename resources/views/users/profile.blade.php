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
        Edit Your Profile
    </h2>

    <form action="{{route('user.profile.update')}}" method="post" style="margin-right:50%" enctype="multipart/form-data">
        {{csrf_field()}}
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" class="form-control" value="{{$user->name}}" name="name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="{{$user->email}}" name="email">
  </div>

  <div class="form-group">
    <label for="password">New Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <div class="form-group">
    <label for="avatar">Upload new avatar</label>
    <input type="file" class="form-control" name="avatar">
  </div>

  <div class="form-group">
    <label for="facebook">Facebook Profile</label>
    <input type="text" class="form-control" value="{{$user->profile->facebook}}" name="facebook">
  </div>

  <div class="form-group">
    <label for="youtube">Youtube Profile</label>
    <input type="text" class="form-control" value="{{$user->profile->youtube}}" name="youtube">
  </div>

  <div class="form-group">
    <label for="about">About You</label>
        <textarea name="about" id="about" cols="65" rows="6">{{$user->profile->about}}</textarea>
  </div>







  

  <div class="form-group">
      <div class="text-center">
      <button type="submit" class="btn btn-success" >Update Profile</button>
      </div>
        
  </div>

  </form>
   
   

@stop