@extends('layouts.main')
@section('content')

<div class="show_post">
    <a  href="{{route('post.edit',$post->id)}}">
        <div id="update_post">Update Post</div>
    </a>

    <div class="show_tittle" id="show_title">{{$post->title}}</div>
    <div class="show_content">{{$post->content}}</div>


        <div><label>Tags:</label>
            @foreach($post->tags as $pTag)
            {{$pTag->title}}
        </div>
    @endforeach
    <div>-----------</div>

</div>

@endsection
