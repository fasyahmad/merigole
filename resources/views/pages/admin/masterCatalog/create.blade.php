@extends('layouts.admin_master')

@section('content')
  <!-- Custom file input -->

  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Invitation /</span> Create</h4>

  {{-- Wedding Couple Detail --}}
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Wedding Couple Detail</h5>
      <div class="card-body">
        <form action="{{ route('dashboard.masterCatalog.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row gy-3">
            <div class="col">                        
              <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label" for="master_catalog_id">Catalog Id</label>
                    <input value="{{ old('master_catalog_id') }}" name="master_catalog_id" id="master_catalog_id" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="master_catalog_name">Catalog Name</label>
                    <input value="{{ old('master_catalog_name') }}" name="master_catalog_name" id="master_catalog_name" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="master_catalog_category">Catalog Category</label>
                    <input value="{{ old('master_catalog_category') }}" name="master_catalog_category" id="master_catalog_category" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label for="master_catalog_img" class="form-label">Catalog Image</label>
                    <input value="{{ old('master_catalog_img') }}" name="master_catalog_img" id="master_catalog_img" class="form-control" type="file">
                  </div>
                  <button type="submit" class="btn btn-primary form-control " >Update</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- Wedding Couple Detail --}}
  
@endsection