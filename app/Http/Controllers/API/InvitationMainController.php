<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\InvitationMain;
use App\Models\PhysicalGift;
use Illuminate\Http\Request;

class InvitationMainController extends Controller
{
    //
    public function getAll(Request $request)
    {
        $id = $request->input('id');

        if($id)
        {
            $invitation = InvitationMain::with(['guestBooks', 'rsvps','marriageCeremonys', 'weddingReceptions','physicalGifts', 'digitalGifts', 'galleries'])->find($id);


            if($invitation)
            {
                return ResponseFormatter::success(
                    $invitation,
                    'Data berhasil di ambil'
                );
            }else{
                return ResponseFormatter::error(
                    null,
                    'Tidak ada data yang berhasil di ambil',
                    404
                );
            };
        }else{

            return ResponseFormatter::error(
                null,
                'Tidak ada data yang berhasil di ambil',
                404
            );
        
        }
    }

    public function createInvitation(Request $request)
    {

    }
}
