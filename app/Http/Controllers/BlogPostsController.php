<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class BlogPostsController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $post = BlogPost::orderBy('updated_at', 'desc')->get();
       return view('blogpost.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogpost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required',
            'content' => 'required'
        ]);
        $post = new BlogPost;
        $post->title = $request->input('title');
        // $post->author = $request->input('author');
        $post->author = auth()->user()->name;
        $post->blogBody = $request->input('content');
        $post->user_id = auth()->user()->id;

        $post->save();
        
        return redirect('/blogpost')->with('success', 'New Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogpost)
    {
        return view('blogpost.show', compact('blogpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postID = BlogPost::find($id);

        if(auth()->user()->id !== $postID->user_id){
            return redirect('/404')->with('error', 'You are not authorized to edit that page');
        }
        return view('blogpost.edit')->with('post', $postID);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'   => 'required',
            'content' => 'required'
        ]);
        $post = BlogPost::find($id);
        $post->title = $request->input('title');
        $post->author = auth()->user()->name;
        $post->blogBody = $request->input('content');

        $post->save();
        
        return redirect("/blogpost/$post->id")->with('success', 'Your post has being successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogpost = BlogPost::find($id);
        $blogpost->delete();

        return redirect('/blogpost')->with('success', "$blogpost->title Removed");
    }
}
