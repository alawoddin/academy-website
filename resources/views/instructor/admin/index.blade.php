@extends('admin.dashboard')
@section('admin') 

<div class="app-hero-header d-flex align-items-center">

            <!-- Breadcrumb starts -->
            <h3 class="m-0">Analytics</h3>
            <!-- Breadcrumb ends -->

            <!-- Sales stats starts -->
            <div class="ms-auto d-lg-flex d-none flex-row">
              <div class="d-flex flex-row gap-1 p-1 border border-primary rounded-5 grd-primary-light">
                <a href="#" class="icon-box icon-btn rounded-5 grd-primary-light border-0" data-bs-toggle="tooltip"
                  data-bs-placement="bottom" title="Share">
                  <i class="bi bi-share"></i>
                </a>
                <a href="#" class="icon-box icon-btn rounded-5 grd-primary-light border-0" data-bs-toggle="tooltip"
                  data-bs-placement="bottom" title="Print">
                  <i class="bi bi-printer"></i>
                </a>
                <a href="#" class="icon-box icon-btn rounded-5 grd-primary-light border-0" id="downloadDataToast"
                  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download">
                  <i class="bi bi-download"></i>
                </a>
              </div>
            </div>
            <!-- Sales stats ends -->

          </div>

          <div class="app-body">

            <!-- Row start -->
            <div class="row gx-4">
              <div class="col-xl-3 col-sm-6 col-12">

                <!-- Card starts -->
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <div class="fw-semibold mb-2">Total Orders</div>
                      <div class="position-relative">
                        <h2>690</h2>
                        <div class="badge bg-primary-subtle text-primary">+20% compared
                          to last week.</div>
                        <i class="bi bi-cart2 display-6 text-primary position-absolute end-0 top-0 mt-n4"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card ends -->

              </div>
              <div class="col-xl-3 col-sm-6 col-12">

                <!-- Card starts -->
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <div class="fw-semibold mb-2">Total Sales</div>
                      <div class="position-relative">
                        <h2>$600</h2>
                        <div class="badge bg-primary-subtle text-primary">+28% compared to
                          last week</div>
                        <i class="bi bi-bar-chart display-6 text-primary position-absolute end-0 top-0 mt-n4"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card ends -->

              </div>
              <div class="col-xl-3 col-sm-6 col-12">

                <!-- Card starts -->
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="m-0">
                      <div class="fw-semibold mb-2">Total Profit</div>
                      <div class="position-relative">
                        <h2>$800</h2>
                        <div class="badge bg-primary-subtle text-primary">+36% compared to
                          last week</div>
                        <i class="bi bi-percent display-6 text-primary position-absolute end-0 top-0 mt-n4"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card ends -->

              </div>
              <div class="col-xl-3 col-sm-6 col-12">

                <!-- Card starts -->
                <div class="card mb-4 card-bg">
                  <div class="card-body">
                    <div class="m-0">
                      <div class="fw-semibold mb-2">Total Revenue</div>
                      <div class="position-relative">
                        <h2>$900</h2>
                        <div class="badge bg-primary-subtle text-primary">+36% compared to last week</div>
                        <i class="bi bi-buildings display-6 text-primary position-absolute end-0 top-0 mt-n4"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card ends -->

              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gx-4">
              <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-box md rounded-circle bg-primary text-white me-3">
                      <i class="bi bi-people"></i>
                    </div>
                    <div>
                      <div class="fw-semibold mb-1">Active Users</div>
                      <h4>1,250</h4>
                      <span class="badge bg-success-subtle text-success">+8% this week</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-box md rounded-circle bg-warning text-white me-3">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div>
                      <div class="fw-semibold mb-1">New Sales</div>
                      <h4>$4,300</h4>
                      <span class="badge bg-warning-subtle text-warning">+12% this week</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-12 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-box md rounded-circle bg-success text-white me-3">
                      <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div>
                      <div class="fw-semibold mb-1">Growth Rate</div>
                      <h4>3.5%</h4>
                      <span class="badge bg-success-subtle text-success">Stable</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gx-4">
              <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-box md rounded-circle bg-info text-white me-3">
                      <i class="bi bi-activity"></i>
                    </div>
                    <div>
                      <div class="fw-semibold mb-1">Active Sessions</div>
                      <h4>320</h4>
                      <span class="badge bg-info-subtle text-info">+5% this week</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-box md rounded-circle bg-danger text-white me-3">
                      <i class="bi bi-bell"></i>
                    </div>
                    <div>
                      <div class="fw-semibold mb-1">Notifications</div>
                      <h4>27</h4>
                      <span class="badge bg-danger-subtle text-danger">+2 new</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-12 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="icon-box md rounded-circle bg-secondary text-white me-3">
                      <i class="bi bi-clock-history"></i>
                    </div>
                    <div>
                      <div class="fw-semibold mb-1">Avg. Response Time</div>
                      <h4>1.2s</h4>
                      <span class="badge bg-secondary-subtle text-secondary">Improved</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gx-4">
              <div class="col-xl-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Visitors</h5>
                  </div>
                  <div class="card-body">
                    <div class="graph-body-xl overflow-hidden">
                      <div id="visits-conversions"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gx-4">
              <div class="col-xxl-8 col-sm-12 col-12">
                <div class="card mb-4" id="cardFullscreen">
                  <div class="card-header">
                    <h5 class="card-title">Earnings</h5>
                  </div>
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="">
                        <div class="d-flex align-items-center">
                          <div class="fs-2 fw-semibold">$8900</div>
                          <div class="d-flex ms-2">
                            <div>20.9%</div>
                            <i class="bi bi-arrow-up-right text-success ms-1"></i>
                          </div>
                        </div>
                        <span
                          class="monthDisplay badge bg-primary-subtle text-primary border border-primary small"></span>
                      </div>
                      <div class="d-flex gap-1">
                        <div class="toggle-btns">
                          <button type="button" class="btn btn-primary btn-sm">This Week</button>
                          <button type="button" class="btn btn-outline-primary btn-sm">Last Week</button>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm" id="toggleCardFullscreen"
                          data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-danger"
                          data-bs-title="Fullscreen">
                          <i class="bi bi-arrows-fullscreen"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip"
                          data-bs-placement="top" data-bs-custom-class="tooltip-danger" data-bs-title="Download">
                          <i class="bi bi-download"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip"
                          data-bs-placement="top" data-bs-custom-class="tooltip-danger" data-bs-title="Options">
                          <i class="bi bi-three-dots"></i>
                        </button>
                      </div>
                    </div>
                    <div class="overflow-hidden">
                      <div id="income"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-sm-12 col-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Social</h5>
                    <div class="position-absolute top-0 end-0  mt-2 me-3">
                      <div class="d-flex align-items-center gap-1">
                        <div class="fs-2 fw-semibold">960</div>
                        <div class="d-flex">
                          <div>33.6%</div>
                          <i class="bi bi-arrow-up-right text-success ms-2"></i>
                        </div>
                      </div>
                      <span
                        class="monthDisplay badge bg-primary-subtle text-primary border border-primary small"></span>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="overflow-hidden auto-align-graph">
                      <div id="conversions"></div>
                    </div>
                  </div>
                </div>
                <div class="card mb-4 bg-primary available-balance-card">
                  <div class="card-body">
                    <div class="balance-card-body p-2 rounded-2">
                      <div class="d-flex justify-content-between mb-3">
                        <div>
                          <h6 class="text-white">Available Balance</h6>
                          <h5 class="m-0 text-white">$98600.00</h5>
                        </div>
                        <div class="icon-box md rounded-circle bg-primary">
                          <i class="bi bi-arrow-left-right"></i>
                        </div>
                      </div>
                      <div class="d-grid">
                        <button type="button" class="btn btn-black btn-sm">Add Money</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gx-4">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title m-0">Orders</h5>
                    <div class="ms-auto d-flex gap-2">

                      <!-- Search Patient Starts -->
                      <div class="search-container dark d-xl-block d-none">
                        <input type="text" class="form-control border" id="searchPatient" placeholder="Search">
                        <i class="bi bi-search"></i>
                      </div>
                      <!-- Search Patient Ends -->

                      <!-- Button Group Starts -->
                      <div class="ms-2 toggle-btn-group">
                        <button type="button" class="btn btn-primary">
                          <i class="bi bi-filter-circle"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                          <i class="bi bi-border-all"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                          <i class="bi bi-calendar2-event"></i>
                        </button>
                      </div>
                      <!-- Button Group Ends -->

                    </div>
                  </div>
                  <div class="card-body">

                    <!-- Product grod starts -->
                    <div class="d-grid gap-2">
                      <!-- Product #1 -->
                      <div class="card">
                        <div class="border-light rounded-2 p-2">
                          <div class="d-flex align-items-center flex-wrap gap-4">
                            <img src="assets/images/user.png" class="img-3x rounded-5 border border-primary border-2"
                              alt="Admin Dashboards">
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                User Name
                              </div>
                              <div class="fw-semibold">Jordan</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Product ID
                              </div>
                              <div>#APT009</div>
                            </div>
                            <div class="d-flex flex-column mw-120">
                              <div class="text-primary">
                                Purchase Date
                              </div>
                              <div>20/08/2025</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Status
                              </div>
                              <div>Delivered</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Mobile
                              </div>
                              <div>9876543210</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Email
                              </div>
                              <div>testing@info.com</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Payment
                              </div>
                              <div>Paid</div>
                            </div>
                            <div class="ms-auto d-flex align-items-center gap-2">
                              <div class="d-flex gap-2">
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-check-circle text-primary"></i>
                                </a>
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-x-circle text-primary"></i>
                                </a>
                              </div>
                              <div class="fw-semibold text-primary">
                                <a href="javascript:void(0)" class="btn-soft-primary py-2 px-3 rounded-5">
                                  Details
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Product #2 -->
                      <div class="card">
                        <div class="border-light rounded-2 p-2">
                          <div class="d-flex align-items-center flex-wrap gap-4">
                            <img src="assets/images/user1.png" class="img-3x rounded-5 border border-primary border-2"
                              alt="Admin Dashboards">
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                User Name
                              </div>
                              <div class="fw-semibold">Hilton</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Product ID
                              </div>
                              <div>#APT083</div>
                            </div>
                            <div class="d-flex flex-column mw-120">
                              <div class="text-primary">
                                Purchase Date
                              </div>
                              <div>30/08/2025</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Status
                              </div>
                              <div>Approved</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Mobile
                              </div>
                              <div>9876543210</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Email
                              </div>
                              <div>testing@info.com</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Payment
                              </div>
                              <div>Paid</div>
                            </div>
                            <div class="ms-auto d-flex align-items-center gap-2">
                              <div class="d-flex gap-2">
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-check-circle text-primary"></i>
                                </a>
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-x-circle text-primary"></i>
                                </a>
                              </div>
                              <div class="fw-semibold text-primary">
                                <a href="javascript:void(0)" class="btn-soft-primary py-2 px-3 rounded-5">
                                  Details
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Product #3 -->
                      <div class="card">
                        <div class="border-light rounded-2 p-2">
                          <div class="d-flex align-items-center flex-wrap gap-4">
                            <img src="assets/images/user2.png" class="img-3x rounded-5 border border-primary border-2"
                              alt="Admin Dashboards">
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                User Name
                              </div>
                              <div class="fw-semibold">David</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Product ID
                              </div>
                              <div>#APT066</div>
                            </div>
                            <div class="d-flex flex-column mw-120">
                              <div class="text-primary">
                                Purchase Date
                              </div>
                              <div>30/08/2025</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Status
                              </div>
                              <div>Processing</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Mobile
                              </div>
                              <div>9876543210</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Email
                              </div>
                              <div>testing@info.com</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Payment
                              </div>
                              <div>Pending</div>
                            </div>
                            <div class="ms-auto d-flex align-items-center gap-2">
                              <div class="d-flex gap-2">
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-check-circle text-primary"></i>
                                </a>
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-x-circle text-primary"></i>
                                </a>
                              </div>
                              <div class="fw-semibold text-primary">
                                <a href="javascript:void(0)" class="btn-soft-primary py-2 px-3 rounded-5">
                                  Details
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Product #4 -->
                      <div class="card">
                        <div class="border-light rounded-2 p-2">
                          <div class="d-flex align-items-center flex-wrap gap-4">
                            <img src="assets/images/user3.png" class="img-3x rounded-5 border border-primary border-2"
                              alt="Admin Dashboards">
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                User Name
                              </div>
                              <div class="fw-semibold">Karyn</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Product ID
                              </div>
                              <div>#APT032</div>
                            </div>
                            <div class="d-flex flex-column mw-120">
                              <div class="text-primary">
                                Purchase Date
                              </div>
                              <div>22/08/2025</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Status
                              </div>
                              <div>Processing</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Mobile
                              </div>
                              <div>9876543210</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Email
                              </div>
                              <div>testing@info.com</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Payment
                              </div>
                              <div>Pending</div>
                            </div>
                            <div class="ms-auto d-flex align-items-center gap-2">
                              <div class="d-flex gap-2">
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-check-circle text-primary"></i>
                                </a>
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-x-circle text-primary"></i>
                                </a>
                              </div>
                              <div class="fw-semibold text-primary">
                                <a href="javascript:void(0)" class="btn-soft-primary py-2 px-3 rounded-5">
                                  Details
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Product #5 -->
                      <div class="card">
                        <div class="border-light rounded-2 p-2">
                          <div class="d-flex align-items-center flex-wrap gap-4">
                            <img src="assets/images/user4.png" class="img-3x rounded-5 border border-primary border-2"
                              alt="Admin Dashboards">
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                User Name
                              </div>
                              <div class="fw-semibold">Chris</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Product ID
                              </div>
                              <div>#APT048</div>
                            </div>
                            <div class="d-flex flex-column mw-120">
                              <div class="text-primary">
                                Purchase Date
                              </div>
                              <div>30/08/2025</div>
                            </div>
                            <div class="d-flex flex-column mw-90">
                              <div class="text-primary">
                                Status
                              </div>
                              <div>Processing</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Mobile
                              </div>
                              <div>9876543210</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Email
                              </div>
                              <div>testing@info.com</div>
                            </div>
                            <div class="d-flex flex-column">
                              <div class="text-primary">
                                Payment
                              </div>
                              <div>Pending</div>
                            </div>
                            <div class="ms-auto d-flex align-items-center gap-2">
                              <div class="d-flex gap-2">
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-check-circle text-primary"></i>
                                </a>
                                <a href="#!" class="icon-box xs icon-box-hover rounded-5">
                                  <i class="bi bi-x-circle text-primary"></i>
                                </a>
                              </div>
                              <div class="fw-semibold text-primary">
                                <a href="javascript:void(0)" class="btn-soft-primary py-2 px-3 rounded-5">
                                  Details
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- Product grod ends -->

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

@endsection