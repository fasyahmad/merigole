<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DigitalGift extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invitation_main_id',
        'account_name',
        'account_no',
        'bank_logo',
        'barcode'
    ];

    public function invitationDigital()
    {
        return $this->belongsTo(InvitationMain::class, 'invitation_main_id', 'id');
    }
}
