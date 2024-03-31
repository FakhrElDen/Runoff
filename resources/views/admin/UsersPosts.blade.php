@extends('layout.AdminLayout')
@section('content')  
    <h3>Users Posts</h3><hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Post ID</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Photo</th>
                <th>Post</th>
                <th>Post Image</th>
                <th>Created</th>
                <th>Updates</th>
                <th>Delete</th>
            </tr>
        </thead>
        @foreach($posts as $value)
            <tbody>
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->user_id}}</td>
                    <td>{{$value->user_name}}</td>
                    <td><img height="70px" src="http://localhost/football/public/photos/{{$value->user_photo}}" alt=""></td>
                    <td>{{$value->post}}</td>
                    <td><img height="70px" src="http://localhost/football/public/PostsImages/{{$value->image}}" alt=""></td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>
                    <td><a href="http://localhost/football/public/admin/DeletePost/{{$value->id}}"><input type="button" value="Delete"></a></td>
                </tr>
            </tbody>
        @endforeach
    </table>
@stop