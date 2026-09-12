@extends('admin.dashboard')
@section('admin')
    <div class="app-container">
        <div class="app-hero-header d-flex align-items-center">
            <h3 class="m-0">Instructor Requests</h3>
        </div>
        <div class="app-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">New Registration Messages</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Registered</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pendingInstructors as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->created_at?->format('d M Y h:i A') }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="{{ route('accept.instructor', $item->id) }}">Accept</a>
                                                <a class="btn btn-sm btn-danger" href="{{ route('reject.instructor', $item->id) }}">Reject</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No pending instructor registrations</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">All Instructors</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($allInstructors as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                @if ($item->isPending())
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @elseif ($item->isRejected())
                                                    <span class="badge bg-danger">Rejected</span>
                                                @else
                                                    <span class="badge bg-success">Accepted</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at?->format('d M Y') }}</td>
                                            <td>
                                                @if (! $item->isApproved())
                                                    <a class="btn btn-sm btn-success" href="{{ route('accept.instructor', $item->id) }}">Accept</a>
                                                @endif
                                                @if (! $item->isRejected())
                                                    <a class="btn btn-sm btn-danger" href="{{ route('reject.instructor', $item->id) }}">Reject</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No instructors found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
