@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-sm-2 sidenav" id="mySidenav"
            style="background-color:#222;  border-right:10px solid #449d44;border-bottom: 10px solid #449d44;"><br><br>
            <ul id="Side_Menu" class="nav nav-pills nav-stacked">
                <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                <li>
                    <button class="dropdown-btn">
                        <i style="margin-left: -5px;" class="glyphicon glyphicon-triangle-bottom"></i>
                        <h3 style="display:inline;"><img class="flag"
                                src="http://localhost/football/public/NewsImages/England.png"> </h3> Englan
                    </button>
                    <div style="display:none" class="dropdown-container">
                        <a class="row" href="http://localhost/football/public/matches">Premier League</a>
                        <a class="row" href="http://localhost/football/public/FACup">FA Cup</a>
                        <a class="row" href="http://localhost/football/public/CommunityShielde">Community Shield</a>
                    </div>
                </li>
                <li>
                    <button class="dropdown-btn">
                        <i style="margin-left: -10px;" class="glyphicon glyphicon-triangle-bottom"></i>
                        <h3 style="display:inline;"><img class="flag"
                                src="http://localhost/football/public/NewsImages/Spain.png"> </h3> Spain
                    </button>
                    <div class="dropdown-container">
                        <a class="row" href="#">La Liga</a>
                        <a class="row" href="#">Copa del Rey</a>
                        <a class="row" href="#">Supercopa de Espana</a>
                    </div>
                </li>
                <li>
                    <button class="dropdown-btn">
                        <i style="margin-left: -25px;" class="glyphicon glyphicon-triangle-bottom"></i>
                        <h3 style="display:inline;"><img class="flag"
                                src="http://localhost/football/public/NewsImages/Italy.png"> </h3> Italy
                    </button>
                    <div style="display:none" class="dropdown-container">
                        <a class="row" href="#">Serie A</a>
                        <a class="row" href="#">Coppa Italia</a>
                        <a class="row" href="#">Supercoppa Italiana</a>
                    </div>
                </li>
                <li>
                    <button class="dropdown-btn">
                        <i style="margin-left: -5px;" class="glyphicon glyphicon-triangle-bottom"></i>
                        <h3 style="display:inline;"><img class="flag"
                                src="http://localhost/football/public/NewsImages/France.png"> </h3> France
                    </button>
                    <div style="display:none" class="dropdown-container">
                        <a class="row" href="#">Ligue 1</a>
                        <a class="row" href="#">Coupe de France</a>
                        <a class="row" href="#">French Super Cup</a>
                    </div>
                </li>
                <li>
                    <button class="dropdown-btn">
                        <i class="glyphicon glyphicon-triangle-bottom"></i>
                        <h3 style="display:inline;"><img class="flag"
                                src="http://localhost/football/public/NewsImages/German.png"> </h3> German
                    </button>
                    <div style="display:none" class="dropdown-container">
                        <a class="row" href="#">Bundesliga</a>
                        <a class="row" href="#">DFB Pokal</a>
                        <a class="row" href="#">DFL-Supercup</a>
                    </div>
                </li>
            </ul>
        </div>
        <!----------------------------------------------------------------------------------------------------->
        <div class="col-sm-10" id="main">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            @yield('con')
        </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        for (var i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    <script>
        var i = 0;
        var GameWeek = ["GameWeek 1", "GameWeek 2", "GameWeek 3"];
        document.getElementById("gameweek").innerHTML = GameWeek[0];

        function meFunction() {
            i++;
            if (i == 1) {
                document.getElementById("A").style.display = "none";
                document.getElementById("B").style.display = "block";
                document.getElementById("C").style.display = "none";
                document.getElementById("gameweek").innerHTML = GameWeek[1];
            }
            if (i == 2) {
                document.getElementById("A").style.display = "none";
                document.getElementById("B").style.display = "none";
                document.getElementById("C").style.display = "block";
                document.getElementById("gameweek").innerHTML = GameWeek[2];
            }
            if (i == 3) {
                document.getElementById("next").style.background.color = "green";
                i = 2;
            }
        }

        function myFunction() {
            i--;
            if (i == 0) {
                document.getElementById("A").style.display = "block";
                document.getElementById("B").style.display = "none";
                document.getElementById("C").style.display = "none";
                document.getElementById("gameweek").innerHTML = GameWeek[0];
            }
            if (i == 1) {
                document.getElementById("A").style.display = "none";
                document.getElementById("B").style.display = "block";
                document.getElementById("C").style.display = "none";
                document.getElementById("gameweek").innerHTML = GameWeek[1];
            }
            if (i == 2) {
                document.getElementById("A").style.display = "none";
                document.getElementById("B").style.display = "none";
                document.getElementById("C").style.display = "block";
            }
            if (i == -1) {
                document.getElementById("previous").style.background.color = "green";
                i = 0;
            }
        }
    </script>
@stop
