<!DOCTYPE html>
<html lang="en">

<head>
    <title>Just Football</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://localhost/football/public/NewsImages/logoo.png">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('style/css/libs/blog-post.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/bootstrap.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/bootstrap.min.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/font-awesome.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/metisMenu.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/sb-admin-2.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/libs/styles.css') }}" rel='stylesheet' />
    <link href="{{ asset('style/css/styles.css') }}" rel='stylesheet' />
</head>

<body>
    <!---------------------Header---------------------------------------------------------------->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div style="height:10px; background:#449D44;"></div><br>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header navbar-brand">
                    <img style="margin-top:-10px; margin-right:60px; height:40px;" title="It's Not Just a Game"
                        class="img-responsive navbar-right" src="http://localhost/football/public/NewsImages/logo.png">
                </div>
            </div>
            <div style="font-weight:bold; color:#fff;" class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost/football/public/index">Home</a></li>
                    <li><a href="http://localhost/football/public/matches">Leagues & Matches</a></li>
                    <li><a href="http://localhost/football/public/transfers">Transfers</a></li>
                    <li><a href="http://localhost/football/public/live">Live</a></li>
                    <li><a href="http://localhost/football/public/history">History</a></li>
                    <li><a href="http://localhost/football/public/ShowPost">Discussions</a></li>
                </ul>
                @if (!empty($users))
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"
                                style="cursor: pointer;background-color: #08080800;">{{ $users }} <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/football/public/UserProfile">Profile</a></li>
                                <li><a href="http://localhost/football/public/logout">SignOut</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-header">
                        <img style="height: 40px;margin-top: 5px;" class="img-thumbnail"
                            src="http://localhost/football/public/photos/{{ $photo }}" alt="">
                    </ul>
                @endif
                @if (empty($users))
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://localhost/football/public/signup"><span
                                    class="glyphicon glyphicon-user"></span> SignUp</a></li>
                        <li><a href="http://localhost/football/public/login"><span
                                    class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
                    </ul>
                @endif
            </div>
        </div>
        <br>
        <div style="height:10px; background:#449D44;"></div>
    </nav><br><br>
    <!----------------------------Page Content----------------------------------------------------------->
    <div class="container">
        @yield('content')
    </div>
    <!---------------------Footer-------------------------------------------------------------->
    <div class="navbar navbar-inverse footer">
        <div style="height:10px; background:#449d44;"></div>
        <div class="row">
            <br>
            <p style="display: inline; font-weight:bold; color:#fff;margin-left: 60px;">Just Football &copy; All Rights
                Reserved 2019-2020.</p>
            <p style="font-weight:bold; color:#fff; float:right; margin-right:65px;">Contact Us : <img
                    style="height:20px;"
                    src="http://localhost/football/public/NewsImages/gmail-icon.png">justfootballpro@gmail.com</p>
            <br><br>
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
