<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $blogpost = BlogPost::orderBy('updated_at', 'desc')->get();
    //    $blogpost = BlogPost::all();
       return view('blogpost.index')->with('post', $blogpost);
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
            'author'  => 'required',
            'content' => 'required'
        ]);
        $post = new BlogPost;
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->blogBody = $request->input('content');

        $post->save();
        
        return redirect('/blogpost')->with('success', 'New Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogID = BlogPost::find($id);
        return view('blogpost.show')->with('post', $blogID);
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
            'author'  => 'required',
            'content' => 'required'
        ]);
        $post = BlogPost::find($id);
        $post->title = $request->input('title');
        $post->author = $request->input('author');
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
