<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function search (Request $request)
    {
        $search = $request->search;

        $posts = Post::query()->where('title','LIKE',"%{$search}%")->paginate(3);


        return view('post.posts',compact('posts'));
    }
}
