<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::orderBy('created_at','desc')->paginate(3);
        return view('posts.index')->with('posts',$posts);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
                //auth()->user()->post()->create($attribute);
        $post = Post::create($attributes);
          //$post->user_id  = auth()->user()->id;
        return redirect('post')->with('success','Posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
   
    

   
}
