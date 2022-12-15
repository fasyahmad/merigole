@extends('layouts.admin_master')

@section('content')

<div class="mb-4">
  <a href="{{ route('dashboard.invitation.create') }}" target="_blank" class="btn btn-success btn-buy-now">Create Invitation</a>
</div>

<div class="card">
                <h5 class="card-header">Invitations</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped" id="invitation_table">
                    <thead>
                      <tr class="layout-demo-info">
                        <th>No</th>
                        <th>Bride Name</th>
                        <th>Groom Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($items as $item)
                        <tr class="layout-demo-info">
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $loop->index + 1 }} </strong></td>
                          <td>{{ $item->full_name_groom }}</td>
                          <td>{{ $item->full_name_bride }}</td>
                          <td><span class="badge bg-label-primary me-1">{{ \Carbon\Carbon::parse($item->marriage_date)->format('d F Y')}}</span></td>
                          <td><span class="badge bg-label-primary me-1">Active</span></td>
                          <td>
                                <a class="btn btn-primary" href="{{ route('dashboard.invitation.show', $item->id) }}">View</a>
                                <a class="btn btn-secondary" href="{{ route('dashboard.invitation.edit', $item->id) }}">Edit</a>
                                <form id="deleteTransaction" action="{{ route('dashboard.invitation.destroy', $item->id ) }}" method="post" class="d-inline">
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