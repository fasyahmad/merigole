<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhysicalGift extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invitation_main_id',
        'name',
        'phone',
        'address'
    ];

    // public function physicalGift()
    public function invitationPhysical()
    {
        return $this->belongsTo(InvitationMain::class, 'invitation_main_id', 'id');
    }
}
