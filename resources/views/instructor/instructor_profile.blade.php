@extends('instructor.dashboard')
@section('instructor')

<div class="app-hero-header d-flex align-items-center">
    <h3 class="m-0">My Profile</h3>
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
                    <h5 class="card-title">Update Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('instructor.profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $profileData->name) }}" required>
                                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $profileData->email) }}" required>
                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $profileData->phone) }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address', $profileData->address) }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Profile Image</label>
                                <input type="file" name="photo" id="image" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
                                @error('photo')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6 d-flex align-items-end">
                                <img id="showImage"
                                     src="{{ (!empty($profileData->photo)) ? asset('upload/instructor_images/'.$profileData->photo) : asset('backend/assets/images/user3.png') }}"
                                     class="rounded-circle"
                                     style="width: 80px; height:80px; object-fit: cover;"
                                     alt="Profile">
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

<script>
    document.getElementById('image')?.addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (!file) return;
        document.getElementById('showImage').src = URL.createObjectURL(file);
    });
</script>
@endsection
