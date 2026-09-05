@extends('admin.dashboard')
@section('admin')
    <div class="app-container">

        <!-- App hero header starts -->
        <div class="app-hero-header d-flex align-items-center">

            <!-- Breadcrumb starts -->
            <h3 class="m-0">Tables</h3>
            <!-- Breadcrumb ends -->

            <!-- Sales stats starts -->
            <div class="ms-auto d-lg-flex d-none flex-row">
               <!-- Add Button --> <a href="{{ route('add.feature') }}" class="btn btn-primary ms-auto"> <i class="bi bi-plus-lg"></i> Add Feature </a>
            </div>
            <!-- Sales stats ends -->

        </div>
        <!-- App Hero header ends -->

        <!-- App body starts -->
        <div class="app-body">

            <!-- Row start -->
            <div class="row">
                <div class="col-md-12">

                    <!-- Basic table -->




                    <!-- Bordered table -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Bordered Table</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Feature Icon</th>
                                            <th scope="col">Feature Content</th>
                                            <th scope="col">Feature Info</th>
                                            <th scope="col">Feature Image</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $item )
                                              <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{$item->featureicon}}</td>
                                            <td>{{$item->featurecontent}}</td>
                                            <td>{{$item->featureinfo}}</td>
                                            <td> <img src="{{ asset($item->feturebg) }}" style="width: 70px; height:40px">
                                            </td>
                                            <td>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-warning"><i
                                                        class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-sm btn-danger"><i
                                                        class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                      
                                     
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>








                </div>
            </div>
            <!-- Row end -->

            <!-- Toast message for download data example starts -->
            <div class="toast-container position-fixed bottom-0 end-0 p-3 mt-5">
                <div id="downloadData" class="toast text-bg-primary border-0" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Downloading</strong>
                        <small>Just now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Data successfully downloading.
                    </div>
                </div>
            </div>
            <!-- Toast message for download data example ends -->

        </div>
        <!-- App body ends -->



    </div>
@endsection
