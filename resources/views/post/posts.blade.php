

@extends('layouts.main')
@section('content')


<div class="main_content">
    @foreach($posts as $post)
    <div class="newest_post">
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h5>
                <p class="card-text">{{$post->content}}</p>
                <p class="card-text"><small class="text-body-secondary">{{$post->created_at}}</small></p>
            </div>
        </div>
    </div>
    @endforeach


</div>
<div class="main_sidebar">

</div>

@endsection

