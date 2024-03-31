@extends('layout.AdminLayout')
@section('content')
    <div class="container col-sm-offset-4 col-sm-4">    
        <h1>Write News</h1><hr>
        <form class="formgroup" enctype="multipart/form-data" method="POST" action="http://localhost/football/public/admin/StoreNews"> 
            {{ @csrf_field() }}
            <input type="hidden" name="admin_id" value="{{$adminID}}">   
            
            <label>Title</label><br>
            <textarea class="form-control" placeholder="Write Latest News ..."  name="title" rows="2" required></textarea><br><br>
            
            <label>Body</label><br>
            <textarea class="form-control" placeholder="Write Latest News ..."  name="body" rows="5" required></textarea><br><br>

            <label>Insert Photo</label><br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" style="background-color: #5cb85c;">
                    <i class="glyphicon glyphicon-lock"></i>
                </span>
                <input type="file" class="form-control" name="image">
            </div><br><br>
                
            <input type="submit" style="font-weight: bold;" class="btn btn-success btn-block" value="Submit">
        </form>
    </div>
@stop