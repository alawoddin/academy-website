@extends('instructor.dashboard')
@section('instructor')

<div class="app-hero-header d-flex align-items-center">
    <h3 class="m-0">Change Password</h3>
</div>

<div class="app-body">
    @if (session('message'))
        <div class="alert alert-{{ session('alert-type') === 'error' ? 'danger' : 'success' }} mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="row gx-4">
        <div class="col-xl-8 col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Update Password</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('instructor.password.update') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label">Old Password</label>
                                <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" required>
                                @error('old_password')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">New Password</label>
                                <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" required>
                                @error('new_password')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="new_password_confirmation" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
