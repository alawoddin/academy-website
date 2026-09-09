@extends('admin.dashboard')
@section('admin')
    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Edit FAQ</h3>
    </div>
    <div class="app-body">
        <div class="row gx-4">
            <div class="col-xxl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">FAQ Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.faq') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $faq->id }}">
                            <div class="mb-3">
                                <label class="form-label">Question</label>
                                <input type="text" name="question" class="form-control" value="{{ $faq->question }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Answer</label>
                                <textarea name="answer" class="form-control" rows="4" required>{{ $faq->answer }}</textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save FAQ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
