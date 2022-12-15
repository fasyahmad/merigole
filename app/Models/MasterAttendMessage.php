<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterAttendMessage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message',
        'catalog_name',
        'is_active'
    ];
}
