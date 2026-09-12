@extends('instructor.dashboard')
@section('instructor')

<div class="app-hero-header d-flex align-items-center">
    <h3 class="m-0">Teacher Page</h3>
</div>

<div class="app-body">
    <div class="row gx-4">
        <div class="col-xl-8 col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Public Teacher Information</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Add your own photo, description, and experience. This is shown on the frontend teacher detail page.</p>
                    <form action="{{ route('instructor.teacher.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $team->name) }}" required>
                                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Subject / Title</label>
                                <input type="text" name="subject" class="form-control" value="{{ old('subject', $team->subject) }}" placeholder="IT Teacher">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Teaching Hours</label>
                                <input type="text" name="hours" class="form-control" value="{{ old('hours', $team->hours) }}" placeholder="60+">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="Write about yourself">{{ old('description', $team->description) }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Experience</label>
                                <textarea name="experience" class="form-control" rows="4" placeholder="Example: 5 years teaching Network and IT courses">{{ old('experience', $team->experience) }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Teacher Image</label>
                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6 d-flex align-items-end">
                                <img id="showImage"
                                     src="{{ \App\Support\Media::url($team->image, 'backend/assets/images/user3.png') }}"
                                     class="rounded-circle"
                                     style="width: 80px; height:80px; object-fit: cover;"
                                     alt="Teacher">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save Teacher Page</button>
                                @if ($team->id)
                                    <a href="{{ route('team.detail', $team->id) }}" class="btn btn-outline-primary" target="_blank">View Frontend Page</a>
                                @endif
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
