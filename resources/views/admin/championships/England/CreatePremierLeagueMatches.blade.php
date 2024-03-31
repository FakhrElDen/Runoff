@extends('layout.AdminLayout')
@section('content')
    <h1>Create Premier League Match</h1><hr>
    <form class="form-inline" enctype="multipart/form-data"  method="post" action="http://localhost/football/public/admin/StorePremierLeagueMatches" >
        {{ @csrf_field() }}
        <fieldset class="form-group">

            <div class="col-sm-9">
                <label>Game Week Time</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="MatchTime" require>
                </div><br><br>
            </div>

            <div class="form-group col-sm-4">
                <label>Home Team Name</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="FirstTeam" require>
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>Home Team Logo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="file" class="form-control" name="FirstTeamLogo" require>
                </div><br><br>
            </div>
            
            <div class="col-sm-9">
                <label>Match Time Or Match Result</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="MatchResult" require>
                </div><br><br>
            </div>

            <div class="form-group col-sm-4">
                <label>Away Team Name</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="SecondTeam" require>
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>Away Team Logo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="file" class="form-control" name="SecondTeamLogo" require>
                </div><br><br>
            </div>

            <div class="col-sm-offset-4 col-sm-4"><br><br>
                <input class="btn btn-success btn-block" type="submit" value="Create Match">
            </div>

        </fieldset>	
    </form>  
@stop