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
                      <span class="small text-muted">Date of Birth</span>
                      <p class="mb-0 fw-semibold">January 15, 1985</p>
                    </div>
                    <div>
                      <span class="small text-muted">Joined Date</span>
                      <p class="mb-0 fw-semibold">March 12, 2020</p>
                    </div>
                  </div>
                </div>

                <!-- Contact & Address -->
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Contact & Address</h5>
                    <button type="button" class="btn btn-sm btn-outline-primary" aria-label="Edit Contact & Address">
                      <i class="bi bi-pencil"></i>
                    </button>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <span class="small text-muted">Work Address</span>
                      <p class="mb-0 fw-semibold">123 Business Avenue, Suite 500<br>San Francisco, CA 94107
                      </p>
                    </div>
                    <div class="mb-3">
                      <span class="small text-muted">Home Address</span>
                      <p class="mb-0 fw-semibold">456 Residential Street<br>San Francisco, CA 94110</p>
                    </div>
                    <div>
                      <span class="small text-muted">Alternative Email</span>
                      <p class="mb-0 fw-semibold">johnsmith.personal@gmail.com</p>
                    </div>
                  </div>
                </div>

                <!-- Connected Devices -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Connected Devices</h5>
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-laptop fs-4 text-primary me-3"></i>
                          <div>
                            <p class="mb-0 fw-semibold">MacBook Pro</p>
                            <small class="text-muted">Last active: 2 minutes ago</small>
                          </div>
                        </div>
                        <span class="badge bg-success rounded-pill">Active</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-phone fs-4 text-primary me-3"></i>
                          <div>
                            <p class="mb-0 fw-semibold">iPhone 13 Pro</p>
                            <small class="text-muted">Last active: 5 minutes ago</small>
                          </div>
                        </div>
                        <span class="badge bg-success rounded-pill">Active</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-tablet fs-4 text-primary me-3"></i>
                          <div>
                            <p class="mb-0 fw-semibold">iPad Air</p>
                            <small class="text-muted">Last active: 2 days ago</small>
                          </div>
                        </div>
                        <span class="badge bg-secondary rounded-pill">Inactive</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Social Media Links -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Social Media Links</h5>
                    <button type="button" class="btn btn-sm btn-outline-primary" aria-label="Edit Social Media Links">
                      <i class="bi bi-pencil"></i>
                    </button>
                  </div>
                  <div class="card-body d-flex justify-content-around">
                    <a href="javascript:void(0)" target="_blank" class="text-primary fs-3" aria-label="LinkedIn">
                      <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="text-info fs-3" aria-label="Twitter">
                      <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="text-dark fs-3" aria-label="GitHub">
                      <i class="bi bi-github"></i>
                    </a>
                  </div>
                </div>

                <!-- Recent Activities -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Recent Activities</h5>
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                          <p class="mb-0 fw-semibold">Completed the "Dashboard Redesign" project</p>
                          <small class="text-muted">2 hours ago</small>
                        </div>
                        <span class="badge bg-success rounded-pill">Completed</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                          <p class="mb-0 fw-semibold">Attended the "Weekly Team Meeting"</p>
                          <small class="text-muted">Yesterday</small>
                        </div>
                        <span class="badge bg-info rounded-pill">Meeting</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                          <p class="mb-0 fw-semibold">Submitted the "Market Research" report</p>
                          <small class="text-muted">3 days ago</small>
                        </div>
                        <span class="badge bg-warning text-dark rounded-pill">Pending Review</span>
                      </li>
                    </ul>
                  </div>
                </div>
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

                <!-- Activity Overview -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Activity Overview</h5>
                  </div>
                  <div class="card-body">
                    <div class="overflow-hidden">
                      <div id="profileIncomeGraph"></div>
                    </div>
                  </div>
                </div>

                <!-- Tasks & Projects Assigned -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Tasks & Projects</h5>
                    <a href="#" class="btn btn-sm btn-primary">View All</a>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-outer">
                      <div class="table-responsive">
                        <table class="table table-hover align-middle mb-1">
                          <thead>
                            <tr>
                              <th>Project</th>
                              <th>Status</th>
                              <th>Deadline</th>
                              <th>Progress</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="icon-box sm rounded-3 bg-info-transparent me-2">
                                    <i class="bi bi-layers text-info"></i>
                                  </div>
                                  <div>
                                    <p class="mb-0 fw-medium">Dashboard Redesign</p>
                                    <small class="text-muted">UI/UX Design</small>
                                  </div>
                                </div>
                              </td>
                              <td><span class="badge bg-success">Completed</span></td>
                              <td>10 May, 2025</td>
                              <td>
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="icon-box sm rounded-3 bg-primary-transparent me-2">
                                    <i class="bi bi-code-slash text-primary"></i>
                                  </div>
                                  <div>
                                    <p class="mb-0 fw-medium">Mobile App Development</p>
                                    <small class="text-muted">Development</small>
                                  </div>
                                </div>
                              </td>
                              <td><span class="badge bg-warning text-dark">In Progress</span></td>
                              <td>28 Apr, 2025</td>
                              <td>
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="icon-box sm rounded-3 bg-danger-transparent me-2">
                                    <i class="bi bi-bar-chart text-danger"></i>
                                  </div>
                                  <div>
                                    <p class="mb-0 fw-medium">Market Research</p>
                                    <small class="text-muted">Marketing</small>
                                  </div>
                                </div>
                              </td>
                              <td><span class="badge bg-info">Planning</span></td>
                              <td>15 Jan, 2025</td>
                              <td>
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%"></div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Subscription Plan & Usage -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Subscription & Usage</h5>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <div>
                        <h6 class="mb-1">Premium Plan</h6>
                        <p class="text-muted mb-0">Your next billing cycle starts in <strong>25 days</strong>. Stay on
                          top of your plan!</p>
                      </div>
                      <button type="button" class="btn btn-outline-primary">Upgrade Plan</button>
                    </div>
                    <div class="row g-4">
                      <div class="col-md-4">
                        <div class="p-3 border rounded-3">
                          <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-hdd-stack text-primary me-2 fs-4"></i>
                            <h6 class="mb-0">Storage</h6>
                          </div>
                          <div class="progress mb-2 medium">
                            <div class="progress-bar bg-primary w-75" role="progressbar" aria-valuenow="75"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mb-0 small text-muted">75GB / 100GB used</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="p-3 border rounded-3">
                          <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-people text-success me-2 fs-4"></i>
                            <h6 class="mb-0">Team Members</h6>
                          </div>
                          <div class="progress mb-2 medium">
                            <div class="progress-bar bg-success w-60" role="progressbar"></div>
                          </div>
                          <p class="mb-0 small text-muted">6 of 10 members</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="p-3 border rounded-3">
                          <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-cursor text-warning me-2 fs-4"></i>
                            <h6 class="mb-0">API Calls</h6>
                          </div>
                          <div class="progress mb-2 medium">
                            <div class="progress-bar bg-warning w-40" role="progressbar" aria-valuenow="40"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mb-0 small text-muted">4,000 / 10,000 monthly</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Rewards & Points -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Points & Rewards</h5>
                  </div>
                  <div class="card-body">
                    <div class="row align-items-center mb-4">
                      <div class="col-md-6">
                        <div class="d-flex align-items-center">
                          <div class="icon-box lg rounded-circle bg-warning-subtle me-3">
                            <i class="bi bi-star-fill fs-3 text-warning"></i>
                          </div>
                          <div>
                            <h3 class="mb-1">2,450</h3>
                            <p class="text-muted mb-0">Total reward points</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="progress mb-2 medium" aria-label="Progress towards next tier">
                          <div class="progress-bar bg-warning w-80" role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0 text-center">550 points to next tier: Gold</p>
                      </div>
                    </div>
                    <div class="row g-4">
                      <div class="col-md-4">
                        <div class="p-4 border rounded-3 text-center shadow-sm">
                          <i class="bi bi-gift text-primary fs-2 mb-3"></i>
                          <h6 class="mb-2 fw-semibold">Rewards Store</h6>
                          <p class="mb-0 text-muted small">Redeem your points for exciting rewards.</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="p-4 border rounded-3 text-center shadow-sm">
                          <i class="bi bi-trophy text-success fs-2 mb-3"></i>
                          <h6 class="mb-2 fw-semibold">Achievements</h6>
                          <p class="mb-0 text-muted small">Showcase your earned badges and milestones.</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="p-4 border rounded-3 text-center shadow-sm">
                          <i class="bi bi-arrow-repeat text-info fs-2 mb-3"></i>
                          <h6 class="mb-2 fw-semibold">Activity</h6>
                          <p class="mb-0 text-muted small">Track your points history and usage.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Danger Zone -->
                <div class="card bg-danger-subtle border-danger">
                  <div class="card-header">
                    <h5 class="card-title text-danger">Danger Zone</h5>
                  </div>
                  <div class="card-body">
                    <div class="row align-items-center mb-4">
                      <div class="col-md-8">
                        <h6 class="mb-1 text-danger">Delete Account</h6>
                        <p class="text-white mb-0">Deleting your account is irreversible. Please proceed with caution.
                        </p>
                      </div>
                      <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <button type="button" class="btn btn-danger" aria-label="Delete Account">
                          <i class="bi bi-trash-fill me-1"></i>Delete Account
                        </button>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-md-8">
                        <h6 class="mb-1 text-primary">Export Data</h6>
                        <p class="text-white mb-0">Ensure you download all your data before account deletion.</p>
                      </div>
                      <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <button type="button" class="btn btn-outline-primary" aria-label="Export Data">
                          <i class="bi bi-download me-1"></i>Export Data
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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