@extends('layout.AdminLayout')
@section('content')
    <div class="container col-sm-offset-4 col-sm-4">
        <h1>Edit News</h1><hr>
        <form class="formgroup" enctype="multipart/form-data"  method="post" action="http://localhost/football/public/admin/UpdateNews/{{$news->id}}">
            {{ @csrf_field() }}

            <label>Title</label><br>
            <textarea class="form-control" placeholder="Write Latest News ..."  name="title" rows="2" required>{{$news->title}}</textarea><br><br>

            <label>Body</label><br>
            <textarea class="form-control" placeholder="Write Latest News ..."  name="body" rows="5" required>{{$news->body}}</textarea><br><br>

            <label>Insert Photo</label><br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" style="background-color: #5cb85c;">
                    <i class="glyphicon glyphicon-lock"></i>
                </span>
                <input type="file" class="form-control" name="image" value="{{$news->image}}">
            </div><br><br>
                
            <input type="submit" class="btn btn-success btn-block" value="Edit Post">
        </form>        
    </div>
@stop