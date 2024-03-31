<!DOCTYPE html>
<html lang="en">

<head>
    <title>Just Football</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('style/css/libs/blog-post.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/bootstrap.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/bootstrap.min.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/font-awesome.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/metisMenu.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/sb-admin-2.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/styles.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/styles.css') }}" rel='stylesheet' />
    <style>
        body {
            overflow-x: auto;
        }

        .nav>li>a:hover {
            background-color: #fff;
        }
    </style>
</head>

<body>
    @if (empty($admin))
        <script>
            window.location.href = "http://localhost/football/public/admin/login";
        </script>
    @endif
    <!---------------------Header---------------------------------------------------------------->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div style="height:10px; background:#449D44;"></div>
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-header navbar-brand">
                    <img style="margin-top:-10px; margin-right:60px; height:40px;" title="It's Not Just a Game"
                        class="img-responsive navbar-right" src="http://localhost/football/public/NewsImages/logo.png">
                </div>
            </div>
            <div style="font-weight:bold; color:#fff;">
                <ul class="nav navbar-nav">
                    <li>
                        <h3 style="margin-left: 215px;margin-top:10px;">Wellcome to Dashboard</h3>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"
                            style="cursor: pointer;background-color: #08080800;">{{ $admin }}<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a
                                    href="http://localhost/football/public/admin/EditAdmin/{{ $adminID }}">Profile</a>
                            </li>
                            <li><a href="http://localhost/football/public/admin/logout">SignOut</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-header">
                    <img style="height: 40px;margin-top: 5px;" class="img-thumbnail"
                        src="http://localhost/football/public/AdminsPhotos/{{ $photo }}" alt="">
                </ul>
            </div>
        </div>
        <div style="height:10px; background:#449D44;"></div>
    </nav>
    <!---------------------Side Menu---------------------------------------------------------------->
    <div class="row">
        <div class="col-sm-2"
            style="background-color:#222; height: 100%; border-bottom: 10px solid #449d44; border-right:10px solid #449d44;">
            <ul class="nav nav-pills nav-stacked"><br>
                @if (!empty($admin))
                    <li><a class="MenueButton" style="border-radius: 25px;border: 2px solid black;width: 180px;"
                            href="http://localhost/football/public/admin/dashboard">
                            <h4 style="text-align: center;font-weight: bold;margin-top: 5px;color: black;">Championships
                            </h4>
                        </a></li>
                    <li><a class="MenueButton" style="border-radius: 25px;border: 2px solid black;width: 180px;"
                            href="http://localhost/football/public/admin/PremierLeagueTransfer">
                            <h4 style="text-align: center;font-weight: bold;margin-top: 5px;color: black;">Transfer</h4>
                        </a></li>
                    <li><a class="MenueButton" style="border-radius: 25px;border: 2px solid black;width: 180px;"
                            href="http://localhost/football/public/admin/users">
                            <h4 style="text-align: center;font-weight: bold;margin-top: 5px;color: black;">Users</h4>
                        </a></li>
                    <li><a class="MenueButton" style="border-radius: 25px;border: 2px solid black;width: 180px;"
                            href="http://localhost/football/public/admin/usersposts">
                            <h4 style="text-align: center;font-weight: bold;margin-top: 5px;color: black;">Users Posts
                            </h4>
                        </a></li>
                    <li><a class="MenueButton" style="border-radius: 25px;border: 2px solid black;width: 180px;"
                            href="http://localhost/football/public/admin/WriteNews">
                            <h4 style="text-align: center;font-weight: bold;margin-top: 5px;color: black;">Write News
                            </h4>
                        </a></li>
                    <li><a class="MenueButton" style="border-radius: 25px;border: 2px solid black;width: 180px;"
                            href="http://localhost/football/public/admin/ShowNews">
                            <h4 style="text-align: center;font-weight: bold;margin-top: 5px;color: black;">News</h4>
                        </a></li>
                    @if ($adminID == 1)
                        <li><a class="MenueButton" style="border-radius: 25px;border: 2px solid black;width: 180px;"
                                href="http://localhost/football/public/admin/CreateAdmin">
                                <h4 style="text-align: center;font-weight: bold;margin-top: 5px;color: black;">Create
                                    Admin</h4>
                            </a></li>
                        <li><a class="MenueButton" style="border-radius: 25px;border: 2px solid black;width: 180px;"
                                href="http://localhost/football/public/admin/admins">
                                <h4 style="text-align: center;font-weight: bold;margin-top: 5px;color: black;">Admins
                                </h4>
                            </a></li>
                    @endif
                @endif
            </ul>
        </div><br>
        <!----------------------------Page Content----------------------------------------------------------->
        <div class="container col-sm-10">
            @yield('content')
        </div>
    </div>
    <!----------------------------Footer----------------------------------------------------------->
    <div class="navbar navbar-inverse footer">
        <div style="height:10px; background:#449d44;"></div>
        <div>
            <br>
            <p style="font-weight:bold; color:#fff;margin-left: 50px;">Just Football &copy; All Rights Reserved
                2019-2020.</p><br>
        </div>
        <div style="height: 10px; background:#449d44;"></div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('style/js/libs/bootstrap.js') }}"></script>
    <script src="{{ asset('style/js/libs/jquery.js') }}"></script>
    <script src="{{ asset('style/js/libs/metisMenu.js') }}"></script>
    <script src="{{ asset('style/js/libs/sb-admin-2.js') }}"></script>
    <script src="{{ asset('style/js/libs/scripts.js') }}"></script>
    <script src="{{ asset('style/js/libs/bootstrap.min.js') }}"></script>
</body>

</html>
