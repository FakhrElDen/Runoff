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
    <link href="{{ asset('style/css/libs/blog-post.css') }}" rel='stylesheet'/>
    <link href="{{ asset('style/css/libs/bootstrap.css') }}" rel='stylesheet'/>
    <link href="{{ asset('style/css/libs/bootstrap.min.css') }}" rel='stylesheet'/>
    <link href="{{ asset('style/css/libs/font-awesome.css') }}" rel='stylesheet'/>
    <link href="{{ asset('style/css/libs/metisMenu.css') }}" rel='stylesheet'/>
    <link href="{{ asset('style/css/libs/sb-admin-2.css') }}" rel='stylesheet'/>
    <link href="{{ asset('style/css/libs/styles.css') }}" rel='stylesheet'/>
    <link href="{{ asset('style/css/styles.css') }}" rel='stylesheet'/>
</head>

<body>
    <form method="POST" action="http://localhost/football/public/loginUser" style="color:#555;">
        {{ @csrf_field() }}
        <fieldset>
            <div class="container col-sm-offset-4 col-sm-4">
                <h1>Login</h1>
                <p>Please fill in this form to Login.</p>
                <hr>

                <label for="email"><b>Email</b></label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-envelope"></i>
                    </span>
                    <input type="email" placeholder="Enter Email" class="form-control" name="email" required>
                </div><br><br>

                <label for="psw"><b>Password</b></label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input id="password" type="password" placeholder="Enter Password" class="form-control" name="password" required>
                </div><br><br>
                
                <!-- <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>

                <div class="container" style="background-color:#f1f1f1">
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div><br> -->

                <div class="clearfix">
                    <button type="submit" style="font-weight: bold;" class="btn btn-success btn-block">Login</button>
                </div>
            </div>
        </fieldset>
    </form> 
</body>
</html>