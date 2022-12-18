@extends('layouts.admin_master')

@section('content')
  <!-- Custom file input -->

  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Invitation /</span> Edit</h4>

  {{-- Wedding Couple Detail --}}
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Wedding Couple Detail</h5>
      <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
          There's something wrong!
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ route('dashboard.invitation.update', $item->id) }}" method="post" enctype="multipart/form-data">
          <!-- @method('PUT') -->
          {{ method_field('PUT') }}
          @csrf
          <div class="row gy-3">
            <div class="col-xl-6">                        
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label" for="quote">Marriage Date</label>
                  <input value="{{ old('marriage_date') ??  Carbon\Carbon::parse($item->marriage_date)->isoFormat('YYYY-MM-DD'); }}" name="marriage_date" id="marriage_date" class="form-control" type="date" >
                </div>
                  <div class="mb-3">
                    <label class="form-label" for="quote">Quote</label>
                    <input value="{{ old('quote') ?? $item->quote }}" name="quote" id="quote" type="text" class="form-control" placeholder="John Doe">
                    <input value="{{ old('catalog_id') ?? $item->catalog_id }}" name="catalog_id" id="catalog_id" type="text" style="display: none" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="nickname_groom">Nickname Groom</label>
                    <input value="{{ old('nickname_groom') ?? $item->nickname_groom }}" name="nickname_groom" id="nickname_groom" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="full_name_groom">Full Name Groom</label>
                    <input value="{{ old('full_name_groom') ?? $item->full_name_groom }}" name="full_name_groom" id="full_name_groom" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label for="pics_groom" class="form-label">Pic's Groom</label>
                    <input value="{{ old('pics_groom') ?? $item->pics_groom }}" name="pics_groom" id="pics_groom" class="form-control" type="file">
                  </div>
                  <img src="{{ Storage::url('invitationMain/'. $item->id . '/' . $item->pics_groom) }}" alt="" style="width:150px" class="img-thumbnail" srcset="">
                  <div class="mb-3">
                    <label class="form-label" for="ig_groom">IG's Groom</label>
                    <input value="{{ old('ig_groom') ?? $item->ig_groom }}" name="ig_groom" id="ig_groom" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="groom_father">Groom's Father</label>
                    <input value="{{ old('groom_father') ?? $item->groom_father }}" name="groom_father" id="groom_father" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="groom_mother">Groom's Mother</label>
                    <input value="{{ old('groom_mother') ?? $item->groom_mother }}" name="groom_mother" id="groom_mother" type="text" class="form-control" placeholder="John Doe">
                  </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label" for="background_color	">Background Color</label>
                    <input style="height: 2.2rem" value="{{ old('background_color') ?? $item->background_color	}}" name="background_color" id="background_color" class="form-control" type="color">
                  </div>
                    <div class="mb-3">
                      <label class="form-label" for="quote_reference">Quote Reference</label>
                      <input value="{{ old('quote_reference') ?? $item->quote_reference }}" name="quote_reference" id="quote_reference" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="nickname_bride">Nickname Bride</label>
                      <input value="{{ old('nickname_bride') ?? $item->nickname_bride }}" name="nickname_bride" id="nickname_bride" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="full_name_bride">Full Name Bride</label>
                      <input value="{{ old('full_name_bride') ?? $item->full_name_bride }}" name="full_name_bride" id="nickname_bride" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                      <label for="pics_bride" class="form-label">Pic's Bride</label>
                      <input value="{{ old('pics_bride') ?? $item->pics_bride }}" name="pics_bride" id="pics_bride" class="form-control" type="file">
                    </div>
                  <img name="" id="" src="{{ Storage::url('invitationMain/'. $item->id . '/' . $item->pics_bride) }}" alt="" style="width:150px" class="img-thumbnail" srcset="">
                  <div class="mb-3">
                      <label class="form-label" for="ig_bride">IG's Bride</label>
                      <input value="{{ old('ig_bride') ?? $item->ig_bride }}" name="ig_bride" id="ig_bride" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="bride_father">Bride's Father</label>
                      <input value="{{ old('bride_father') ?? $item->bride_father }}" name="bride_father" id="bride_father" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="bride_mother">Bride's Mothe</label>
                      <input value="{{ old('bride_mother') ?? $item->bride_mother }}" name="bride_mother" id="bride_mother" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- Wedding Couple Detail --}}


  <!-- Wedding Ceremonies & Receptions Place -->
 
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <!-- Collapse -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <h5 class="card-header">Wedding Ceremonies & Receptions Place</h5>
            <div class="card-body">
              <p class="demo-inline-spacing">
                <button
                  class="btn btn-primary me-1"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseWeddingPlace"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                >
                  Hide / Show 
                </button>
              </p>
              <div class="collapse" id="collapseWeddingPlace">
                <div class="row">
                  @if($item->marriageCeremonys != null)  
                  <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Marriage Ceremonies</h5>
                        <small class="text-muted float-end">Default label</small>
                      </div>
                      <div class="card-body">
                        <form action="{{ route('dashboard.ceremony.update', $item->id) }}" method="post" enctype="multipart/form-data">
                          {{ method_field('PUT') }}
                          @csrf
                          <div class="mb-3">
                            <label class="form-label" for="date">Date</label>
                            <input value="{{ old('date') ?? Carbon\Carbon::parse($item->marriageCeremonys->date)->isoFormat('YYYY-MM-DD'); }}" name="date" id="date" type="date" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="hour_from">Hour From</label>
                            <input value="{{ old('hour_from') ?? $item->marriageCeremonys->hour_from }}" name="hour_from" id="hour_from" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="hour_to">Hour To</label>
                            <input value="{{ old('hour_to') ?? $item->marriageCeremonys->hour_to }}" name="hour_to" id="hour_to" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="place_name">Place Name</label>
                            <input value="{{ old('place_name') ?? $item->marriageCeremonys->place_name }}" name="place_name" id="place_name" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input value="{{ old('address') ?? $item->marriageCeremonys->address }}" name="address" id="place_name" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endif
                  @if($item->weddingReceptions != null)  
                  <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Wedding Receptions</h5>
                        <small class="text-muted float-end">Merged input group</small>
                      </div>
                      <div class="card-body">
                        <form action="{{ route('dashboard.reception.update', $item->id) }}" method="post" enctype="multipart/form-data">
                          {{ method_field('PUT') }}
                          @csrf
                          <div class="mb-3">
                            <label class="form-label" for="date">Date</label>
                            <input value="{{ old('date') ?? Carbon\Carbon::parse($item->weddingReceptions->date)->isoFormat('YYYY-MM-DD'); }}" name="date" id="date" type="date" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="hour_from">Hour From</label>
                            <input value="{{ old('hour_from') ?? $item->weddingReceptions->hour_from }}" name="hour_from" id="hour_from" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="hour_to">Hour To</label>
                            <input value="{{ old('hour_to') ?? $item->weddingReceptions->hour_to }}" name="hour_to" id="hour_to" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="place_name">Place Name</label>
                            <input value="{{ old('place_name') ?? $item->weddingReceptions->place_name }}" name="place_name" id="place_name" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input value="{{ old('address') ?? $item->weddingReceptions->address }}" name="address" id="address" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
  <!-- Wedding Ceremonies & Receptions Place -->


  <!-- Digital Gifts & Physical Gifts -->
  
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <!-- Collapse -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <h5 class="card-header">Digital Gifts & Physical Gifts</h5>
            <div class="card-body">
              <p class="demo-inline-spacing">
                <button
                  class="btn btn-primary me-1"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseGifts"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                >
                  Hide / Show 
                </button>
              </p>
              <div class="collapse" id="collapseGifts">
                <div class="row">
                  <div class="col-xl">
                  @if($digitalGifts != null) 
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Digital Gifts</h5>
                        <small class="text-muted float-end">Default label</small>
                      </div>
                      <div class="card-body">
                        <form action="{{ route('dashboard.digitalGift.update', $item->id) }}" method="post" enctype="multipart/form-data">
                          <!-- @method('PUT') -->
                          {{ method_field('PUT') }}
                          @csrf
                          <div class="mb-3">
                            <label class="form-label" for="account_name">Account Name</label>
                            <input value="" name="account_name" id="account_name" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="account_no">Account No</label>
                            <input value="" name="account_no" id="account_no" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="bank_logo">Bank Logo</label>
                            <input value="" name="bank_logo" id="bank_logo" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="barcode">Barcode</label>
                            <input value="" name="barcode" id="barcode" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></input>
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                        <div class="table-responsive text-nowrap">
                          <table class="table table-striped">
                            <thead>
                              <tr class="layout-demo-info">
                                <th>No</th>
                                <th>Account Name</th>
                                <th>Account No</th>
                                <th>Bank Logo</th>
                                <th>Barcode</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              @foreach ($digitalGifts as $item)
                                <tr class="layout-demo-info">
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $loop->index + 1 }} </strong></td>
                                  <td>{{ $item->account_name }}</td>
                                  <td>{{ $item->account_no }}</td>
                                  <td>{{ $item->bank_logo }}</td>
                                  <td>{{ $item->barcode }}</td>
                                  <td>
                                        <a class="btn btn-primary" href="{{ route('dashboard.digitalGift.show', $item->id) }}">View</a>
                                        <a class="btn btn-secondary" href="{{ route('dashboard.digitalGift.edit', $item->id) }}">Edit</a>
                                        <form id="deleteTransaction" action="{{ route('dashboard.digitalGift.destroy', $item->id ) }}" method="post" class="d-inline">
                                          <!-- @method('delete') -->
                                          @method('delete')
                                          @csrf 
                                          <button type="button" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  @endif
                    <hr>
                  @if($physicalGifts != null) 
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Physical Gifts</h5>
                        <small class="text-muted float-end">Default label</small>
                      </div>
                      <div class="card-body">
                        <form action="{{ route('dashboard.physicalGift.update', $item->id) }}" method="post" enctype="multipart/form-data">
                          <!-- @method('PUT') -->
                          {{ method_field('PUT') }}
                          @csrf
                          <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input value="" name="name" id="name" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="phone">Phone</label>
                            <input value="" name="phone" id="phone" type="text" class="form-control" placeholder="John Doe">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <textarea value="" name="address" id="address" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                        <div class="table-responsive text-nowrap">
                          <table class="table table-striped">
                            <thead>
                              <tr class="layout-demo-info">
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              @foreach ($physicalGifts as $item)
                                <tr class="layout-demo-info">
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $loop->index + 1 }} </strong></td>
                                  <td>{{ $item->name }}</td>
                                  <td>{{ $item->phone }}</td>
                                  <td>{{ $item->address }}</td>
                                  <td>
                                        <a class="btn btn-primary" href="{{ route('dashboard.physicalGift.show', $item->id) }}">View</a>
                                        <a class="btn btn-secondary" href="{{ route('dashboard.physicalGift.edit', $item->id) }}">Edit</a>
                                        <form id="deleteTransaction" action="{{ route('dashboard.physicalGift.destroy', $item->id ) }}" method="post" class="d-inline">
                                          <!-- @method('delete') -->
                                          @method('delete')
                                          @csrf 
                                          <button type="button" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    @endif
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
  <!-- Digital Gifts & Physical Gifts -->
  
@endsection