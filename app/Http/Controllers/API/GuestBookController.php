<?php

namespace App\Http\Controllers\API;

use DateTime;
use App\Models\GuestBook;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class GuestBookController extends Controller
{
    //
    public function getAll(Request $request)
    {
        $id = $request->input('id');

        if($id)
        {
            $message = GuestBook::where('invitation_main_id', $id)->get();

            if($message)
            {
                return ResponseFormatter::success(
                    $message,
                    'Data berhasil di ambil'
                );

            }
        }
    }



    public function createMessage(Request $request)
    {
        try
        {
            $invitationMainId = $request->input('invitationMainId');
            $messageFrom = $request->input('messageFrom');
            $message = $request->input('message');

            $request->validate([
                'invitationMainId' => 'required',
                'messageFrom' => 'required',
                'message' => 'required',
            ]);

             $dt = new DateTime();

            $guesBook = GuestBook::create([
                'invitation_main_id' => $invitationMainId,
                'message_from' => $messageFrom,
                'message' => $message,
                'created_date' => $dt->format('Y-m-d H:i:s')
            ]);

            return ResponseFormatter::success([
                'transaction' => $guesBook
            ], 'Message Created');

        }catch(\Exception $error)
        {
            return ResponseFormatter::error([
                'error' => $error
            ], 'something went error');
        }
        

        


        
    }
}
