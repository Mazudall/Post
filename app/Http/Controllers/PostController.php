<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->simplepaginate(3);
        $tags = Tag::all();


        return view('post.posts', compact('posts','tags'));


    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create',compact('categories','tags'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);


        $post = Post::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }


    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.edit',compact('post','categories','tags'));
    }
    public function update(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);


        return redirect()->route('post.show',$post->id);
    }

    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    public function delete()
    {
        $post = Post::withTrashed();
        $post->restore();
        dd('deleted');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
