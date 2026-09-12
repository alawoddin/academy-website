@extends('instructor.dashboard')
@section('instructor')

<div class="app-hero-header d-flex align-items-center">
    <h3 class="m-0">My Courses</h3>
    <a href="{{ route('instructor.course.add') }}" class="btn btn-primary ms-auto">Add Course Outline</a>
</div>

<div class="app-body">
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title">Course Outlines</h5>
        </div>
        <div class="card-body">
            <p class="text-muted">These outlines appear on your public teacher detail page.</p>
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Course</th>
                            <th>Duration</th>
                            <th>Outline</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->duration }}</td>
                            <td>
                                @forelse ($item->outlines as $outline)
                                    {{ $outline->sort_order }}. {{ $outline->title }}@if (! $loop->last)<br>@endif
                                @empty
                                    —
                                @endforelse
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('instructor.course.edit', $item->id) }}">Edit</a>
                                <a class="btn btn-sm btn-danger" href="{{ route('instructor.course.delete', $item->id) }}">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No course outlines yet. Add your first course, for example Network+ 10H in 2 months.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
