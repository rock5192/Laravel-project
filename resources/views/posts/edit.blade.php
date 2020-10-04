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
        Edit Post :{{$post->title}}
    </h2>

    <form action="{{route('post.update',['id'=>$post->id])}}" method="post" style="margin-right:50%" enctype="multipart/form-data">
        {{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title">
  </div>

  <div class="form-group">
    <label for="featured">Featured</label>
    <input type="file" class="form-control" name="featured" style="padding:0;height:20%;">
  </div>

  <div class="form-group">
      <label for="category">Select a Category</label>
      <select name="category_id" id="category" class="form-control">
        @foreach($categories as $category)
          <option value="{{$category->id}}" 
            @if($post->category->id==$category->id)
            selected
            @endif
          >{{$category->name}}</option>
          @endforeach
      </select>
  </div>

  </div>
  <label for="tags">Select tags</label>
  <div class="form-group">
    @foreach($tags as $tag)
    <div class="checkbox">
 
 <label for="tags"><input type="checkbox" name="tags[]" value="{{$tag->id}}" >
    @foreach($post->tags as $t)
      @if($tag->id == $t->id)
        checked
      @endif
      @endforeach
      >{{$tag->tag}} </label>
 @endforeach
</div>
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" id="content" rows="5" cols="5" name="content"></textarea>
  </div>

  

  <div class="form-group">
      <div class="text-center">
      <button type="submit" class="btn btn-success" >Edit Post</button>
      </div>
        
  </div>

  </form>
   
   

@stop