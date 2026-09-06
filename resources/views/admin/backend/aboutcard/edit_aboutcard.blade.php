@extends('admin.dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Edit About Card</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-12 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">About Card Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.aboutcard') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $aboutcard->id }}">
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $aboutcard->title }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Text</label>
                                <textarea name="text" class="form-control" rows="3">{{ $aboutcard->text }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Icon</label>
                                <input type="file" name="icon" id="image_icon" class="form-control preview-image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Icon Preview</label><br>
                                <img id="show_icon" src="{{ $aboutcard->icon ? asset($aboutcard->icon) : url('upload/no_image.jpg') }}" class="rounded img-thumbnail" style="width: 100px; height: 100px; object-fit:cover" alt="Icon">
                            </div>

                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save About Card</button>
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