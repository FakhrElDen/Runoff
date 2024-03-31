@extends('layout.AdminLayout')
@section('content')
    <h1>Edit Stats Of Premier League</h1><hr>
    <form class="form-inline" enctype="multipart/form-data"  method="post" action="http://localhost/football/public/admin/UpdatePremierLeagueStats/{{$stats->id}}" >
        {{ @csrf_field() }}
        <fieldset class="form-group">
            <div class="form-group col-sm-4">
                <label>Scorer Name</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="PremierLeagueTopScorer" value="{{$stats->PremierLeagueTopScorer}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>Scorer Team Logo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="file" class="form-control" name="ScorerTeamLogo" value="{{$stats->ScorerTeamLogo}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>#No Of Goals</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="NoGoals" value="{{$stats->NoGoals}}">
                </div><br><br>
            </div>
            
            <div class="form-group col-sm-4">
                <label>Top Assistant</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="PremierLeagueTopAssistant" value="{{$stats->PremierLeagueTopAssistant}}" required>
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>Assistant Team Logo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="file" class="form-control" name="AssistantTeamLogo" value="{{$stats->AssistantTeamLogo}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>#No Of Assisting</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="NoAssisting" value="{{$stats->NoAssisting}}">
                </div><br><br>
            </div>

            <div class="form-group col-sm-4">
                <label>Top Taking Yellow Cards</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="PremierLeagueYellowCards" value="{{$stats->PremierLeagueYellowCards}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>Player Team Logo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="file" class="form-control" name="YellowCardsTeamLogo" value="{{$stats->YellowCardsTeamLogo}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>#No Of Yellow Cards</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="NoYellowCards" value="{{$stats->NoYellowCards}}">
                </div><br><br>
            </div>

            <div class="form-group col-sm-4">
                <label>Top Takig Red Cards</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="PremierLeagueRedCards" value="{{$stats->PremierLeagueRedCards}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>Player Team Logo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="file" class="form-control" name="RedCardsTeamLogo" value="{{$stats->RedCardsTeamLogo}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>#No Of Red Cards</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="NoRedCards" value="{{$stats->NoRedCards}}">
                </div><br><br>
            </div>

            <div class="form-group col-sm-4">
                <label>Top GoalKeeper Clean Sheets</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="PremierLeagueTopCleanSheet" value="{{$stats->PremierLeagueTopCleanSheet}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>GoalKeeper Team Logo</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-flag"></i>
                    </span>
                    <input type="file" class="form-control" name="GoalKeeperTeamLogo" value="{{$stats->GoalKeeperTeamLogo}}">
                </div><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label>#No Of Clean Sheets</label><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" style="background-color: #5cb85c;">
                        <i class="glyphicon glyphicon-edit"></i>
                    </span>
                    <input type="text" class="form-control" name="NoCleanSheet" value="{{$stats->NoCleanSheet}}">
                </div><br><br>
            </div>

            <div class="col-sm-offset-4 col-sm-4"><br><br>
                <input class="btn btn-success btn-block" type="submit" value="Update stats">
            </div>

        </fieldset>	
    </form>  
@stop