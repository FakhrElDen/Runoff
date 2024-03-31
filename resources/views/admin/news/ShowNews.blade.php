@extends('layout.AdminLayout')
@section('content')    
    <h1>Show News</h1><hr>      
    @foreach($news ?? '' as $value)
        <h3>{{$value->title}}</h3>
        <h5>{{$value->created_at->diffForHumans()}}</h5>
        <img height="100px" src="http://localhost/football/public/NewsImages/{{$value->image}}" alt=""><br><br>
        <h4>{{$value->body}}</h4>
        <!-- <a href="http://localhost/football/public/admin/WriteNews"><input class="btn btn-success" type="submit" value="Write News"></a> -->
        <a href="http://localhost/football/public/admin/EditNews/{{$value->id}}"><input class="btn btn-success" type="submit" value="Edit News"></a>
        <a href="http://localhost/football/public/admin/DeleteNews/{{$value->id}}"><input class="btn btn-success" type="submit" value="Delete News"></a>
        <br><hr><br>           
    @endforeach
@stop