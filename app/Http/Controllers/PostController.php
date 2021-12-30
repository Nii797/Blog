<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        //tess seach
        // dd(request('search'));

        // if (request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('excerpt', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // } move source in model 

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }

        return view('posts', [
            'title' => 'All Post' . $title,
            'active' => 'posts',
            // 'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    
    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Detail Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
