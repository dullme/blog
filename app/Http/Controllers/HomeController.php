<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request) {
        $tags = Tag::all();
        $categories = Category::withCount('posts')->orderBy('posts_count', 'DESC')->get()->where('posts_count', '>', 0);
        $newPosts = Post::orderBy('id', 'DESC')->select(['id', 'title'])->published()->limit(10)->get();
        $posts = Post::with('category')
            ->where(function ($query) use ($request){
                if($request->get('category'))
                    $query->whereCategoryId($request->get('category'));
                if($request->get('search'))
                    $query->where('title', 'like', '%'.$request->get('search').'%');
            })
            ->orderBy('id', 'DESC')
            ->select(['id', 'category_id', 'image', 'essay', 'title', 'description', 'created_at'])
            ->published()
            ->paginate(10);

        return view('index', compact('tags', 'categories', 'newPosts', 'posts'));
    }
}
