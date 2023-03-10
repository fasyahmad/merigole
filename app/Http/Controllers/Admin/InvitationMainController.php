<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvitationMainRequest;
use App\Models\Catalog;
use App\Models\DigitalGift;
use App\Models\Gallery;
use App\Models\GuestBook;
use Illuminate\Http\Request;
use App\Models\InvitationMain;
use App\Models\MasterCatalog;
use App\Models\PhysicalGift;
use App\Models\Rsvp;
use Illuminate\Support\Facades\Storage;
use Exception;
use SebastianBergmann\Environment\Console;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InvitationMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitation = InvitationMain::all();

        return view('pages.admin.invitation.index',[
            'items' => $invitation
        ]);
    }

    public function catalogIndex()
    {
        $catalogs = MasterCatalog::all();

        return view('pages.admin.invitation.categoryIndex',[
            'items' => $catalogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createInvitation($id)
    {
        //
        $catalog = MasterCatalog::where('master_catalog_id', $id)->firstOrFail();
        $test = 'ad';
        return view('pages.admin.invitation.create',[
            'item' => $catalog
        ]);
    }

    public function create()
    {
        //
        return view('pages.admin.invitation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvitationMainRequest $request)
    {
        //
        $data = $request->all();

        $currInvitation = InvitationMain::create($data);

        if($request->hasFile('pics_groom')){

            $destination_path = 'public/invitationMain/' . $request->id;
            $image = $request->file('pics_groom');
            $image_name = $image->hashName();
            $path = $request->file('pics_groom')->storeAs($destination_path, $image_name);

            $data['pics_groom'] = $image_name;
        }

        if($request->hasFile('pics_groom')){

            $destination_path = 'public/invitationMain/' . $request->id;
            $image = $request->file('pics_groom');
            $image_name = $image->hashName();
            $path = $request->file('pics_groom')->storeAs($destination_path, $image_name);

            $data['pics_groom'] = $image_name;
        }

        $currInvitation->update($data);

        $masterCatalog = MasterCatalog::where('master_catalog_id', $request->catalog_id)->firstOrFail();
        
        $catalog = Catalog::create([
            'user_id' => Auth::user()->id,
            'catalog_name' => $masterCatalog->master_catalog_name,
            'catalog_id' => $masterCatalog->master_catalog_id
        ]);


        $invitation = InvitationMain::all();

        return view('pages.admin.invitation.index',[
            'items' => $invitation
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvitationMain  $invitationMain
     * @return \Illuminate\Http\Response
     */
    public function show(InvitationMain $invitationMain)
    {
        //
        $url = urlencode ("http://merigole.test/api/invitations?id=1");
        return json_decode(file_get_contents($url), true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvitationMain  $invitationMain
     * @return \Illuminate\Http\Response
     */
    public function edit(InvitationMain $invitation)
    {
        //
        $invitationData = InvitationMain::with(['marriageCeremonys', 'weddingReceptions'])->find($invitation->id);

        $physicalGifts = PhysicalGift::where('invitation_main_id', $invitation->id)->get();
        $digitalGifts = DigitalGift::where('invitation_main_id', $invitation->id)->get();
        $guestBooks = GuestBook::where('invitation_main_id', $invitation->id)->get();
        $rsvps = Rsvp::where('invitation_main_id', $invitation->id)->get();
        $galleries = Gallery::where('invitation_main_id', $invitation->id)->get();

        $cek = $physicalGifts->count() == 0;

        // echo $physicalGifts;
        return view('pages.admin.invitation.edit', [
            'item' => $invitationData,
            'physicalGifts' => $physicalGifts,
            'digitalGifts' => $digitalGifts,
            'guestBooks' => $guestBooks,
            'rsvps' => $rsvps,
            'galleries' => $galleries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvitationMain  $invitationMain
     * @return \Illuminate\Http\Response
     */
    public function update(InvitationMainRequest $request, InvitationMain $invitationMain, $id)
    {
        //
        $data = $request->all();
        $item = InvitationMain::findOrFail($id);

       if($request->hasFile('pics_groom')){

            $destination_path = 'public/invitationMain/' . $id;
            $image = $request->file('pics_groom');
            $image_name = $image->hashName();
            $path = $request->file('pics_groom')->storeAs($destination_path, $image_name);

            $data['pics_groom'] = $image_name;
        }

        if($request->hasFile('pics_bride')){

            $destination_path = 'public/invitationMain/' . $id;
            $image = $request->file('pics_bride');
            $image_name = $image->hashName();
            $path = $request->file('pics_bride')->storeAs($destination_path, $image_name);

            $data['pics_bride'] = $image_name;
        }

        $item->update($data);

        $invitation = InvitationMain::all();

        return view('pages.admin.invitation.index',[
            'items' => $invitation
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvitationMain  $invitationMain
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvitationMain $invitationMain)
    {
        //
        $invitationMain->delete();
        return redirect()->route('dashboard.invitation.index')->with('success', 'invitation has been deleted');
    }

}
