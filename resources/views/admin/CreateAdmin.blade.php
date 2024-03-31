@extends('layout.AdminLayout')
@section('content')
    <form method="POST" action="http://localhost/football/public/admin/StoreAdmin">
        {{ @csrf_field() }}
        <fieldset>
            <div class="container col-sm-offset-4 col-sm-4">
                <h1>Create Admin</h1>
                <p>Please fill in this form to create admin</p>
                <hr>

                <label for="uname"><b>UserName</b></label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Enter UserName" name="name" required>
                </div><br><br>

                <label for="email"><b>Email</b></label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-envelope"></i>
                    </span>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                </div><br><br>

                <label for="psw"><b>Password</b></label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input id="password" type="password" class="form-control" placeholder="Enter Password" name="password" pattern=".{6,}" title="Six or more characters" required>
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
                    <button type="submit" class="btn btn-success btn-block">Create</button>
                </div>

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
@stop