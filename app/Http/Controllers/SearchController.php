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

        $posts = Post::query()->where('title','LIKE',"%{$search}%")->get();


        return view('post.posts',compact('posts'));
    }
}
