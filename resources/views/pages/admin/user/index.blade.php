@extends('layouts.admin_master')

@section('content')

<div class="mb-4">
  <a href="{{ route('dashboard.user.create') }}" target="_blank" class="btn btn-success btn-buy-now">Create Invitation</a>
</div>

<div class="card">
                <h5 class="card-header">Invitations</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped" id="users_table">
                    <thead>
                      <tr class="layout-demo-info">
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($users as $user)
                        <tr class="layout-demo-info">
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $loop->index + 1 }} </strong></td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->rolels }}</td>
                          <td><span class="badge bg-label-primary me-1">Active</span></td>
                          <td>
                                <a class="btn btn-primary" href="{{ route('dashboard.user.show', $user->id) }}">View</a>
                                <a class="btn btn-secondary" href="{{ route('dashboard.user.edit', $user->id) }}">Edit</a>
                                <form id="deleteTransaction" action="{{ route('dashboard.user.destroy', $user->id ) }}" method="post" class="d-inline">
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
@endsection