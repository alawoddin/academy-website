@extends('admin.dashboard')
@section('admin')
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Add Instructor</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-8 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Instructor Account</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create the login account only. The instructor will add their own photo, description, experience, and course outlines after they login.</p>
                        <form action="{{ route('store.instructor') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                    @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('all.instructor') }}" class="btn btn-outline-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Save Instructor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
