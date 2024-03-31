<?php

namespace App\Http\Controllers;

use App\England;
use App\PremierLeagueStats;
use Illuminate\Http\Request;
use App\PremierLeagueMatches;

class EnglandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');

        $PremierLeague = England::orderBy('points', 'desc')->orderBy('goals_difference', 'desc')->get();

        $PremierLeagueStats = PremierLeagueStats::get();

        $objPost = new PremierLeagueMatches();
        $Friday10January = $objPost->Friday10JanuaryMatches();
        $Saturday11January = $objPost->Saturday11JanuaryMatches();
        $Sunday12January = $objPost->Sunday12JanuaryMatches();
        $Saturday18January = $objPost->Saturday18JanuaryMatches();
        $Sunday19January = $objPost->Sunday19JanuaryMatches();

        return view('admin.championships.England.PremierLeague', compact('Friday10January', 'Saturday11January', 'Sunday12January', 'Saturday18January', 'Sunday19January', 'PremierLeague', 'PremierLeagueStats', 'admin', 'adminID', 'photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $stats = PremierLeagueStats::findOrFail($id);
        return view('admin.championships.England.EditPremierLeagueStats', compact('stats', 'admin', 'adminID', 'photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $new = PremierLeagueStats::findOrFail($id);
        $form = $request->all();
        if ($file = $request->file('ScorerTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $form['ScorerTeamLogo'] = $name;
        }
        if ($file = $request->file('AssistantTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $form['AssistantTeamLogo'] = $name;
        }
        if ($file = $request->file('YellowCardsTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $form['YellowCardsTeamLogo'] = $name;
        }
        if ($file = $request->file('RedCardsTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $form['RedCardsTeamLogo'] = $name;
        }
        if ($file = $request->file('GoalKeeperTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $form['GoalKeeperTeamLogo'] = $name;
        }
        $new->update($form);
        return redirect('admin/PremierLeague');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $matches = PremierLeagueMatches::findOrFail($id);
        return view('admin.championships.England.EditPremierLeagueMatches', compact('matches', 'admin', 'adminID', 'photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $team = England::findOrFail($id);
        // dd($team);die();
        return view('admin.championships.England.EditPremierLeague', compact('team', 'admin', 'adminID', 'photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = England::findOrFail($id);
        $form = $request->all();
        if ($file = $request->file('photo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $form['photo'] = $name;
        }
        $new->update($form);
        return redirect('admin/PremierLeague');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = PremierLeagueMatches::findOrFail($id);
        $match->delete();
        return redirect('admin/PremierLeague');
    }

    public function UpdateMatches(Request $request, $id)
    {
        $new = PremierLeagueMatches::findOrFail($id);
        $form = $request->all();
        if ($file = $request->file('FirstTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $form['FirstTeamLogo'] = $name;
        }
        if ($file = $request->file('SecondTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $form['SecondTeamLogo'] = $name;
        }
        $new->update($form);
        return redirect('admin/PremierLeague');
    }

    public function CreateMtch()
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        return view('admin.championships.England.CreatePremierLeagueMatches', compact('admin', 'adminID', 'photo'));
    }

    public function StoreMtch(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('FirstTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $input['FirstTeamLogo'] = $name;
        }
        if ($file = $request->file('SecondTeamLogo')) {
            $name = $file->getClientOriginalName();
            $file->move('NewsImages.premier_league', $name);
            $input['SecondTeamLogo'] = $name;
        }
        PremierLeagueMatches::create($input);
        return redirect('admin/PremierLeague');
    }

    public function FACup()
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        return view('admin.championships.England.FACup', compact('admin', 'adminID', 'photo'));
    }
    public function CommunityShielde()
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        return view('admin.championships.England.CommunityShield', compact('admin', 'adminID', 'photo'));
    }
}
