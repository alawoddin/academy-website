@extends('admin.dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Edit Banner</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-12 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Banner Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.banner') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $banner->id }}">
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $banner->title }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Subtitle</label>
                                <input type="text" name="subtitle" class="form-control" value="{{ $banner->subtitle }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Button Text</label>
                                <input type="text" name="button_text" class="form-control" value="{{ $banner->button_text }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Video Url</label>
                                <input type="text" name="video_url" class="form-control" value="{{ $banner->video_url }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Feature Title</label>
                                <input type="text" name="feature_title" class="form-control" value="{{ $banner->feature_title }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Feature Text</label>
                                <input type="text" name="feature_text" class="form-control" value="{{ $banner->feature_text }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Main Image</label>
                                <input type="file" name="main_image" id="image_main_image" class="form-control preview-image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Main Image Preview</label><br>
                                <img id="show_main_image" src="{{ $banner->main_image ? asset($banner->main_image) : url('upload/no_image.jpg') }}" class="rounded img-thumbnail" style="width: 100px; height: 100px; object-fit:cover" alt="Main Image">
                            </div>

                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Banner</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.preview-image').forEach(function (input) {
            input.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (!file) return;
                const target = document.getElementById('show_' + input.name);
                if (target) target.src = URL.createObjectURL(file);
            });
        });
    </script>
@endsection