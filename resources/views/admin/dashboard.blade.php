@extends('layout.AdminLayout')
@section('content')
    <h2>Europe</h2><hr>          
    <table class="table table-striped">
        <thead>
            <tr>
                <th>England</th>
                <th>Spain</th>
                <th>France</th>
                <th>Germany</th>
                <th>Italy</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="http://localhost/football/public/admin/PremierLeague">Premier League</a></td>
                <td>La Liga</td>
                <td>Ligue 1</td>
                <td>Bundesliga</td>
                <td>Serie A</td>
            </tr>
            <tr>
                <td>FA Cup</td>
                <td>Copa del Rey</td>
                <td>Coupe de France</td>
                <td>DFB Pokal</td>
                <td>Coppa Italia</td>
            </tr>
            <tr>
                <td>League Cup</td>
                <td>Supercopa de Espana</td>
                <td>Coupe de la Ligue</td>
                <td>DFL-Supercup</td>
                <td>Supercoppa Italiana</td>
            </tr>
            <tr>
                <td>Community Shield</td>
                <td></td>
                <td>French Super Cup</td>
            </tr>
        </tbody>
  </table>    
@stop



