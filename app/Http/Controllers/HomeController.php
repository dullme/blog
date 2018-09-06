<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        $categories = Category::withCount('posts')->orderBy('posts_count', 'DESC')->get();
        $posts = Post::with('category')
            ->limit(10)
            ->orderBy('id', 'DESC')
            ->select(['id', 'category_id', 'image', 'essay', 'title', 'description', 'created_at'])
            ->published()
            ->paginate(10);

        return view('index', compact('tags', 'categories', 'posts'));
    }
}
