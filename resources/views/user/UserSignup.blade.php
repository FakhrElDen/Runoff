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
    <form method="POST" action="http://localhost/football/public/StoreUser " style="color:#555;">
        {{ @csrf_field() }} 
        <fieldset>
            <div class="container col-sm-offset-4 col-sm-4">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="uname"><b>UserName</b></label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" placeholder="Enter UserName" class="form-control" name="name" required>
                </div><br><br>

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
                    <input id="password" type="password" placeholder="Enter Password" class="form-control" name="password" pattern=".{6,}" title="Six or more characters" required>
                </div><br><br>

                <label for="psw-repeat"><b>Repeat Password</b></label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input id="confirm_password" type="password" class="form-control" placeholder="Repeat Password" required>
                </div><br><br>

                <!-- <label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Remember me</label><br> -->

                <div class="clearfix">
                <button type="submit" style="font-weight: bold;" class="btn btn-success btn-block">Sign Up</button>
                </div><br><br>
            </div>
            <script>
                var password = document.getElementById("password");
                var confirm_password = document.getElementById("confirm_password");

                function validatePassword()
                {
                    if(password.value != confirm_password.value)
                    {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                    } 
                    else 
                    {
                        confirm_password.setCustomValidity('');
                    }
                }

                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
            </script>
        </fieldset>
    </form>
</body>
</html>    