@extends('layout.AdminLayout')
@section('content')
    <h1>Admins</h1><hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Admin Name</th>
                <th>Admin Photo</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created at</th>
                <th>Updates at</th>
                <th>Delete</th>
            </tr>
        </thead>
        @foreach($admins as $value)
        <tbody>
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td><img height="70px" src="http://localhost/football/public/AdminsPhotos/{{$value->photo}}" alt=""></td>
                <td>{{$value->email}}</td>
                <td>{{$value->password}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
                <td><a href="http://localhost/football/public/admin/DeleteAdmin/{{$value->id}}"><input type="button" value="Delete"></a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
@stop