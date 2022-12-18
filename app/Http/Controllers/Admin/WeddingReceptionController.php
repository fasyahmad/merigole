<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvitationMain;
use App\Models\WeddingReception;
use Illuminate\Http\Request;

class WeddingReceptionController extends Controller
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
     * @param  \App\Models\WeddingReception  $weddingReception
     * @return \Illuminate\Http\Response
     */
    public function show(WeddingReception $weddingReception)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeddingReception  $weddingReception
     * @return \Illuminate\Http\Response
     */
    public function edit(WeddingReception $weddingReception)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WeddingReception  $weddingReception
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeddingReception $weddingReception, $id)
    {
        //
        $data = $request->all();
        $dataCeremony = WeddingReception::where('invitation_main_id', $id)->firstOrFail();
        $dataCeremony->update($data);
        $invitation = InvitationMain::all();

        return view('pages.admin.invitation.index',[
            'items' => $invitation
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeddingReception  $weddingReception
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeddingReception $weddingReception)
    {
        //
    }
}
