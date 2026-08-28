 <div class="app-header d-flex align-items-center">

        <!-- Pin Sidebar starts -->
        <div class="pin-sidebar me-2">
          <button type="button" class="btn btn-primary rounded-2">
            <i class="bi bi-list"></i>
          </button>
        </div>
        <!-- Pin Sidebar ends -->

        <!-- Mobile Sidebar starts -->
        <div class="toggle-sidebar me-2">
          <button type="button" class="btn btn-primary rounded-2">
            <i class="bi bi-list"></i>
          </button>
        </div>
        <!-- Mobile Sidebar ends -->

        <!-- App brand starts -->
        <div class="app-brand d-flex align-items-center p-2">

          <!-- Default screen starts -->
          <a href="{{ route('instructor.dashboard') }}" class="d-lg-flex d-none">
            <img src="{{ asset('backend/assets/images/logo.svg') }}" class="logo" alt="Khedmat">
          </a>
          <!-- Default screen end -->

          <!-- Logo sm starts -->
          <a href="{{ route('instructor.dashboard') }}" class="d-lg-none">
            <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" class="logo-sm" alt="Khedmat">
          </a>
          <!-- Logo sm end -->

        </div>
        <!-- App brand ends -->

        <!-- App header actions starts -->
        <div class="header-actions">

          <!-- Search container starts -->
          <div class="search-container d-lg-block d-none me-3">
            <input type="text" class="form-control" id="searchAny" placeholder="Search">
            <i class="bi bi-search"></i>
          </div>
          <!-- Search container ends -->

          <!-- Actions block starts -->
          <div class="d-lg-flex d-none gap-3 actions-block">
            <div class="dropdown">
              <a class="dropdown-toggle action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-cart2 lh-1"></i>
                <span class="count-label">9</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-300">
                <div class="dropdown-header fw-semibold">Orders</div>
                <div class="scroll250">
                  <div class="d-grid gap-3 p-3">
                    <div class="order-item border-bottom pb-3">
                      <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="badge border border-primary text-primary rounded-pill">Purchase</span>
                        <small class="text-muted">Today, 06:30pm</small>
                      </div>
                      <p class="fw-medium mb-1">Wireless Headphones - $120</p>
                      <p class="small text-muted m-0">Order #34522 • Processing</p>
                    </div>

                    <div class="order-item border-bottom pb-3">
                      <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="badge bg-primary rounded-pill">Account</span>
                        <small class="text-muted">Today, 03:00pm</small>
                      </div>
                      <p class="fw-medium mb-1">$180 deducted from your account</p>
                      <p class="small text-muted m-0">Transaction #95622 • Completed</p>
                    </div>

                    <div class="order-item border-bottom pb-3">
                      <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="badge bg-success rounded-pill">Team</span>
                        <small class="text-muted">Today, 03:15pm</small>
                      </div>
                      <p class="fw-medium mb-1">Daniel joined the team</p>
                      <p class="small text-muted m-0">Sales Department • New member</p>
                    </div>

                    <div class="order-item border-bottom pb-3">
                      <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="badge bg-info rounded-pill">Orders</span>
                        <small class="text-muted">Today, 03:30pm</small>
                      </div>
                      <p class="fw-medium mb-1">Smart Watch - $249</p>
                      <p class="small text-muted m-0">Order #34527 • Shipped</p>
                    </div>

                    <div class="order-item">
                      <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="badge bg-warning text-dark rounded-pill">New</span>
                        <small class="text-muted">Today, 03:45pm</small>
                      </div>
                      <p class="fw-medium mb-1">Bluetooth Speaker - $85</p>
                      <p class="small text-muted m-0">Order #34531 • Payment received</p>
                    </div>
                  </div>
                </div>
                <div class="d-grid m-3">
                  <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                </div>
              </div>
            </div>
            <div class="dropdown">
              <a class="dropdown-toggle action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-exclamation-triangle lh-1"></i>
                <span class="count-label">5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-300">
                <div class="dropdown-header fw-semibold">Errors</div>
                <div class="scroll250">
                  <div class="d-grid gap-2 m-3">
                    <div class="border px-3 py-2 rounded-2">
                      <p class="mb-1"><span class="bi bi-circle-fill text-primary me-2"></span>Solved critical error
                      </p>
                      <p class="small m-0">Today, 07:30pm</p>
                    </div>
                    <div class="border px-3 py-2 rounded-2">
                      <p class="mb-1"><span class="bi bi-circle-fill text-primary me-2"></span>Bug fix</p>
                      <p class="small m-0">Today, 07:45pm</p>
                    </div>
                    <div class="border px-3 py-2 rounded-2">
                      <p class="mb-1"><span class="bi bi-circle-fill text-primary me-2"></span>Production issue</p>
                      <p class="small m-0">Today, 8:00pm</p>
                    </div>
                    <div class="border px-3 py-2 rounded-2">
                      <p class="mb-1"><span class="bi bi-circle-fill text-primary me-2"></span>New ticket</p>
                      <p class="small m-0">Today, 09:15pm</p>
                    </div>
                    <div class="border px-3 py-2 rounded-2">
                      <p class="mb-1"><span class="bi bi-circle-fill text-primary me-2"></span>UI fix</p>
                      <p class="small m-0">Today, 09:45pm</p>
                    </div>
                    <div class="border px-3 py-2 rounded-2">
                      <p class="mb-1"><span class="bi bi-circle-fill text-primary me-2"></span>Signup issue</p>
                      <p class="small m-0">Today, 10:45pm</p>
                    </div>
                  </div>
                </div>
                <div class="d-grid m-3">
                  <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                </div>
              </div>
            </div>
            <div class="dropdown">
              <a class="dropdown-toggle action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-receipt lh-1"></i>
                <span class="count-label animate__animated animate__swing animate__infinite">6</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-300">
                <div class="dropdown-header fw-semibold">Invoices</div>
                <div class="scroll250">
                  <div class="d-grid gap-2 p-3">
                    <a href="#!">
                      <div class="d-flex align-items-center py-2">
                        <img src="assets/images/user1.png" class="img-3x me-3 rounded-5" alt="User Avatar">
                        <div class="m-0">
                          <h4 class="mb-2 text-success">$450.00</h4>
                          <p class="mb-1">Payment received from **NovaCore Systems**.</p>
                          <p class="m-0">
                            Invoice #99885 <span class="badge bg-success ms-2">Paid</span>
                          </p>
                        </div>
                      </div>
                    </a>

                    <a href="#!">
                      <div class="d-flex align-items-center py-2">
                        <img src="assets/images/user2.png" class="img-3x me-3 rounded-5" alt="User Avatar">
                        <div class="m-0">
                          <h4 class="mb-2 text-success">$290.00</h4>
                          <p class="mb-1">Payment processed from **PixelStack Studios**.</p>
                          <p class="m-0">
                            Invoice #99887 <span class="badge bg-success ms-2">Paid</span>
                          </p>
                        </div>
                      </div>
                    </a>

                    <a href="#!">
                      <div class="d-flex align-items-center py-2">
                        <img src="assets/images/user3.png" class="img-3x me-3 rounded-5" alt="User Avatar">
                        <div class="m-0">
                          <h4 class="mb-2 text-warning">$330.00</h4>
                          <p class="mb-1">**Orion Labs** payment request submitted.</p>
                          <p class="m-0">
                            Invoice #99888 <span class="badge bg-warning ms-2">Pending</span>
                          </p>
                        </div>
                      </div>
                    </a>

                    <a href="#!">
                      <div class="d-flex align-items-center py-2">
                        <img src="assets/images/user4.png" class="img-3x me-3 rounded-5" alt="User Avatar">
                        <div class="m-0">
                          <h4 class="mb-2 text-danger">$380.00</h4>
                          <p class="mb-1">Payment failed from **Zenith Technologies**.</p>
                          <p class="m-0">
                            Invoice #99889 <span class="badge bg-danger ms-2">Failed</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </div>

                </div>
                <div class="d-grid m-3">
                  <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Actions block ends -->

          <!-- Settings start -->
          @php
            $instructorAvatar = (!empty(auth()->user()->photo) && file_exists(public_path('upload/instructor_images/'.auth()->user()->photo)))
                ? asset('upload/instructor_images/'.auth()->user()->photo)
                : asset('backend/assets/images/user3.png');
          @endphp
          <div class="dropdown ms-3">
            <a id="userSettings" class="dropdown-toggle d-flex align-items-center py-1 avatar-box" href="#!"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ $instructorAvatar }}" class="rounded-circle img-3x" alt="Instructor">
              <span class="status online"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-lg p-3">
              <div class="user-header d-flex align-items-center mb-3">
                <img src="{{ $instructorAvatar }}" class="rounded-circle img-3x me-2" alt="Instructor">
                <div>
                  <h6 class="mb-0 fw-semibold">{{ auth()->user()->name }}</h6>
                  <small class="text-muted">Instructor</small>
                </div>
              </div>
              <a class="dropdown-item d-flex align-items-center py-2 border mb-1" href="{{ route('instructor.profile') }}">
                <i class="bi bi-person-circle me-2 text-primary"></i>
                <span>My Profile</span>
              </a>
              <a class="dropdown-item d-flex align-items-center py-2 border mb-1" href="{{ route('instructor.change.password') }}">
                <i class="bi bi-gear-fill me-2 text-primary"></i>
                <span>Account Settings</span>
              </a>
              <a class="dropdown-item d-flex align-items-center py-2 border" href="{{ route('instructor.change.password') }}">
                <i class="bi bi-shield-lock me-2 text-primary"></i>
                <span>Reset Password</span>
              </a>
              <div class="d-grid mt-2">
                <a href="{{ route('instructor.logout') }}" class="btn btn-primary d-flex align-items-center justify-content-center">
                  <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a>
              </div>
            </div>
          </div>
          <!-- Settings end -->

        </div>
        <!-- App header actions ends -->

      </div>