@extends('layout.layout')
@section('content')
    <div class="row">  
        <div class="col-sm-3" style="background-color:#222; height:100%; border-left:10px solid #449d44;border-bottom: 10px solid #449d44; border-right:10px solid #449d44;"><br><br>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active" id= "e">
                            <button onclick="EnglanFunction()" class="MenueButton">
                                <h3 style="display:inline;"><img class="flag" src="http://localhost/football/public/NewsImages/England.png"></h3> England
                            </button>
                        </li>
                        <li>
                            <button onclick="SpainFunction()" class="MenueButton">
                                <h3 style="display:inline;" ><img class="flag" src="http://localhost/football/public/NewsImages/Spain.png" ></h3> Spain
                            </button>
                        </li>
                        <li >
                            <button onclick="ItalyFunction()" class="MenueButton">
                            <h3 style="display:inline;"><img class="flag" src="http://localhost/football/public/NewsImages/Italy.png" ></h3> Italy
                            </button>
                        </li>
                        <li>
                            <button onclick="GermanFunction()" class="MenueButton">
                            <h3 style="display:inline;"><img class="flag" src="http://localhost/football/public/NewsImages/German.png" ></h3> German
                            </button>
                        </li>
                        <li>
                            <button onclick="FranceFunction()" class="MenueButton">
                            <h3 style="display:inline;"><img class="flag" src="http://localhost/football/public/NewsImages/France.png" ></h3> France
                            </button>
                        </li>      
                    </ul>
        </div>
        <!---------------------------------------England-------------------------------------------------------------->
        <div class="col-sm-9" style="background-color:#fff;"><br>
            <div id ="england">
                        @foreach($Transfer as $value)
                        <table class="table">
                            <thead  style="color:#343a40; font-weight: 800;" class="thead-dark col-sm-10"><img style="width: 25px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->photo}}">{{$value->team}}</thead>
                            <thead style="background-color:#343a40;" class="thead-dark">
                                <tr>
                                    <th style="color:#5cb85c;"class="col-sm-5">IN</th>
                                </tr>
                            </thead>
                            @foreach( $value['premier_league_transfer_ins'] as $players)
                            <tbody>
                                <tr class="success">
                                    <td>{{$players->playersIn}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                            <thead style="background-color:#343a40;" class="thead-dark">
                                <tr>
                                    <th style="color:#ca4444;"class="col-sm-7">OUT</th>
                                </tr>
                            </thead>
                            @foreach( $value['premier_league_transfer_outs'] as $players)
                            <tbody>
                                <tr class="danger">
                                    <td>{{$players->playersOut}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table><hr> 
                        @endforeach   
            </div>
            <!------------------------------------------Spain----------------------------------------------------------->
            <div id ="spain" style="display:none;">
                <img  class="Constructionpic" src="http://localhost/football/public/NewsImages/Under-Construction.jpg" >
            </div>
            <!--------------------------------------Italy------------------------------------------------------------------> 
            <div id ="italy" style="display:none;">
                <img  class="Constructionpic" src="http://localhost/football/public/NewsImages/Under-Construction.jpg" >
            </div>
            <!------------------------------------German----------------------------------------------------------------->
            <div id ="german" style="display:none;">
                <img  class="Constructionpic" src="http://localhost/football/public/NewsImages/Under-Construction.jpg" >
            </div>
            <!-------------------------------------France---------------------------------------------------------------->
            <div id ="france" style="display:none;">
                <img  class="Constructionpic" src="http://localhost/football/public/NewsImages/Under-Construction.jpg" >
            </div>
        </div>
    </div>
    <script>
                    function EnglanFunction()
                    {
                        document.getElementById("spain").style.display="none";
                        document.getElementById("england").style.display="block";
                        document.getElementById("italy").style.display="none";
                        document.getElementById("german").style.display="none";
                        document.getElementById("france").style.display="none";
                    }
                    function SpainFunction()
                    {
                        document.getElementById("spain").style.display="block";
                        document.getElementById("england").style.display="none";
                        document.getElementById("italy").style.display="none";
                        document.getElementById("german").style.display="none";
                        document.getElementById("france").style.display="none";
                    }
                    function ItalyFunction()
                    {
                        document.getElementById("spain").style.display="none";
                        document.getElementById("england").style.display="none";
                        document.getElementById("italy").style.display="block";
                        document.getElementById("german").style.display="none";
                        document.getElementById("france").style.display="none";
                    }
                    function GermanFunction()
                    {
                        document.getElementById("spain").style.display="none";
                        document.getElementById("england").style.display="none";
                        document.getElementById("italy").style.display="none";
                        document.getElementById("german").style.display="block";
                        document.getElementById("france").style.display="none";
                    }
                    function FranceFunction()
                    {
                        document.getElementById("spain").style.display="none";
                        document.getElementById("england").style.display="none";
                        document.getElementById("italy").style.display="none";
                        document.getElementById("german").style.display="none";
                        document.getElementById("france").style.display="block";
                    }
    </script>  
@stop