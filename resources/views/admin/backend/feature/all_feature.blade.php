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
                <div class="d-flex flex-row gap-1 p-1 border border-primary rounded-5 grd-primary-light">
                    <a href="#" class="icon-box icon-btn rounded-5 grd-primary-light border-0" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" aria-label="Share" data-bs-original-title="Share">
                        <i class="bi bi-share"></i>
                    </a>
                    <a href="#" class="icon-box icon-btn rounded-5 grd-primary-light border-0"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Print"
                        data-bs-original-title="Print">
                        <i class="bi bi-printer"></i>
                    </a>
                    <a href="#" class="icon-box icon-btn rounded-5 grd-primary-light border-0" id="downloadDataToast"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Download"
                        data-bs-original-title="Download">
                        <i class="bi bi-download"></i>
                    </a>
                </div>
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
                            <div class="table-outer">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>#ORD-2458</td>
                                            <td>Emily Wilson</td>
                                            <td>24/08/2025</td>
                                            <td>$124.00</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary"><i
                                                        class="bi bi-eye"></i></button>
                                                <button type="button" class="btn btn-sm btn-warning"><i
                                                        class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-sm btn-danger"><i
                                                        class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                     
                                   
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
