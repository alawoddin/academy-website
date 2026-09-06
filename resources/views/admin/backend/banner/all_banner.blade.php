@extends('admin.dashboard')
@section('admin')
    <div class="app-container">
        <div class="app-hero-header d-flex align-items-center">
            <h3 class="m-0">Banner</h3>
            <div class="ms-auto d-lg-flex d-none flex-row">
                <a href="{{ route('add.banner') }}" class="btn btn-primary ms-auto">
                    <i class="bi bi-plus-lg"></i> Add Banner
                </a>
            </div>
        </div>
        <div class="app-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">All Banner</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Subtitle</th>
                                            <th scope="col">Button Text</th>
                                            <th scope="col">Video Url</th>
                                            <th scope="col">Feature Title</th>
                                            <th scope="col">Feature Text</th>
                                            <th scope="col">Main Image</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($alldata as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ Str::limit($item->title, 40) }}</td>
                                            <td>{{ Str::limit($item->subtitle, 40) }}</td>
                                            <td>{{ Str::limit($item->button_text, 40) }}</td>
                                            <td>{{ Str::limit($item->video_url, 40) }}</td>
                                            <td>{{ Str::limit($item->feature_title, 40) }}</td>
                                            <td>{{ Str::limit($item->feature_text, 40) }}</td>
                                            <td>@if($item->main_image)<img src="{{ asset($item->main_image) }}" style="width: 70px; height:40px; object-fit:cover">@endif</td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" href="{{ route('edit.banner', $item->id) }}"><i class="bi bi-pencil"></i></a>
                                                <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.banner', $item->id) }}"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="20" class="text-center">No Banner found</td>
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