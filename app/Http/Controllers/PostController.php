<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        // dd($posts);
        return view('back.blog', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view('back.createblog', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if($request->file('image')){
            $response = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        }
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $this->slug($request->title);
        $post->category_id = $request->category;
        $post->status = $request->status;
        $post->image = $response;
        $post->body = $request->body;
        $post->save();
        return redirect('admin/blog')->with('success_message', 'You have successfully added a post');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('back.editblog', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if($request->file('image')){
            $response = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
            $post->image = $response;
        }
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->status = $request->status;
        $post->body = $request->body;
        $post->save();
        return redirect('admin/blog')->with('success_message', 'You have successfully edited the post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('blog.index')->with('success_message', 'You have successfully deleted a post');
    }

    public function slug($title) {
        $slug = Str::slug($title, '-');
        $slug = explode('-', $slug);
        $stopWords = 'a, an, and, are, the'; // You can find long lists of stop-words online
        $keys = explode(', ', $stopWords);
        foreach ($slug as $k => $word) {
            foreach ($keys as $l => $wordfalse) {
                if ($word == $wordfalse) {
                    unset($slug[$k]);
                }
            }
        }
        return implode('-', $slug);
    }
}
