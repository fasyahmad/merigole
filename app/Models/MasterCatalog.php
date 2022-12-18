<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterCatalog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'master_catalog_id',
        'master_catalog_category',
        'master_catalog_name',
        'master_catalog_img'
    ];

}
