@extends('admin.dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- App hero header starts -->
          <div class="app-hero-header d-flex align-items-center">

            <!-- Breadcrumb starts -->
            <h3 class="m-0">User Profile</h3>
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
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- User Profile Section -->
            <div class="row gx-4">
              <!-- Profile Header -->
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex flex-column flex-md-row align-items-center flex-wrap">
                      <div class="position-relative me-md-4 mb-3 mb-md-0">
                        <img src="assets/images/user3.png" class="rounded-circle img-7x" alt="Profile Image">
                        <button type="button"
                          class="btn btn-icon btn-primary position-absolute bottom-0 end-0 rounded-circle">
                          <i class="bi bi-camera-fill"></i>
                        </button>
                      </div>
                      <div class="text-center text-md-start flex-grow-1">
                        <h3 class="mb-1 fw-bold">Olivia Johnson</h3>
                        <p class="text-muted mb-2 fs-6">Senior Product Manager</p>
                        <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-1 mb-3">
                          <span class="badge bg-primary rounded-pill px-2">Administrator</span>
                          <span class="badge bg-info rounded-pill px-2">Team Lead</span>
                          <span class="badge bg-success rounded-pill px-2">Active</span>
                        </div>
                        <p class="mb-2 text-muted fst-italic">"Creating beautiful experiences through design and
                          innovation."</p>
                      </div>
                      <div class="d-flex gap-2 mt-3 mt-md-0">
                        <button type="button" class="btn btn-primary"><i class="bi bi-chat-fill me-1"></i>
                          Message</button>
                        <button type="button" class="btn btn-outline-secondary"><i class="bi bi-person-plus me-1"></i>
                          Follow</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Left Column -->
              <div class="col-xxl-4 col-sm-12">
                <!-- Basic Information -->
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Basic Information</h5>
                    <button type="button" class="btn btn-sm btn-outline-primary" aria-label="Edit Basic Information">
                      <i class="bi bi-pencil"></i>
                    </button>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <span class="small text-muted">Full Name</span>
                      <p class="mb-0 fw-semibold">Olivia Johnson</p>
                    </div>
                    <div class="mb-3">
                      <span class="small text-muted">Email</span>
                      <p class="mb-0 fw-semibold">olivia.jsn@example.com</p>
                    </div>
                    <div class="mb-3">
                      <span class="small text-muted">Phone</span>
                      <p class="mb-0 fw-semibold">+1 (555) 123-4567</p>
                    </div>
                    <div class="mb-3">
                      <span class="small text-muted">Last Name</span>
                      <p class="mb-0 fw-semibold">January 15, 1985</p>
                    </div>
                  
                  </div>
                </div>
                <!-- Recent Activities -->
                
              </div>

              <!-- Right Column -->
              <div class="col-xxl-8 col-sm-12">
                <!-- Account Settings -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Account Settings</h5>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="firstName" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="firstName" value="John"
                            placeholder="Enter your first name">
                        </div>
                        <div class="col-md-6">
                          <label for="lastName" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="lastName" value="Smith"
                            placeholder="Enter your last name">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" value="john.smith@example.com"
                            placeholder="Enter your email">
                        </div>
                        <div class="col-md-6">
                          <label for="phone" class="form-label">Phone Number</label>
                          <input type="tel" class="form-control" id="phone" value="+1 (555) 123-4567"
                            placeholder="Enter your phone number">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="department" class="form-label">Department</label>
                          <select class="form-select" id="department">
                            <option value="Product Management" selected>Product Management</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Sales">Sales</option>
                            <option value="HR">HR</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="role" class="form-label">Role</label>
                          <select class="form-select" id="role">
                            <option value="Senior Product Manager" selected>Senior Product Manager</option>
                            <option value="Product Manager">Product Manager</option>
                            <option value="Associate Product Manager">Associate Product Manager</option>
                            <option value="Director">Director</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea class="form-control" id="bio" rows="3"
                          placeholder="Write a short bio about yourself">Creating beautiful experiences through design and innovation.</textarea>
                      </div>
                      <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form>
                  </div>
                </div>

          
             

                

          </div>


@endsection