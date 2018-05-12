<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        return view('admin.posts.create', compact('categories', 'users'));
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => request('title'),
            'category_id' => request('category_id'),
            'user_id' => request('user_id'),
            'tags' => request('tags')
        ]);
        return redirect(route('admin.posts.index'));
    }

    public function edit(Post $post)
    {
        $categories = Category::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        return view('admin.posts.edit', compact('post','categories', 'users'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => request('title'),
            'category_id' => request('category_id'),
            'user_id' => request('user_id'),
            'tags' => request('tags')
        ]);
        return redirect(route('admin.posts.index'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('admin.posts.index'));
    }
}
