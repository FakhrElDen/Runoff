@extends('layout.AdminLayout')
@section('content')
    <h1>Edit Table Of Premier League</h1><hr>
    <form class="form-inline" enctype="multipart/form-data"  method="post" action="http://localhost/football/public/admin/UpdatePremierLeague/{{$team->id}}" >
        {{ @csrf_field() }}
        <fieldset class="form-group">
            <div class="form-group col-sm-6">
                <label>Team Name</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="team" value="{{$team->team}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Team Logo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="file" class="form-control" name="photo" value="{{$team->photo}}">
                </div><br><br>
            </div>
            
            <div class="form-group col-sm-6">
                <label>Team's Matches palyed</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="play" value="{{$team->play}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Team's Matches Won</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="win" value="{{$team->win}}" required>
                </div><br><br>
            </div>

            <div class="form-group col-sm-6">
                <label>Team's Matches Draw</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="draw" value="{{$team->draw}}" required>
                </div><br><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Team's Matches Lose</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="lose" value="{{$team->lose}}" required>
                </div><br><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Team's Goals For</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="goals_for" value="{{$team->goals_for}}" required>
                </div><br><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Team's Goals Against</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="goals_against" value="{{$team->goals_against}}" required>
                </div><br><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Team's Goals Difference</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="goals_difference" value="{{$team->goals_difference}}" required>
                </div><br><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Team's Points</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="points" value="{{$team->points}}" required>
                </div><br><br>
            </div>
            <div class="col-sm-6">
                <label>Team's Form</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="form" value="{{$team->form}}" required>
                </div><br><br>
                <input style="margin-left: 285px;" class="btn btn-success btn-block" type="submit" value="Update Team">
            </div>
        </fieldset>	
    </form>  
@stop