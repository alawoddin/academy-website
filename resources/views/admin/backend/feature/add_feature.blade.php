@extends('admin.dashboard')

@section('admin')
    ```
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="app-hero-header d-flex align-items-center">
        <h3 class="m-0">Add Feature</h3>
    </div>

    <div class="app-body">
        <div class="row gx-4">

            <div class="col-xxl-12 col-sm-12">

                <div class="card mb-4">

                    <div class="card-header">
                        <h5 class="card-title">Feature Settings</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('store.feature') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <!-- Feature Icon + Content -->
                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <label class="form-label">
                                        Feature Icon
                                    </label>

                                    <input type="text" name="featureicon" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">
                                        Feature Content
                                    </label>

                                    <input type="text" name="featurecontent" class="form-control">
                                </div>



                            </div>


                            <!-- Feature Info -->
                            <div class="row mb-3">

                                <div class="col-md-6">

                                    <label class="form-label">
                                        Feature Info
                                    </label>

                                    <input type="text" name="featureinfo" class="form-control">

                                </div>

                            </div>




                            <!-- Feature Image -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Feature Image
                                </label>

                                <input type="file" name="feturebg" id="image" class="form-control">

                            </div>


                            <!-- Image Preview -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Image Preview
                                </label>

                                <br>

                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                    class="rounded-circle img-thumbnail" style="width: 100px; height: 100px;"
                                    alt="Feature Image">

                            </div>


                            <!-- Save Button -->
                            <div class="d-flex justify-content-end">

                                <button type="submit" class="btn btn-primary">
                                    Save Feature
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
