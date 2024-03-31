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
    
    <form class="formgroup" enctype="multipart/form-data"  method="POST" action="http://localhost/football/public/admin/UpdateAdmin/{{$admin->id}}">
        {{ @csrf_field() }}
        <fieldset>
            <div class="container col-sm-offset-4 col-sm-4">
                <h1>Edit Your Profile</h1><hr>

                <label>Admin Name</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="name" value="{{$admin->name}}" required><br><br>
                </div><br><br>

                <!-- <label>Email:</label><br>
                <input type="textarea" name="email" value="{{$admin->email}}" required><br><br> -->

                <label>New Password</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="textarea" class="form-control" id="password" name="password" value=" " pattern=".{6,}" title="Six or more characters"><br><br>
                </div><br><br>

                <label>Repeat Password</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="textarea" class="form-control" id="confirm_password"><br><br>
                </div><br><br>

                <label>Insert Photo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-camera"></i>
                    </span>
                    <input type="file" class="form-control" name="photo" value="{{$admin->photo}}"><br><br>
                </div><br><br>

                <input type="submit" class="btn btn-success btn-block" style="font-weight: bold;" value="Edit Admin"><hr><br>
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