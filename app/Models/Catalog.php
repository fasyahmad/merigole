<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='catalogs';

    protected $fillable = [
        'user_id',
        'catalog_name',
        'catalog_id'
    ];

    public function invitationMains()
    {
        return $this->hasMany(InvitationMain::class, 'catalog_id', 'id');
    }
}
