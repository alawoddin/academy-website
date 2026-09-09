@extends('admin.dashboard')
@section('admin')
    <div class="app-container">
        <div class="app-hero-header d-flex align-items-center">
            <h3 class="m-0">Gallery</h3>
            <div class="ms-auto d-lg-flex d-none flex-row">
                <a href="{{ route('add.gallery') }}" class="btn btn-primary ms-auto">
                    <i class="bi bi-plus-lg"></i> Add Gallery
                </a>
            </div>
        </div>
        <div class="app-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">All Gallery</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Caption</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($alldata as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->caption }}</td>
                                            <td><img src="{{ \App\Support\Media::url($item->image, 'frontend/assets/media/gallery/g-1.png') }}" style="width: 70px; height:40px; object-fit:cover"></td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" href="{{ route('edit.gallery', $item->id) }}"><i class="bi bi-pencil"></i></a>
                                                <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.gallery', $item->id) }}"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No Gallery found</td>
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
