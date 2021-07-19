<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $blogs = Post::orderBy('id', 'desc')->paginate(15);
        $top_blogs = Post::orderBy('views', 'DESC')->skip(0)->take(3)->get();
        $categories = Category::all();
        return view('welcome', ['blogs' => $blogs, 'top_blogs' => $top_blogs, 'categories' => $categories]);
    }

    public function about() {
        $top_blogs = Post::orderBy('views', 'DESC')->skip(0)->take(3)->get();
        return view('about', ['top_blogs' => $top_blogs]);
    }

    public function articles() {
        $blogs = Post::orderBy('id', 'desc')->paginate(15);
        $top_blogs = Post::orderBy('views', 'DESC')->skip(0)->take(4)->get();
        $recent_blogs = Post::orderBy('id', 'DESC')->skip(0)->take(4)->get();
        $editors_pick = Post::orderBy('views', 'DESC')->inRandomOrder()->skip(0)->take(5)->get();
        $trending_post = Post::orderBy('id', 'DESC')->inRandomOrder()->skip(0)->take(4)->get();
        $latest_blog = Post::latest()->first();
        $categories = Category::all();
        return view('blog', ['blogs' => $blogs, 'top_blogs' => $top_blogs, 'categories' => $categories, 'recent_blogs' => $recent_blogs, 'latest_blog' => $latest_blog, 'editors_pick' => $editors_pick, 'trending_post' => $trending_post]);
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->first();
        $blogs = Post::where('category_id', $category->id)->orderBy('id', 'DESC')->get();
        $categories = Category::all();
        $top_blogs = Post::orderBy('views', 'DESC')->skip(0)->take(4)->get();
        return view('category', ['category' => $category, 'blogs' => $blogs, 'categories' => $categories, 'top_blogs' => $top_blogs]);
    }
    public function blogDetail($slug) {
        $categories = Category::all();
        $blog = Post::where('slug', $slug)->first();
        $blog->views = $blog->views += 1;
        $blog->save();
        $comments = Comment::where('blog_id', $blog->id)->orderBy('id', 'desc')->get();
        $top_blogs = Post::orderBy('views', 'DESC')->skip(0)->take(3)->get();
        return view('blog-detail', ['blog' => $blog, 'top_blogs' => $top_blogs, 'categories' => $categories, 'comments' => $comments]);
    }
}
