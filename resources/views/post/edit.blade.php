@extends('layouts.main')
@section('content')
    <div class="create_input">
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>
            <div class="ct_t_choose">
                <label>Category</label>

                <select class="form-select" multiple aria-label="Multiple select example" id="category" name="category_id" style="width: 10rem;">
                    @foreach($categories as $category)
                        <option
                            {{$category->id === $post->$category->id ? 'selected' : ''}}
                            value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach

                </select>

                <label>Tags</label>
                <select class="form-select" multiple aria-label="Multiple select example" id="tags" name="tags[]" style="width: 10rem;">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

@endsection
