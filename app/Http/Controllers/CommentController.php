<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
        //
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
        $user = User::findOrFail(session()->get('UserID'));
        $input['user_name'] = $user['name'];
        $input['user_photo'] = $user['photo'];
        $input['user_id'] = $user['id'];
        if ($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            $file->move('PostsImages', $name);
            $input['image'] = $name;
        } else {
            $input['image'] = "No Photo Inserted";
        }

        Comment::create($input);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('user.posts.EditComment', compact('comment'));
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
        $comment = Comment::findOrFail($id);
        $form = $request->all();
        if ($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            $file->move('PostsImages', $name);
            $form['image'] = $name;
        }

        $comment->update($form);
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
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect('/ShowPost');
    }
}
