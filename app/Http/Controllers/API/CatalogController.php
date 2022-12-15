<?php

namespace App\Http\Controllers\API;

use App\Models\Catalog;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class CatalogController extends Controller
{
    //
    public function All(Request $request)
    {
        $catalog = Catalog::all();

        return ResponseFormatter::success(
            $catalog,
            'Data berhasil di ambil'
        );


    }
}
