@extends('layout.AdminLayout')
@section('content')
    <div id ="england">
        @foreach($Transfer as $value)
        <table class="table">
            <thead  style="color:#343a40; font-weight: 800;" class="thead-dark col-sm-10"><img style="width: 25px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->photo}}">{{$value->team}}</thead>
            <thead style="background-color:#343a40;" class="thead-dark">
                <tr>
                    <th style="color:#5cb85c;"class="col-sm-5">IN</th>
                    <th style="background-color: #343a40;"><a href="http://localhost/football/public/admin/CreatePremierLeagueTransferIn/{{$value->id}}"><input class="btn btn-success" value="Create"></a></th>
                </tr>
            </thead>
            @foreach( $value['premier_league_transfer_ins'] as $players)
            <tbody>
                <tr class="success">
                    <td>{{$players->playersIn}}</td>
                    <td><a href="http://localhost/football/public/admin/EditPremierLeagueTransferIn/{{$players->id}}"><input class="btn btn-info" value="Edit">
                    <a href="http://localhost/football/public/admin/DeletePremierLeagueTransferIn/{{$players->id}}"><input class="btn btn-danger" value="Delete"></a></td>
                </tr>
            </tbody>
            @endforeach
            <thead style="background-color:#343a40;" class="thead-dark">
                <tr>
                    <th style="color:#ca4444;"class="col-sm-7">OUT</th>
                    <th style="background-color: #343a40;"><a href="http://localhost/football/public/admin/CreatePremierLeagueTransferOut/{{$value->id}}"><input class="btn btn-success" value="Create"></a></th>
                </tr>
            </thead>
            @foreach( $value['premier_league_transfer_outs'] as $players)
            <tbody>
                <tr class="danger">
                    <td>{{$players->playersOut}}</td>
                    <td><a href="http://localhost/football/public/admin/EditPremierLeagueTransferOut/{{$players->id}}"><input class="btn btn-info" value="Edit">
                    <a href="http://localhost/football/public/admin/DeletePremierLeagueTransferOut/{{$players->id}}"><input class="btn btn-danger" value="Delete"></a></td>
                </tr>
            </tbody>
            @endforeach
        </table> <hr> 
        @endforeach   
    </div>
@stop