<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GuestBook extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invitation_main_id',
        'message_from',
        'message',
        'created_date'
    ];

    public function guestBooks()
    {
        return $this->belongsTo(InvitationMain::class, 'invitation_main_id', 'id');
    }
}
