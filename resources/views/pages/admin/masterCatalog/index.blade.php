@extends('layouts.admin_master')

@section('content')

  <div class="mb-4">
    <a href="{{ route('dashboard.masterCatalog.create') }}" target="_blank" class="btn btn-success btn-buy-now">Add Catalog</a>
  </div>

  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Catalog /</span> Akuamarin</h4>

  <div class="card">
    <div class="table-responsive">
      <div class="row row-cols-md-3 g-4 mb-5">
        @foreach ($items->where('master_catalog_category', '=', 'Akuamarin') as $item)
        <div class="col-lg-3">
            <a href="">
              <button type="button" class="btn btn-link" data-mdb-ripple-color="dark"> <img width="100%" src="{{ Storage::url('masterCatalogs/'. $item->master_catalog_id . '/' . $item->master_catalog_img) }}" alt="" class="" srcset=""></button>
            </a>
          </div>
          @endforeach
      </div>
    </div>
  </div>

  <h4 class="fw-bold py-3 mb-4 mt-4"><span class="text-muted fw-light">Catalog /</span> Tashmarine</h4>

  <div class="card">
    <div class="table-responsive">
      <div class="row row-cols-md-3 g-4 mb-5">
        @foreach ($items->where('master_catalog_category', '=', 'Tashmarine') as $item)
        <div class="col-lg-3">
            <a href="">
              <button type="button" class="btn btn-link" data-mdb-ripple-color="dark"> <img width="100%" src="{{ Storage::url('masterCatalogs/'. $item->master_catalog_id . '/' . $item->master_catalog_img) }}" alt="" class="" srcset=""></button>
            </a>
          </div>
          @endforeach
      </div>
    </div>
  </div>
@endsection