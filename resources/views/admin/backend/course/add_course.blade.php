@extends('admin.dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Add Course</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-12 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Course Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.course') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-select">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Or Add New Category</label>
                                <input type="text" name="new_category" class="form-control" placeholder="Type a new category name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Videos</label>
                                <input type="text" name="videos" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Hours</label>
                                <input type="text" name="hours" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="author_name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Author Role</label>
                                <input type="text" name="author_role" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Icon</label>
                                <input type="file" name="icon" id="image_icon" class="form-control preview-image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Icon Preview</label><br>
                                <img id="show_icon" src="{{ url('upload/no_image.jpg') }}" class="rounded img-thumbnail" style="width: 100px; height: 100px; object-fit:cover" alt="Icon">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tag Image</label>
                                <input type="file" name="tag_image" id="image_tag_image" class="form-control preview-image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tag Image Preview</label><br>
                                <img id="show_tag_image" src="{{ url('upload/no_image.jpg') }}" class="rounded img-thumbnail" style="width: 100px; height: 100px; object-fit:cover" alt="Tag Image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Author Image</label>
                                <input type="file" name="author_image" id="image_author_image" class="form-control preview-image">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Author Image Preview</label><br>
                                <img id="show_author_image" src="{{ url('upload/no_image.jpg') }}" class="rounded img-thumbnail" style="width: 100px; height: 100px; object-fit:cover" alt="Author Image">
                            </div>

                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Course</button>
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