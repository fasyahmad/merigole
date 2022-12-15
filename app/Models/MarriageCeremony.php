<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarriageCeremony extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invitation_main_id',
        'date',
        'hour_from',
        'hour_to',
        'place_name',
        'address'
    ];

    public function rsvps()
    {
        return $this->belongsTo(InvitationMain::class, 'invitation_main_id', 'id');
    }
}
