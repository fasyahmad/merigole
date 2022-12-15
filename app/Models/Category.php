<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'catalog_name',
        'catalog_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function invitationMains()
    {
        return $this->hasMany(InvitationMain::class, 'catalog_id', 'id');
    }
}
