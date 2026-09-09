@extends('admin.dashboard')
@section('admin')
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Add Join Page</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Become Teacher Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.join') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" placeholder="Apply Info">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Rules Title</label>
                                    <input type="text" name="rules_title" class="form-control" value="Rules & Regulations">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rules Text</label>
                                    <textarea name="rules_text" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rules (one per line)</label>
                                    <textarea name="rules" class="form-control" rows="4" placeholder="Rule 1&#10;Rule 2"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Qualification Title</label>
                                    <input type="text" name="qualification_title" class="form-control" value="Qualification Requirement">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Qualification Text</label>
                                    <textarea name="qualification_text" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Join Page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
