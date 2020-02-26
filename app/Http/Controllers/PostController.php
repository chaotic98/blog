<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news(){
        return view('post.news');
    }
    public function index()
    {
        $x=Post::all();
        return view('post.index',compact('x'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post=new Post();
        $post->FullName=$request->name ;
        $post->image=$request->img;
        $post->description=$request->description;
        $post->active=$request->active;
        $file=$request->file('img');
        if (!empty($file)){
            $image=time().$file->getClientOriginalName();
            $file->move('images/post',$image);
            $post->image=$image;
        }
        $post->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $post=Post::findorfail($id);
        $post->FullName=$request->name;

        $post->description=$request->description;
        $post->active=$request->active;
        $post->save();
        $file=$request->file('img');
        if (!empty($file)){
            $image_delete=$post->img;
            unlink('images/post/'.$image_delete);
            $image=time().$file->getClientOriginalName();
            $file->move('images/post',$image);
            $post->image=$image;
        }
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $image_delete=$id->image;
        unlink('images/post'.$image_delete);
        $id->destroy();
        //$post=Post::destroy($id);
        return redirect()->back();
    }
}
