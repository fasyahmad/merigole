<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rsvp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invitation_main_id',
        'full_name',
        'address',
        'is_attend_message'
    ];

    public function rsvps()
    {
        return $this->belongsTo(InvitationMain::class, 'invitation_main_id', 'id');
    }
}
