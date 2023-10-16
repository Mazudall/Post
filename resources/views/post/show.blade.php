@extends('layouts.main')
@section('content')

<div class="show_post">

    <div class="show_tittle" id="show_title">{{$post->title}}</div>
    <div class="show_content">{{$post->content}}</div>

    @foreach($post->tags as $tag)
        <div>{{$tag->title}}</div>
    @endforeach


</div>

@endsection
