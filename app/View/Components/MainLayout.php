<?php

namespace App\View\Components;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\View\Component;

class MainLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $recent_blogs = Post::orderBy('id', 'DESC')->skip(0)->take(5)->get();
        $recent_comments = Comment::orderBy('id', 'DESC')->skip(0)->take(5)->get();
        return view('layouts.main', ['recent_blogs' => $recent_blogs, 'recent_comments' => $recent_comments]);
    }
}
