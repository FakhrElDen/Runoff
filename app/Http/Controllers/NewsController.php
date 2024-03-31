<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        return view('admin.news.WriteNews', compact('admin', 'adminID', 'photo'));
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
            $file->move('NewsImages', $name);
            $input['image'] = $name;
        } else {
            $input['image'] = "No Photo Inserted";
        }
        News::create($input);
        return redirect('admin/ShowNews');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $admin = session()->get('AdminName');
        $photo = session()->get('AdminPhoto');
        $adminID = session()->get('AdminID');
        $news = News::all();
        return view('admin.news.ShowNews', compact('news', 'adminID', 'admin', 'photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $news = News::findOrFail($id);
        return view('admin.news.EditNews', compact('news', 'adminID', 'admin', 'photo'));
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
        $news = News::findOrFail($id);
        $form = $request->all();
        if ($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages', $name);
            $form['image'] = $name;
        }
        $news->update($form);
        return redirect('admin/ShowNews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = News::findOrFail($id);
        $post->delete();
        return redirect('admin/ShowNews');
    }
}
