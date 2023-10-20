@extends('layouts.main')
@section('content')

    <div class="post_act">
    <a  href="{{route('post.edit',$post->id)}}">
        <div id="update_post">Update Post</div>
    </a>
    <form action="{{route('post.delete',$post->id)}}" method="post">
    @csrf
    @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    </div>
    <div class="show_post">

    <div class="post_body">
        <div class="show_tittle" id="show_title">{{$post->title}}</div>
        <div class="show_content">{{$post->content}}</div>
    </div>


        <div><label>Tags:</label>
            @foreach($post->tags as $pTag)
            {{$pTag->title}}


    @endforeach
        </div>
    <div>-----------</div>

</div>

@endsection
