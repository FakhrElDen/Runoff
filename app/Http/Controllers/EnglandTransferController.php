<?php

namespace App\Http\Controllers;

use App\England;
use Illuminate\Http\Request;
use App\PremierLeagueTransferIn;
use App\PremierLeagueTransferOut;

class EnglandTransferController extends Controller
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
        $objTransfer = new England();
        $Transfer = $objTransfer->getTeamsTransfer();
        // dd($Transfer);die();
        return view('admin.championships.England.PremierLeagueTransfer', compact('Transfer', 'admin', 'adminID', 'photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createIn($id)
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $teamid = $id;
        return view('admin.championships.England.CreatePremierLeagueTransferIn', compact('teamid', 'admin', 'adminID', 'photo'));
    }
    public function createOut($id)
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $teamid = $id;
        return view('admin.championships.England.CreatePremierLeagueTransferOut', compact('teamid', 'admin', 'adminID', 'photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeIn(Request $request)
    {
        $input = $request->all();
        PremierLeagueTransferIn::create($input);
        return redirect('admin/PremierLeagueTransfer');
    }
    public function storeOut(Request $request)
    {
        $input = $request->all();
        PremierLeagueTransferOut::create($input);
        return redirect('admin/PremierLeagueTransfer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editIn($id)
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $team = PremierLeagueTransferIn::findOrFail($id);
        return view('admin.championships.England.EditPremierLeagueTransferIn', compact('team', 'admin', 'adminID', 'photo'));
    }
    public function editOut($id)
    {
        $admin = session()->get('AdminName');
        $adminID = session()->get('AdminID');
        $photo = session()->get('AdminPhoto');
        $team = PremierLeagueTransferOut::findOrFail($id);
        return view('admin.championships.England.EditPremierLeagueTransferOut', compact('team', 'admin', 'adminID', 'photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateIn(Request $request, $id)
    {
        $new = PremierLeagueTransferIn::findOrFail($id);
        $form = $request->all();
        $new->update($form);
        return redirect('admin/PremierLeagueTransfer');
    }
    public function updateOut(Request $request, $id)
    {
        $new = PremierLeagueTransferOut::findOrFail($id);
        $form = $request->all();
        $new->update($form);
        return redirect('admin/PremierLeagueTransfer');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyIn($id)
    {
        $player = PremierLeagueTransferIn::findOrFail($id);
        $player->delete();
        return redirect('admin/PremierLeagueTransfer');
    }
    public function destroyOut($id)
    {
        $player = PremierLeagueTransferOut::findOrFail($id);
        $player->delete();
        return redirect('admin/PremierLeagueTransfer');
    }
}
