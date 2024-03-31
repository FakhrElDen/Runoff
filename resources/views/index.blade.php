@extends('layout.layout')
@section('content')
    @if( empty($users) )
        <div class="alert alert-warning">
            <strong>Warning!</strong> You must SignUp or Login to go to another page
        </div>
    @endif
    @if( !empty($users) )
        <div class="alert alert-success alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Wellcome To Just Football !</strong>
        </div>
    @endif
    <div class="container">

        <div class="container">
            <div class="blog-header">
                <p class="lead"><h1>Latest News</h1></p>
            </div>
        </div>
        <div>
            <div class="col-sm-8">
                @foreach($news ?? '' as $value)
                    <h2>{{$value->title}}</h2>
                    <img  class="Constructionpic" src="http://localhost/football/public/NewsImages/{{$value->image}}">
                    <p><h3 style="font-weight:700;">{{$value->body}}</h3></p>
                    <hr><br><hr>        
                @endforeach  
            </div>
            <div style="border: 5px solid #449d44; border-radius: 25px;" class="col-sm-4">
                <h2>Ad space</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
@stop