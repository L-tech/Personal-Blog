<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $blog_views = Post::get()->sum("views");
        $blog_comments = Comment::get()->count();
        $blog_count = Post::get()->count();
        $latest_blog = Post::latest()->first();
        $recent_blogs = Post::orderBy('id', 'DESC')->skip(0)->take(5)->get();
        return view('back.dashboard', ['blog_views' => $blog_views, 'blog_comments' => $blog_comments, 'blog_count' => $blog_count, 'latest_blog' => $latest_blog, 'recent_blogs' => $recent_blogs]);
    }
}
