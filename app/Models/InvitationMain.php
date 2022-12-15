<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvitationMain extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'catalog_id',
        'nickname_groom',
        'nickname_bride',
        'marriage_date',
        'background_color',
        'quote',
        'quote_refererence',
        'full_name_groom',
        'pics_groom',
        'ig_groom',
        'full_name_bride',
        'pics_bride',
        'ig_bride',
        'groom_father',
        'groom_mother',
        'bride_father',
        'bride_mother'
    ];

    public function guestBooks()
    {
        return $this->hasMany(GuestBook::class, 'invitation_main_id', 'id');
    }

    public function digitalGifts()
    {
        return $this->hasMany(DigitalGift::class, 'invitation_main_id', 'id');
    }

    public function physicalGifts()
    {
        return $this->hasMany(PhysicalGift::class, 'invitation_main_id', 'id');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'invitation_main_id', 'id');
    }

    public function rsvps()
    {
        return $this->hasMany(Rsvp::class, 'invitation_main_id', 'id');
    }

    public function marriageCeremonys()
    {
        return $this->hasOne(MarriageCeremony::class, 'invitation_main_id', 'id');
    }

    public function weddingReceptions()
    {
        return $this->hasOne(WeddingReception::class, 'invitation_main_id', 'id');
    }
}
