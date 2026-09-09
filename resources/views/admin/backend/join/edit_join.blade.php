@extends('admin.dashboard')
@section('admin')
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Edit Join Page</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Become Teacher Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.join') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $join->id }}">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" value="{{ $join->subtitle }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $join->title }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3">{{ $join->description }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Rules Title</label>
                                    <input type="text" name="rules_title" class="form-control" value="{{ $join->rules_title }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rules Text</label>
                                    <textarea name="rules_text" class="form-control" rows="3">{{ $join->rules_text }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rules (one per line)</label>
                                    <textarea name="rules" class="form-control" rows="4">{{ $join->rules }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Qualification Title</label>
                                    <input type="text" name="qualification_title" class="form-control" value="{{ $join->qualification_title }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Qualification Text</label>
                                    <textarea name="qualification_text" class="form-control" rows="4">{{ $join->qualification_text }}</textarea>
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
