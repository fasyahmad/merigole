<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MasterCatalog;
use Illuminate\Http\Request;

class MasterCatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $catalogs = MasterCatalog::all();
        
        return view('pages.admin.masterCatalog.index',[
            'items' => $catalogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.masterCatalog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        if($request->hasFile('master_catalog_img')){

            $destination_path = 'public/masterCatalogs/' . $request->master_catalog_id;
            $image = $request->file('master_catalog_img');
            $image_name = $image->hashName();
            $path = $request->file('master_catalog_img')->storeAs($destination_path, $image_name);

            $data['master_catalog_img'] = $image_name;
        }

        MasterCatalog::create($data);

        $catalogs = MasterCatalog::all();

        return view('pages.admin.masterCatalog.index',[
            'items' => $catalogs
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterCatalog  $masterCatalog
     * @return \Illuminate\Http\Response
     */
    public function show(MasterCatalog $masterCatalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterCatalog  $masterCatalog
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterCatalog $masterCatalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterCatalog  $masterCatalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterCatalog $masterCatalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterCatalog  $masterCatalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterCatalog $masterCatalog)
    {
        //
    }
}
