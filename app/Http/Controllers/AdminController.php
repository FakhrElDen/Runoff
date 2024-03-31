<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        return view('admin.dashboard', compact('admin', 'adminID', 'photo'));
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
        return view('admin.CreateAdmin', compact('admin', 'adminID', 'photo'));
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
        $input['photo'] = "user.png";
        $pass = $input['password'];
        $password = Hash::make($pass);
        $input['password'] = $password;
        Admin::create($input);
        $AdminName = $request->name;
        session(['AdminName' => $AdminName]);
        session(['AdminPhoto' => $input['photo']]);
        $objUser = new Admin();
        $admin = $objUser->getAdmin($request->email, $request->password);
        $AdminID = $admin['id'];
        session(['AdminID' => $AdminID]);
        return redirect('admin/dashboard');
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
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $users = User::all();
        return view('admin.Users', compact('users', 'admin', 'adminID', 'photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit', compact('admin'));
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
        $admin = Admin::findOrFail($id);
        $form = $request->all();
        if ($file = $request->file('photo')) {
            $name = $file->getClientOriginalName();
            $file->move('AdminsPhotos', $name);
            $form['photo'] = $name;
            $AdminPhoto = $name;
            session(['UserPhoto' => $AdminPhoto]);
        }
        $password = $form['password'];
        $pass = Hash::make($password);
        $form['password'] = $pass;
        $admin->update($form);
        $AdminName = $request->name;
        $AdminID = $request->id;
        session(['AdminName' => $AdminName]);
        session(['AdminID' => $AdminID]);
        return redirect('admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('admin/users');
    }

    public function login()
    {
        return view('admin.AdminLogin');
    }
    public function AdminLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->psw;
        $objAdmin = new Admin();
        $admin = $objAdmin->getAdmin($email);
        if (count($admin) > 0) {
            if (Hash::check($password, $admin['password'])) {
                $AdminPhoto = $admin['photo'];
                session(['AdminPhoto' => $AdminPhoto]);
                $AdminID = $admin['id'];
                session(['AdminID' => $AdminID]);
                $AdminName = $admin['name'];
                session(['AdminName' => $AdminName]);
                return redirect('admin/dashboard');
            }
            return redirect('admin/login');
        } else {
            return redirect('admin/login');
        }
    }
    public function AdminLogout()
    {
        session()->flush();
        return redirect('admin/login');
    }

    public function UsersPosts()
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $posts = Post::all();
        return view('admin.UsersPosts', compact('posts', 'admin', 'adminID', 'photo'));
    }
    public function DeletePost($id)
    {
        $admin = Post::findOrFail($id);
        $admin->delete();
        return redirect('admin/usersposts');
    }

    public function admins()
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $admins = Admin::all();
        return view('admin.Admins', compact('admins', 'admin', 'adminID', 'photo'));
    }
    public function DeleteAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect('admin/admins');
    }
}
