@extends('layout.AdminLayout')
@section('content')
    <h1>Edit Premier League Transfer In</h1><hr>
    <form enctype="multipart/form-data"  method="post" action="http://localhost/football/public/admin/UpdatePremierLeagueTransferIn/{{$team->id}}" >
        {{ @csrf_field() }}
        <fieldset class="form-group">

            <div class="col-sm-9">
                <label>Team Going To</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="text" class="form-control" name="team" value="{{$team->team}}">
                </div><br><br>
            </div>
            
            <div class="col-sm-9">
                <label>Player</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="playersIn" value="{{$team->playersIn}}">
                </div><br><br>
            </div>

            <div class="col-sm-offset-4 col-sm-4"><br><br>
                <input class="btn btn-success btn-block" type="submit" value="Update">
            </div>

        </fieldset>	
    </form>  
@stop