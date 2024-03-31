<?php

namespace App\Http\Controllers;

use App\News;
use App\Post;
use App\User;
use App\England;
use App\PremierLeagueStats;
use Illuminate\Http\Request;
use App\PremierLeagueMatches;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = session()->get('UserName');
        $id = session()->get('UserID');
        $photo = session()->get('UserPhoto');
        $news = News::all();
        return view('index', compact('users', 'id', 'photo', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.UserSignup');
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
        $input['photo'] = "user.jpg";
        $pass = $input['password'];
        $password = Hash::make($pass);
        $input['password'] = $password;
        User::create($input);
        $UserName = $request->name;
        session(['UserName' => $UserName]);
        session(['UserPhoto' => $input['photo']]);
        $objUser = new User();
        $user = $objUser->getUser($request->email, $request->password);
        $UserID = $user['id'];
        session(['UserID' => $UserID]);
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = session()->get('UserID');
        $users = session()->get('UserName');
        $photo = session()->get('UserPhoto');
        $objPost = new Post();
        $posts = $objPost->getUserpost($id);
        return view('user.profile', compact('posts', 'id', 'users', 'photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $form = $request->all();
        if ($file = $request->file('photo')) {
            $name = $file->getClientOriginalName();
            $file->move('photos', $name);
            $form['photo'] = $name;
            $UserPhoto = $name;
            session(['UserPhoto' => $UserPhoto]);
        }
        $password = $form['password'];
        $pass = Hash::make($password);
        $form['password'] = $pass;
        $user->update($form);
        $UserName = $request->name;
        $UserID = $request->id;
        session(['UserName' => $UserName]);
        session(['UserID' => $UserID]);
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function matchespage()
    {
        $users = session()->get('UserName');
        $id = session()->get('UserID');
        $photo = session()->get('UserPhoto');
        $PremierLeague = England::orderBy('points', 'desc')->orderBy('goals_difference', 'desc')->get();
        $PremierLeagueStats = PremierLeagueStats::get();
        $objPost = new PremierLeagueMatches();
        $Friday10January = $objPost->Friday10JanuaryMatches();
        $Saturday11January = $objPost->Saturday11JanuaryMatches();
        $Sunday12January = $objPost->Sunday12JanuaryMatches();
        $Saturday18January = $objPost->Saturday18JanuaryMatches();
        $Sunday19January = $objPost->Sunday19JanuaryMatches();
        return view('pages.matches', compact('Friday10January', 'Saturday11January', 'Sunday12January', 'Saturday18January', 'Sunday19January', 'PremierLeague', 'PremierLeagueStats', 'users', 'id', 'photo'));
    }
    public function TransferPage()
    {
        $users = session()->get('UserName');
        $id = session()->get('UserID');
        $photo = session()->get('UserPhoto');
        $objTransfer = new England();
        $Transfer = $objTransfer->getTeamsTransfer();
        return view('pages.transfers', compact('Transfer', 'users', 'id', 'photo'));
    }

    public function login()
    {
        return view('user.UserLogin');
    }
    public function UserLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $objUser = new User();
        $user = $objUser->getUser($email);
        if (count($user) > 0) {
            if (Hash::check($password, $user['password'])) {

                $UserPhoto = $user['photo'];
                session(['UserPhoto' => $UserPhoto]);
                $UserID = $user['id'];
                session(['UserID' => $UserID]);
                $UserName = $user['name'];
                session(['UserName' => $UserName]);
                return redirect('/index');
            }
            return redirect('/login');
        } else {
            return redirect('/login');
        }
    }
    public function UserLogout()
    {
        session()->flush();
        return redirect('/index');
    }
}
