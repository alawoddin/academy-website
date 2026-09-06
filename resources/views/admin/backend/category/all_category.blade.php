@extends('admin.dashboard')
@section('admin')
    <div class="app-container">
        <div class="app-hero-header d-flex align-items-center">
            <h3 class="m-0">Category</h3>
            <div class="ms-auto d-lg-flex d-none flex-row">
                <a href="{{ route('add.category') }}" class="btn btn-primary ms-auto">
                    <i class="bi bi-plus-lg"></i> Add Category
                </a>
            </div>
        </div>
        <div class="app-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">All Category</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Rating</th>
                                            <th scope="col">Teachers</th>
                                            <th scope="col">Hours</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($alldata as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ Str::limit($item->title, 40) }}</td>
                                            <td>{{ Str::limit($item->description, 40) }}</td>
                                            <td>{{ Str::limit($item->rating, 40) }}</td>
                                            <td>{{ Str::limit($item->teachers, 40) }}</td>
                                            <td>{{ Str::limit($item->hours, 40) }}</td>
                                            <td>@if($item->image)<img src="{{ asset($item->image) }}" style="width: 70px; height:40px; object-fit:cover">@endif</td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" href="{{ route('edit.category', $item->id) }}"><i class="bi bi-pencil"></i></a>
                                                <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.category', $item->id) }}"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="20" class="text-center">No Category found</td>
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