@extends('admin.dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Edit Blog</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-12 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Blog Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.blog') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $blog->id }}">
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ $blog->description }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date</label>
                                <input type="text" name="date" class="form-control" value="{{ $blog->date }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="author_name" class="form-control" value="{{ $blog->author_name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" id="image_image" class="form-control preview-image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image Preview</label><br>
                                <img id="show_image" src="{{ $blog->image ? asset($blog->image) : url('upload/no_image.jpg') }}" class="rounded img-thumbnail" style="width: 100px; height: 100px; object-fit:cover" alt="Image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Author Image</label>
                                <input type="file" name="author_image" id="image_author_image" class="form-control preview-image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Author Image Preview</label><br>
                                <img id="show_author_image" src="{{ $blog->author_image ? asset($blog->author_image) : url('upload/no_image.jpg') }}" class="rounded img-thumbnail" style="width: 100px; height: 100px; object-fit:cover" alt="Author Image">
                            </div>

                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Blog</button>
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