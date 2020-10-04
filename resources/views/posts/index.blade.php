@extends('layouts.app')


@section('content')

    <div class="panel paned-default">
  
        <div class="panel-body">

        <table class="table table-hover" style="margin-top:68px;">
        <thead>
            <th>
                Image
            </th>

            <th>
                Title
            </th>

            <th>
                Edit
            </th>

            <th>
                Delete
            </th>
        </thead>

        <tbody>

            @if($posts->count()>0)

            @foreach($posts as $post)              

                <tr>
                    <th><img src="{{asset('uploads/posts/'. $post->featured)}}" alt="{{$post->title}}"></th>
                    <td>{{$post->title}}</td>
                    <td>
                        <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-info">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger">X</a>
                    </td>
                </tr>
            @endforeach

            @else

                <tr>
                    <th colspan="5" class="text-center">
                    No trashed post 
                    </th>
                </tr>

            @endif
        </tbody>
    </table>

    </div>
    </div>

@stop