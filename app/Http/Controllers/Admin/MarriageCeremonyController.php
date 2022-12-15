<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvitationMain;
use App\Models\MarriageCeremony;
use Illuminate\Http\Request;

class MarriageCeremonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MarriageCeremony  $marriageCeremony
     * @return \Illuminate\Http\Response
     */
    public function show(MarriageCeremony $marriageCeremony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MarriageCeremony  $marriageCeremony
     * @return \Illuminate\Http\Response
     */
    public function edit(MarriageCeremony $marriageCeremony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MarriageCeremony  $marriageCeremony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarriageCeremony $marriageCeremony, $id)
    {
        //
        $id = $request->id;
        $data = $request->all();
        $item = MarriageCeremony::where('invitation_main_id', $id)->first();

        $item->update($data);

        $invitation = InvitationMain::all();

        return view('pages.admin.invitation.index',[
            'items' => $invitation
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MarriageCeremony  $marriageCeremony
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarriageCeremony $marriageCeremony)
    {
        //
    }
}
