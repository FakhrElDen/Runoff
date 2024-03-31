<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//-----------------------------------------

Route::get('/layout', function () {
    $admin = session()->get('AdminName');
    $adminID = session()->get('AdminID');
    $photo = session()->get('AdminPhoto');
    return view('layout.AdminLayout', compact('users', 'id', 'photo'));
});
/* Users */

Route::group(['middleware' => ['UserSignin']], function () {
    /* Website Pages */

    Route::get('/history', function () {
        $users = session()->get('UserName');
        $id = session()->get('UserID');
        $photo = session()->get('UserPhoto');
        return view('pages.history', compact('users', 'id', 'photo'));
    });

    Route::get('/live', function () {
        $users = session()->get('UserName');
        $id = session()->get('UserID');
        $photo = session()->get('UserPhoto');
        return view('pages.live', compact('users', 'id', 'photo'));
    });

    Route::get('/matches', 'UserController@matchespage');

    //-----------------------------------------
    /* FA Cup */

    Route::get('/FACup', 'EnglandController@FACup');

    //-----------------------------------------
    /* Community Shielde */

    Route::get('/CommunityShielde', 'EnglandController@CommunityShielde');

    Route::get('/transfers', 'UserController@TransferPage');

    //-----------------------------------------
    /* User Edit his Info */

    Route::get('EditUser/{id}', 'UserController@edit');

    Route::post('UpdateUser/{ld}', 'UserController@update');

    Route::get('UserProfile', 'UserController@show');

    //-----------------------------------------
    /* User Post */

    // Route::get('CreatePost', 'UserPostController@create');    

    Route::post('StorePost', 'UserPostController@store');

    Route::get('ShowPost', 'UserPostController@show');

    Route::get('EditPost/{id}', 'UserPostController@edit');

    Route::post('UpdatePost/{id}', 'UserPostController@update');

    Route::get('DeletePost/{id}', 'UserPostController@destroy');

    //-----------------------------------------
    /* User Comments */

    Route::post('StoreComment', 'CommentController@store');

    Route::get('EditComment/{id}', 'CommentController@edit');

    Route::post('UpdateComment/{id}', 'CommentController@update');

    Route::get('DeleteComment/{id}', 'CommentController@destroy');

    //-----------------------------------------
    /* User Replies */

    Route::post('StoreReply', 'ReplyController@store');

    Route::get('EditReply/{id}', 'ReplyController@edit');

    Route::post('UpdateReply/{id}', 'ReplyController@update');

    Route::get('DeleteReply/{id}', 'ReplyController@destroy');
});

//-----------------------------------------
/* User Signup & Login */

Route::get('', 'UserController@index');

Route::get('signup', 'UserController@create');

Route::post('StoreUser', 'UserController@store');

Route::get('login', 'UserController@login');

Route::post('loginUser', 'UserController@UserLogin');

Route::get('logout', 'UserController@UserLogout');

//-------------------------------------------------------------------------------------------

/* Admins */

Route::group(['middleware' => ['AdminSignin']], function () {
    /* Admins News */

    Route::get('admin/WriteNews', 'NewsController@create');

    Route::post('admin/StoreNews', 'NewsController@store');

    Route::get('admin/ShowNews', 'NewsController@show');

    Route::get('admin/EditNews/{id}', 'NewsController@edit');

    Route::post('admin/UpdateNews/{id}', 'NewsController@update');

    Route::get('admin/DeleteNews/{id}', 'NewsController@destroy');

    //-----------------------------------------
    /* Create Admin or Delete Admin */

    Route::get('admin/CreateAdmin', 'AdminController@create')->middleware('CreateAdmin');

    Route::post('admin/StoreAdmin', 'AdminController@store')->middleware('CreateAdmin');

    Route::get('admin/admins', 'AdminController@admins')->middleware('CreateAdmin');

    Route::get('admin/DeleteAdmin/{id}', 'AdminController@DeleteAdmin')->middleware('CreateAdmin');

    //-----------------------------------------
    /* PremierLeague */

    Route::get('admin/dashboard', 'AdminController@index');

    Route::get('admin/PremierLeague', 'EnglandController@index');
    Route::get('admin/EditPremierLeague/{id}', 'EnglandController@edit');
    Route::post('admin/UpdatePremierLeague/{id}', 'EnglandController@update');

    Route::get('admin/EditPremierLeagueStats/{id}', 'EnglandController@create');
    Route::post('admin/UpdatePremierLeagueStats/{id}', 'EnglandController@store');

    Route::get('admin/EditPremierLeagueMatches/{id}', 'EnglandController@show');
    Route::post('admin/UpdatePremierLeagueMatches/{id}', 'EnglandController@UpdateMatches');
    Route::get('admin/DeletePremierLeagueMatches/{id}', 'EnglandController@destroy');
    Route::get('admin/CreatePremierLeagueMatches', 'EnglandController@CreateMtch');
    Route::post('admin/StorePremierLeagueMatches', 'EnglandController@StoreMtch');

    Route::get('admin/PremierLeagueTransfer', 'EnglandTransferController@index');

    Route::get('admin/EditPremierLeagueTransferIn/{id}', 'EnglandTransferController@editIn');
    Route::get('admin/EditPremierLeagueTransferOut/{id}', 'EnglandTransferController@editOut');

    Route::post('admin/UpdatePremierLeagueTransferIn/{id}', 'EnglandTransferController@updateIn');
    Route::post('admin/UpdatePremierLeagueTransferOut/{id}', 'EnglandTransferController@updateOut');

    Route::get('admin/DeletePremierLeagueTransferIn/{id}', 'EnglandTransferController@destroyIn');
    Route::get('admin/DeletePremierLeagueTransferOut/{id}', 'EnglandTransferController@destroyOut');

    Route::get('admin/CreatePremierLeagueTransferIn/{id}', 'EnglandTransferController@createIn');
    Route::get('admin/CreatePremierLeagueTransferOut/{id}', 'EnglandTransferController@createOut');

    Route::post('admin/StorePremierLeagueTransferIn', 'EnglandTransferController@storeIn');
    Route::post('admin/StorePremierLeagueTransferOut', 'EnglandTransferController@storeOut');

    //-----------------------------------------
    /* Delete User or User Post */

    Route::get('admin/EditAdmin/{id}', 'AdminController@edit');

    Route::post('admin/UpdateAdmin/{id}', 'AdminController@update');

    Route::get('admin/users', 'AdminController@show');

    Route::get('admin/DeleteUser/{id}', 'AdminController@destroy');

    Route::get('admin/usersposts', 'AdminController@UsersPosts');

    Route::get('admin/DeletePost/{id}', 'AdminController@DeletePost');
});

//-----------------------------------------
/* Admin Login & Logout */

Route::get('admin/login', 'AdminController@login');

Route::post('admin/adminLogin', 'AdminController@AdminLogin');

Route::get('admin/logout', 'AdminController@AdminLogout');

//-----------------------------------------------------
