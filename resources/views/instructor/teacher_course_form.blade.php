@extends('instructor.dashboard')
@section('instructor')

<div class="app-hero-header d-flex align-items-center">
    <h3 class="m-0">{{ $course ? 'Edit Course Outline' : 'Add Course Outline' }}</h3>
</div>

<div class="app-body">
    <div class="row gx-4">
        <div class="col-xl-8 col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Course Outline</h5>
                </div>
                <div class="card-body">
                    <form action="{{ $course ? route('instructor.course.update') : route('instructor.course.store') }}" method="POST">
                        @csrf
                        @if ($course)
                            <input type="hidden" name="id" value="{{ $course->id }}">
                        @endif
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Course Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $course->title ?? '') }}" placeholder="Network+" required>
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Duration</label>
                                <input type="text" name="duration" class="form-control" value="{{ old('duration', $course->duration ?? '') }}" placeholder="10H in 2 months">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Outline Topics</label>
                                <div id="outline-list">
                                    @php
                                        $outlineItems = old('outline', $course?->outlines->pluck('title')->all() ?: ['', '']);
                                    @endphp
                                    @foreach ($outlineItems as $item)
                                        <div class="input-group mb-2 outline-row">
                                            <span class="input-group-text outline-number"></span>
                                            <input type="text" name="outline[]" class="form-control" value="{{ $item }}" placeholder="Intro to the network">
                                            <button type="button" class="btn btn-outline-danger remove-outline">Remove</button>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn btn-outline-primary" id="add-outline">Add Topic</button>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">{{ $course ? 'Update Course' : 'Save Course' }}</button>
                                <a href="{{ route('instructor.courses') }}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function refreshOutlineNumbers() {
        document.querySelectorAll('#outline-list .outline-row').forEach(function (row, index) {
            row.querySelector('.outline-number').textContent = index + 1;
        });
    }

    document.getElementById('add-outline')?.addEventListener('click', function () {
        const list = document.getElementById('outline-list');
        const row = document.createElement('div');
        row.className = 'input-group mb-2 outline-row';
        row.innerHTML = '<span class="input-group-text outline-number"></span><input type="text" name="outline[]" class="form-control" placeholder="How networks work"><button type="button" class="btn btn-outline-danger remove-outline">Remove</button>';
        list.appendChild(row);
        refreshOutlineNumbers();
    });

    document.getElementById('outline-list')?.addEventListener('click', function (e) {
        if (!e.target.classList.contains('remove-outline')) return;
        const rows = document.querySelectorAll('#outline-list .outline-row');
        if (rows.length === 1) {
            rows[0].querySelector('input').value = '';
            return;
        }
        e.target.closest('.outline-row').remove();
        refreshOutlineNumbers();
    });

    refreshOutlineNumbers();
</script>
@endsection
