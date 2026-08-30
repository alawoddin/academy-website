@extends('admin.dashboard')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>




@php
    $adminAvatar = (!empty($profileData->photo) && file_exists(public_path('upload/admin_images/'.$profileData->photo)))
        ? asset('upload/admin_images/'.$profileData->photo)
        : asset('backend/assets/images/user3.png');
@endphp

<div class="app-hero-header d-flex align-items-center">
    <h3 class="m-0">User Profile</h3>
</div>

<div class="app-body">
    <div class="row gx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row align-items-center flex-wrap">
                        <div class="position-relative me-md-4 mb-3 mb-md-0">
                            <img  src="{{ $adminAvatar }}" class="rounded-circle img-7x" alt="Profile Image" style="object-fit: cover;">
                            <button type="button" class="btn btn-icon btn-primary position-absolute bottom-0 end-0 rounded-circle" id="pickPhotoBtn">
                                <i class="bi bi-camera-fill"></i>
                            </button>
                        </div>
                        <div class="text-center text-md-start flex-grow-1">
                            <h3 class="mb-1 fw-bold">{{ $profileData->name }}</h3>
                            <p class="text-muted mb-2 fs-6">{{ $profileData->email }}</p>
                            <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-1 mb-3">
                                <span class="badge bg-primary rounded-pill px-2">Administrator</span>
                                <span class="badge bg-success rounded-pill px-2">Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-sm-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Basic Information</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <span class="small text-muted">Full Name</span>
                        <p class="mb-0 fw-semibold">{{ $profileData->name }}</p>
                    </div>
                    <div class="mb-3">
                        <span class="small text-muted">Email</span>
                        <p class="mb-0 fw-semibold">{{ $profileData->email }}</p>
                    </div>
                    <div class="mb-3">
                        <span class="small text-muted">Phone</span>
                        <p class="mb-0 fw-semibold">{{ $profileData->phone ?: '—' }}</p>
                    </div>
                    <div class="mb-0">
                        <span class="small text-muted">Address</span>
                        <p class="mb-0 fw-semibold">{{ $profileData->address ?: '—' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-8 col-sm-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Account Settings</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
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
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $profileData->phone) }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address', $profileData->address) }}">
                            </div>
                        </div>
                        

                        <div class="mb-3">
                            <label class="form-label">Profile Image</label>
                            <input type="file" name="photo" id="image" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
                            @error('photo')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                          <div class="mb-3">
                              <label for="validationDefault02" class="form-label"> </label>
                                    <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                        class="rounded-circle  img-thumbnail float-start" style="width: 100px; height: 100px;" alt="image profile">
                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>



@endsection
