@extends('layout.AdminLayout')
@section('content')
    <h1>Premier League Table</h1><hr> 
    <table class="table" >
        <thead style="background-color:#343a40;" class="thead-dark">
            <tr>
                <th style="cursor: help; color:#fff;" title="Position">Pos</th>
                <th style="color:#fff;">Teams</th>
                <th style="cursor: help; color:#fff;" title="Play">P</th>
                <th style="cursor: help; color:#fff;" title="Win">W</th>
                <th style="cursor: help; color:#fff;" title="Draw">D</th>
                <th style="cursor: help; color:#fff;" title="Lose">L</th>
                <th style="cursor: help; color:#fff;" title="Goals For">GF</th>
                <th style="cursor: help; color:#fff;" title="Goals Against">GA</th>
                <th style="cursor: help; color:#fff;" title="Goal Difference">GD</th>
                <th style="cursor: help; color:#fff;" title="Points">Pts</th>
                <th style="color:#fff;" >Form</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($PremierLeague as  $key => $value)
            <tr>
                <td scope="row"><span class="@php if ($key == 0 || $key == 1 ||  $key == 2 || $key == 3) echo 'ChampionsLeague'@endphp"></span><span class="@php if ($key == 4 || $key == 5 || $key == 6) echo 'EuropaLeague ' @endphp"></span><span class="@php if ($key == 17 || $key == 18 || $key == 19) echo'KnockOut'@endphp"></span>{{$key+1}}</td>
                <td><img height="30px" src="http://localhost/football/public/NewsImages/premier_league/{{$value->photo}}" alt=""> {{$value->team}}</td>
                <td>{{$value->play}}</td>
                <td>{{$value->win}}</td>
                <td>{{$value->draw}}</td>
                <td>{{$value->lose}}</td>
                <td>{{$value->goals_for}}</td>
                <td>{{$value->goals_against}}</td>
                <td>{{$value->goals_difference}}</td>
                <td>{{$value->points}}</td>
                <td>{{$value->form}}</td>
                <td><a href="http://localhost/football/public/admin/EditPremierLeague/{{$value->id}}"><input class="btn btn-success" value="Edit"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table><hr>
    <h1>Premier League Stats</h1><hr>     
    <table class="table table-responsive">
        <thead style="background-color:#343a40;" class="thead-light">
            <tr>
                <th style="color:#fff;">Rank</th>
                <th style="color:#4479ca;">Goals</th>
                <th style="color:#fff;">#No</th>
                <th style="color:#4479ca;">Assists</th>
                <th style="color:#fff;">#No</th>
                <th style="color:#faa61a;">Yellow Cards</th>
                <th style="color:#fff;">#No</th>
                <th style="color:#ca4444;">Red Cards</th>
                <th style="color:#fff;">#No</th>
                <th style="color:#5cb85c;">Clean Sheets</th>
                <th style="color:#fff;">#No</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($PremierLeagueStats as  $key => $value)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$value->PremierLeagueTopScorer}}<br><img height="30px" src="http://localhost/football/public/NewsImages/premier_league/{{$value->ScorerTeamLogo}}" alt=""></td><!--Goals-->
                <td>{{$value->NoGoals}}</td>
                <td>{{$value->PremierLeagueTopAssistant}}<br><img height="30px" src="http://localhost/football/public/NewsImages/premier_league/{{$value->AssistantTeamLogo}}" alt=""></td><!--Assists-->
                <td>{{$value->NoAssisting}}</td>
                <td>{{$value->PremierLeagueYellowCards}}<br><img height="30px" src="http://localhost/football/public/NewsImages/premier_league/{{$value->YellowCardsTeamLogo}}" alt=""></td><!--Yellow Cards-->
                <td>{{$value->NoYellowCards}}</td>
                <td>{{$value->PremierLeagueRedCards}}<br><img height="30px" src="http://localhost/football/public/NewsImages/premier_league/{{$value->RedCardsTeamLogo}}" alt=""></td><!--Red Cards-->
                <td>{{$value->NoRedCards}}</td>
                <td>{{$value->PremierLeagueTopCleanSheet}}<br><img height="30px" src="http://localhost/football/public/NewsImages/premier_league/{{$value->GoalKeeperTeamLogo}}" alt=""></td>
                <td>{{$value->NoCleanSheet}}</td>
                <td><a href="http://localhost/football/public/admin/EditPremierLeagueStats/{{$value->id}}"><input style="width: 100px;" class="btn btn-success" value="Edit"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Premier League Matches</h1><hr>
    <div style="text-align: center;">
        <button onclick="myFunction()" id="previous" style="margin-top: -10px;padding: 12px 30px;font-size: 30px;"class="btn btn-success btn-lg">Previous</button>
        <p id="gameweek"></p>
        <button onclick="meFunction()" id="next" style="margin-top: -10px;padding: 13px 55px;font-size: 30px;"class="btn btn-success btn-lg">Next</button><br><br>
    </div>
    <div id="A">
        @foreach($Friday10January as $key => $value)
            <table class="table">
                <thead>
                    <tr>
                        @if ($key < 1)
                        <th style="text-align:center;text-align: center;color:#fff;background-color: #343a40;">{{$value->MatchTime}}</th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"><a href="http://localhost/football/public/admin/CreatePremierLeagueMatches"><input class="btn btn-success" value="Create"></a></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->FirstTeamLogo}}">{{$value->FirstTeam}}</td>     
                        <td> <input readonly style="color:#000; margin-top: 35px; text-align:center; cursor:auto;" value="{{$value->MatchResult}}" ></td>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->SecondTeamLogo}}">{{$value->SecondTeam}}</td>
                        <td><a href="http://localhost/football/public/admin/EditPremierLeagueMatches/{{$value->id}}"><input class="btn btn-info" value="Edit"></a>
                        <br><a href="http://localhost/football/public/admin/DeletePremierLeagueMatches/{{$value->id}}"><input class="btn btn-danger" value="Delete"></a></td>
                    </tr>
                </tbody>
            </table>
        @endforeach
        @foreach($Saturday11January as $key => $value)
            <table class="table">
                <thead>
                    <tr>
                        @if ($key < 1)
                        <th style="text-align:center;text-align: center;color:#fff;background-color: #343a40;">{{$value->MatchTime}}</th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"><a href="http://localhost/football/public/admin/CreatePremierLeagueMatches"><input class="btn btn-success" value="Create"></a></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->FirstTeamLogo}}">{{$value->FirstTeam}}</td>     
                        <td> <input readonly style="color:#000; margin-top: 35px; text-align:center; cursor:auto;" value="{{$value->MatchResult}}" ></td>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->SecondTeamLogo}}">{{$value->SecondTeam}}</td>
                        <td><a href="http://localhost/football/public/admin/EditPremierLeagueMatches/{{$value->id}}"><input class="btn btn-info" value="Edit"></a>
                        <br><a href="http://localhost/football/public/admin/DeletePremierLeagueMatches/{{$value->id}}"><input class="btn btn-danger" value="Delete"></a></td>
                    </tr>
                </tbody>
            </table>   
        @endforeach
        @foreach($Sunday12January as $key => $value)
            <table class="table">
                <thead>
                    <tr>
                        @if ($key < 1)
                        <th style="text-align:center;text-align: center;color:#fff;background-color: #343a40;">{{$value->MatchTime}}</th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"><a href="http://localhost/football/public/admin/CreatePremierLeagueMatches"><input class="btn btn-success" value="Create"></a></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->FirstTeamLogo}}">{{$value->FirstTeam}}</td>     
                        <td> <input readonly style="color:#000; margin-top: 35px; text-align:center; cursor:auto;" value="{{$value->MatchResult}}" ></td>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->SecondTeamLogo}}">{{$value->SecondTeam}}</td>
                        <td><a href="http://localhost/football/public/admin/EditPremierLeagueMatches/{{$value->id}}"><input class="btn btn-info" value="Edit"></a>
                        <br><a href="http://localhost/football/public/admin/DeletePremierLeagueMatches/{{$value->id}}"><input class="btn btn-danger" value="Delete"></a></td>
                    </tr>
                </tbody>
            </table>   
        @endforeach
    </div>
    <div id="B">
        @foreach($Saturday18January as $key => $value)
            <table class="table">
                <thead>
                    <tr>
                        @if ($key < 1)
                        <th style="text-align:center;text-align: center;color:#fff;background-color: #343a40;">{{$value->MatchTime}}</th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"><a href="http://localhost/football/public/admin/CreatePremierLeagueMatches"><input class="btn btn-success" value="Create"></a></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->FirstTeamLogo}}">{{$value->FirstTeam}}</td>     
                        <td> <input readonly style="color:#000; margin-top: 35px; text-align:center; cursor:auto;" value="{{$value->MatchResult}}" ></td>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->SecondTeamLogo}}">{{$value->SecondTeam}}</td>
                        <td><a href="http://localhost/football/public/admin/EditPremierLeagueMatches/{{$value->id}}"><input class="btn btn-info" value="Edit"></a>
                        <br><a href="http://localhost/football/public/admin/DeletePremierLeagueMatches/{{$value->id}}"><input class="btn btn-danger" value="Delete"></a></td>
                    </tr>
                </tbody>
            </table>
        @endforeach
        @foreach($Sunday19January as $key => $value)
            <table class="table">
                <thead>
                    <tr>
                        @if ($key < 1)
                        <th style="text-align:center;text-align: center;color:#fff;background-color: #343a40;">{{$value->MatchTime}}</th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"></th>
                        <th style="background-color: #343a40;"><a href="http://localhost/football/public/admin/CreatePremierLeagueMatches"><input class="btn btn-success" value="Create"></a></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->FirstTeamLogo}}">{{$value->FirstTeam}}</td>     
                        <td> <input readonly style="color:#000; margin-top: 35px; text-align:center; cursor:auto;" value="{{$value->MatchResult}}" ></td>
                        <td style="color:#000;"><img style="width: 70px;" src="http://localhost/football/public/NewsImages/premier_league/{{$value->SecondTeamLogo}}">{{$value->SecondTeam}}</td>
                        <td><a href="http://localhost/football/public/admin/EditPremierLeagueMatches/{{$value->id}}"><input class="btn btn-info" value="Edit"></a>
                        <br><a href="http://localhost/football/public/admin/DeletePremierLeagueMatches/{{$value->id}}"><input class="btn btn-danger" value="Delete"></a></td>
                    </tr>
                </tbody>
            </table>   
        @endforeach
    </div>
    <div id="C">
    </div>
    <script>
        var i=0;
        var GameWeek = ["GameWeek 1", "GameWeek 2", "GameWeek 3"];
        document.getElementById("gameweek").innerHTML = GameWeek[0];
        function meFunction()
        {
            i++;
            if(i==1)
            {
                document.getElementById("A").style.display="none";
                document.getElementById("B").style.display="block";
                document.getElementById("C").style.display="none";
                document.getElementById("gameweek").innerHTML = GameWeek[1];
            }
            if(i==2)
            {
                document.getElementById("A").style.display="none";
                document.getElementById("B").style.display="none";
                document.getElementById("C").style.display="block";
                document.getElementById("gameweek").innerHTML = GameWeek[2];
            }
            if(i==3)
            {
                document.getElementById("next").style.background.color = "green";
                i=2;
            }
        }
        function myFunction()
        {
            i--;
            if(i==0)
            {
                document.getElementById("A").style.display="block";
                document.getElementById("B").style.display="none";
                document.getElementById("C").style.display="none";
                document.getElementById("gameweek").innerHTML = GameWeek[0];
            }
            if(i==1)
            {
                document.getElementById("A").style.display="none";
                document.getElementById("B").style.display="block";
                document.getElementById("C").style.display="none";
                document.getElementById("gameweek").innerHTML = GameWeek[1];
            }
            if(i==2)
            {
                document.getElementById("A").style.display="none";
                document.getElementById("B").style.display="none";
                document.getElementById("C").style.display="block";
            }
            if(i==-1)
            {
                document.getElementById("previous").style.background.color = "green";
                i=0;        
            }
        }
    </script>
@stop