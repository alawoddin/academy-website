@extends('admin.dashboard')
@section('admin')
    <div class="app-container">
        <div class="app-hero-header d-flex align-items-center">
            <h3 class="m-0">Course</h3>
            <div class="ms-auto d-lg-flex d-none flex-row">
                <a href="{{ route('add.course') }}" class="btn btn-primary ms-auto">
                    <i class="bi bi-plus-lg"></i> Add Course
                </a>
            </div>
        </div>
        <div class="app-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">All Course</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Videos</th>
                                            <th scope="col">Hours</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Author Name</th>
                                            <th scope="col">Author Role</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Tag Image</th>
                                            <th scope="col">Author Image</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($alldata as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ Str::limit($item->title, 40) }}</td>
                                            <td>{{ Str::limit($item->category_name, 40) }}</td>
                                            <td>{{ Str::limit($item->videos, 40) }}</td>
                                            <td>{{ Str::limit($item->hours, 40) }}</td>
                                            <td>{{ Str::limit($item->price, 40) }}</td>
                                            <td>{{ Str::limit($item->author_name, 40) }}</td>
                                            <td>{{ Str::limit($item->author_role, 40) }}</td>
                                            <td><img src="{{ \App\Support\Media::url($item->icon, 'frontend/assets/media/icons/ps.png') }}" style="width: 70px; height:40px; object-fit:cover"></td>
                                            <td><img src="{{ \App\Support\Media::url($item->tag_image, 'frontend/assets/media/courses/tag-1.png') }}" style="width: 70px; height:40px; object-fit:cover"></td>
                                            <td><img src="{{ \App\Support\Media::url($item->author_image, 'frontend/assets/media/a2.png') }}" style="width: 70px; height:40px; object-fit:cover"></td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" href="{{ route('edit.course', $item->id) }}"><i class="bi bi-pencil"></i></a>
                                                <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.course', $item->id) }}"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="20" class="text-center">No Course found</td>
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