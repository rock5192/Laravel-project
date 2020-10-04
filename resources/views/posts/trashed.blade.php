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
                Restore
            </th>

            <th>
                Delete
            </th>
        </thead>

        <tbody>
        @if($posts->count()>0)
            @foreach($posts as $post)              

                <tr>
                    <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></td>
                    <td>{{$post->title}}</td>
                    <td>Edit</td>
                    <td>
                        <a href="{{route('post.restore',['id'=>$post->id])}}" class="btn-xs btn-success">Restore</a>
                    </td>
                    <td>
                        <a href="{{route('post.kill',['id'=>$post->id])}}" class="btn-xs btn-danger">X</a>
                    </td>
                </tr>
            @endforeach
            @else
            <th colspan="5" class="text-center">
                No trashed post.
            </th>
            @endif
        </tbody>
    </table>

    </div>
    </div>

@stop