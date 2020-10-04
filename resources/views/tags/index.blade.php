@extends('layouts.app')


@section('content')

    <div class="panel paned-default">
        <div class="panel-body">
        <table class="table table-hover" style="margin-top:68px;">
        <thead>
            <th>
                Tag Name
            </th>

            <th>
                Editing
            </th>

            <th>
                Deleting
            </th>
        </thead>

        <tbody>
            @if($tags->count()>0)
            @foreach($tags as $tag)
            <tr>
                <td>
                {{$tag->tag}}
                </td>
                
                <td>
                    <a href="{{route('tags.edit',['id'=>$tag->id])}}" class="btn btn-xs btn-info">
                        Edit
                    </a>
                </td>

           
                <td>
                    <a href="{{route('tags.delete',['id'=>$tag->id])}}" class="btn btn-xs btn-danger">Delete</a>
                </td>
            </tr> 
            @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">
                        No Tags
                    </th>
                </tr>
         
            @endif
        </tbody>
    </table>

    </div>
    </div>

@stop