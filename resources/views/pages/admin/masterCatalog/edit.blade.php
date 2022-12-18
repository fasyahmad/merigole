@extends('layouts.admin_master')

@section('content')
  <!-- Custom file input -->

  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> Edit</h4>

  {{-- Wedding Couple Detail --}}
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">User Details</h5>
      <div class="card-body">
        <form action="{{ route('dashboard.user.update', $user->id) }}" method="post" enctype="multipart/form-data">
          <!-- @method('PUT') -->
          {{ method_field('PUT') }}
          @csrf
          <div class="row gy-3">
            <div class="col-xl-6">                        
              <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label" for="name">Full Name</label>
                    <input value="{{ old('name') ?? $user->name }}" name="name" id="name" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input value="{{ old('username') ?? $user->username }}" name="username" id="username" type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="first_name">First Name</label>
                    <input value="{{ old('first_name') ?? $user->first_name }}" name="first_name" id="first_name" type="text" class="form-control" placeholder="John Doe">
                  </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card-body">
                    <div class="mb-3">
                      <label class="form-label" for="email">Email</label>
                      <input value="{{ old('email') ?? $user->email }}" name="email" id="email" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="rolels">Rolels</label>
                      <input value="{{ old('rolels') ?? $user->rolels }}" name="rolels" id="rolels" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="last_name">Last Name</label>
                      <input value="{{ old('last_name') ?? $user->last_name }}" name="last_name" id="last_name" type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- Wedding Couple Detail --}}
  
@endsection