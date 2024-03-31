<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = session()->get('UserName');
        $id = session()->get('UserID');
        $photo = session()->get('UserPhoto');
        return view('user.posts.CreatePost', compact('users', 'id', 'photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            $file->move('PostsImages', $name);
            $input['image'] = $name;
        } else {
            $input['image'] = "No Photo Inserted";
        }

        Post::create($input);
        return redirect('/ShowPost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objPost = new Post();
        $posts = $objPost->getAllpost();
        $id = session()->get('UserID');
        $users = session()->get('UserName');
        $photo = session()->get('UserPhoto');
        return view('user.posts.ShowPost', compact('posts', 'id', 'comments', 'photo', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('user.posts.EditPost', compact('post'));
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
        $post = Post::findOrFail($id);
        $form = $request->all();
        if ($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            $file->move('PostsImages', $name);
            $form['image'] = $name;
        }

        $post->update($form);
        return redirect('/ShowPost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/ShowPost');
    }
}
