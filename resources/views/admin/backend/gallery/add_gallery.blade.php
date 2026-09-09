@extends('admin.dashboard')
@section('admin')
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Add Gallery</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Gallery Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.gallery') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Caption</label>
                                <input type="text" name="caption" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" id="image_image" class="form-control preview-image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image Preview</label><br>
                                <img id="show_image" src="{{ url('upload/no_image.jpg') }}" class="rounded img-thumbnail" style="width: 100px; height: 100px; object-fit:cover" alt="Image">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Gallery</button>
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
