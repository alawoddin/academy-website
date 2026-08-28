<!DOCTYPE html>
<html lang="en" data-bs-theme=dark>

  
<!-- Mirrored from bootstrapget.com/demos/sporty-admin-dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 16:17:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sporty - Bootstrap Admin Dashboard</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery">
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.svg') }}">

    <!-- *************
			************ CSS Files *************
		************* -->
    {{-- {{ asset('backend/') }} --}}
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/bootstrap/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.min.css') }}">

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

  </head>

  <body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- App header starts -->
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
          <a href="index-2.html" class="d-lg-flex d-none">
            <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery">
          </a>
          <!-- Default screen end -->

          <!-- Logo sm starts -->
          <a href="index-2.html" class="d-lg-none">
            <img src="assets/images/logo-sm.svg" class="logo-sm" alt="Bootstrap Gallery">
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
          <div class="dropdown ms-3">
            <a id="userSettings" class="dropdown-toggle d-flex align-items-center py-1 avatar-box" href="#!"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="assets/images/user3.png" class="rounded-circle img-3x" alt="Bootstrap Gallery">
              <span class="status online"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-lg p-3">
              <div class="user-header d-flex align-items-center mb-3">
                <img src="assets/images/user3.png" class="rounded-circle img-3x me-2" alt="Modern Admin Dashboard">
                <div>
                  <h6 class="mb-0 fw-semibold">Olivia Johnson</h6>
                  <small class="text-muted">Administrator</small>
                </div>
              </div>
              <a class="dropdown-item d-flex align-items-center py-2 border mb-1" href="profile.html">
                <i class="bi bi-person-circle me-2 text-primary"></i>
                <span>My Profile</span>
              </a>
              <a class="dropdown-item d-flex align-items-center py-2 border mb-1" href="settings.html">
                <i class="bi bi-gear-fill me-2 text-primary"></i>
                <span>Account Settings</span>
              </a>
              <a class="dropdown-item d-flex align-items-center justify-content-between py-2 border mb-1"
                href="tasks.html">
                <div><i class="bi bi-list-check me-2 text-primary"></i>My Tasks</div>
                <span class="badge bg-primary rounded-pill">5</span>
              </a>
              <a class="dropdown-item d-flex align-items-center py-2 border" href="reset-password.html">
                <i class="bi bi-shield-lock me-2 text-primary"></i>
                <span>Reset Password</span>
              </a>
              <div class="d-grid mt-2">
                <a href="login.html" class="btn btn-primary d-flex align-items-center justify-content-center">
                  <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a>
              </div>
            </div>
          </div>
          <!-- Settings end -->

        </div>
        <!-- App header actions ends -->

      </div>
      <!-- App header ends -->

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li class="sidebar-title">
                <h6 class="m-0 text-truncate fw-bold small">Dashboards</h6>
              </li>
              <li class="current-page">
                <a href="index-2.html">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Analytics</span>
                </a>
              </li>
              <li>
                <a href="crm.html">
                  <i class="bi bi-hdd-rack"></i>
                  <span class="menu-text">CRM</span>
                </a>
              </li>
              <li>
                <a href="podcast.html">
                  <i class="bi bi-optical-audio"></i>
                  <span class="menu-text">Podcast</span>
                </a>
              </li>
              <li>
                <a href="wizard.html">
                  <i class="bi bi-dpad"></i>
                  <span class="menu-text">Wizard</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-box"></i>
                  <span class="menu-text">UI Widgets</span>
                </a>
              </li>
              <li class="sidebar-title">
                <h6 class="m-0 text-truncate fw-bold small">Pages</h6>
              </li>
              <li>
                <a href="customers.html">
                  <i class="bi bi-people"></i>
                  <span class="menu-text">Customers</span>
                </a>
              </li>
              <li>
                <a href="users-list.html">
                  <i class="bi bi-list-check"></i>
                  <span class="menu-text">Users List</span>
                </a>
              </li>
              <li>
                <a href="profile.html">
                  <i class="bi bi-filter-circle"></i>
                  <span class="menu-text">User Profile</span>
                </a>
              </li>
              <li>
                <a href="settings.html">
                  <i class="bi bi-gear"></i>
                  <span class="menu-text">Account Settings</span>
                </a>
              </li>
              <li>
                <a href="orders.html">
                  <i class="bi bi-shop-window"></i>
                  <span class="menu-text">Orders</span>
                </a>
              </li>
              <li>
                <a href="products.html">
                  <i class="bi bi-terminal-split"></i>
                  <span class="menu-text">Products</span>
                </a>
              </li>
              <li>
                <a href="leads.html">
                  <i class="bi bi-patch-check"></i>
                  <span class="menu-text">Leads</span>
                </a>
              </li>
              <li>
                <a href="expenses.html">
                  <i class="bi bi-arrow-up-right-circle"></i>
                  <span class="menu-text">Expenses</span>
                </a>
              </li>
              <li>
                <a href="subscriptions.html">
                  <i class="bi bi-mouse3"></i>
                  <span class="menu-text">Subscribers</span>
                </a>
              </li>
              <li>
                <a href="tasks.html">
                  <i class="bi bi-clipboard-check"></i>
                  <span class="menu-text">Tasks</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-window-sidebar"></i>
                  <span class="menu-text">Invoices</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="create-invoice.html">Create Invoice</a>
                  </li>
                  <li>
                    <a href="view-invoice.html">View Invoice</a>
                  </li>
                  <li>
                    <a href="invoice-list.html">Invoice List</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="default.html">
                  <i class="bi bi-layout-sidebar"></i>
                  <span class="menu-text">Default Page</span>
                </a>
              </li>
              <li>
                <a href="support.html">
                  <i class="bi bi-chat-text"></i>
                  <span class="menu-text">Support</span>
                </a>
              </li>
              <li>
                <a href="calendar.html">
                  <i class="bi bi-calendar2"></i>
                  <span class="menu-text">Calendar</span>
                </a>
              </li>
              <li>
                <a href="contacts.html">
                  <i class="bi bi-buildings"></i>
                  <span class="menu-text">Contacts</span>
                </a>
              </li>
              <li>
                <a href="faq.html">
                  <i class="bi bi-chat"></i>
                  <span class="menu-text">Faq's</span>
                </a>
              </li>
              <li>
                <a href="contact-us.html">
                  <i class="bi bi-phone-vibrate"></i>
                  <span class="menu-text">Contact Us</span>
                </a>
              </li>
              <li class="sidebar-title">
                <h6 class="m-0 text-truncate fw-bold small">UI Kit</h6>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-boxes"></i>
                  <span class="menu-text">UI Elements</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="accordions.html">Accordions</a>
                  </li>
                  <li>
                    <a href="alerts.html">Alerts</a>
                  </li>
                  <li>
                    <a href="avatars.html">Avatars</a>
                  </li>
                  <li>
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="badges.html">Badges</a>
                  </li>
                  <li>
                    <a href="cards.html">Cards</a>
                  </li>
                  <li>
                    <a href="carousel.html">Carousel</a>
                  </li>
                  <li>
                    <a href="dropdowns.html">Dropdowns</a>
                  </li>
                  <li>
                    <a href="icons.html">Icons</a>
                  </li>
                  <li>
                    <a href="list-items.html">List Items</a>
                  </li>
                  <li>
                    <a href="modals.html">Modals</a>
                  </li>
                  <li>
                    <a href="offcanvas.html">Offcanvas</a>
                  </li>
                  <li>
                    <a href="progress.html">Progress Bars</a>
                  </li>
                  <li>
                    <a href="popovers.html">Popovers</a>
                  </li>
                  <li>
                    <a href="placeholders.html">Placeholders</a>
                  </li>
                  <li>
                    <a href="ribbons.html">Ribbons</a>
                  </li>
                  <li>
                    <a href="tabs.html">Tabs</a>
                  </li>
                  <li>
                    <a href="tooltips.html">Tooltips</a>
                  </li>
                  <li>
                    <a href="typography.html">Typography</a>
                  </li>
                  <li>
                    <a href="spinners.html">Spinners</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-title">
                <h6 class="m-0 text-truncate fw-bold small">Forms & Tables</h6>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-ui-checks-grid"></i>
                  <span class="menu-text">Forms</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="form-inputs.html">Form Inputs</a>
                  </li>
                  <li>
                    <a href="form-input-groups.html">Input Groups</a>
                  </li>
                  <li>
                    <a href="form-select-dropdowns.html">Select Dropdowns</a>
                  </li>
                  <li>
                    <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                  </li>
                  <li>
                    <a href="form-file-input.html">File Input</a>
                  </li>
                  <li>
                    <a href="form-validations.html">Validations</a>
                  </li>
                  <li>
                    <a href="date-time-pickers.html">Date Time Pickers</a>
                  </li>
                  <li>
                    <a href="form-layouts.html">Form Layouts</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="tables.html">
                  <i class="bi bi-border-all"></i>
                  <span class="menu-text">Tables</span>
                </a>
              </li>
              <li>
                <a href="datatables.html">
                  <i class="bi bi-border-inner"></i>
                  <span class="menu-text">Data Tables</span>
                </a>
              </li>
              <li class="sidebar-title">
                <h6 class="m-0 text-truncate fw-bold small">Grapgs and Maps</h6>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-bar-chart"></i>
                  <span class="menu-text">Graphs</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="apex.html">Apex</a>
                  </li>
                  <li>
                    <a href="morris.html">Morris</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="maps.html">
                  <i class="bi bi-pin-map"></i>
                  <span class="menu-text">Maps</span>
                </a>
              </li>
              <li class="sidebar-title">
                <h6 class="m-0 text-truncate fw-bold small">Authentication</h6>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-upc-scan"></i>
                  <span class="menu-text">Login/Signup</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="login.html">Login</a>
                  </li>
                  <li>
                    <a href="signup.html">Signup</a>
                  </li>
                  <li>
                    <a href="forgot-password.html">Forgot Password</a>
                  </li>
                  <li>
                    <a href="reset-password.html">Reset Password</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="page-not-found.html">
                  <i class="bi bi-exclamation-triangle"></i>
                  <span class="menu-text">404</span>
                </a>
              </li>
              <li>
                <a href="comingsoon.html">
                  <i class="bi bi-exclamation-octagon"></i>
                  <span class="menu-text">Coming Soon</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-code-square"></i>
                  <span class="menu-text">Menu Level</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="#!">Level One Link</a>
                  </li>
                  <li>
                    <a href="#!">
                      Level One Menu
                      <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                        <a href="#!">Level Two Link</a>
                      </li>
                      <li>
                        <a href="#!">Level Two Menu
                          <i class="bi bi-chevron-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li>
                            <a href="#!">Level Three</a>
                          </li>
                          <li>
                            <a href="#!">Level Three</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#!">Level One Link</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#!">
                  <i class="bi bi-arrow-left-right"></i>
                  <span class="menu-text">Badge Fill</span>
                  <span class="badge bg-primary ms-2">3</span>
                </a>
              </li>
              <li>
                <a href="#!">
                  <i class="bi bi-ticket-perforated"></i>
                  <span class="menu-text">Badge Outline</span>
                  <span class="badge border border-primary text-primary ms-2">Tag</span>
                </a>
              </li>
              <li>
                <a href="#!" class="disabled">
                  <i class="bi bi-stars"></i>
                  <span class="menu-text">Disabled Link</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- Sidebar menu ends -->

          <!-- Sidebar settings starts -->
          <div class="sidebar-settings gap-1 d-lg-flex d-none">
            <a href="profile.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Profile">
              <i class="bi bi-person"></i>
            </a>
            <a href="settings.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Settings">
              <i class="bi bi-gear"></i>
            </a>
            <a href="widgets.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Widgets">
              <i class="bi bi-box"></i>
            </a>
            <a href="contact-us.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Contact Us">
              <i class="bi bi-phone-vibrate"></i>
            </a>
            <a href="login.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
              <i class="bi bi-power"></i>
            </a>
          </div>
          <!-- Sidebar settings ends -->

        </nav>
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App hero header starts -->
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
          <!-- App Hero header ends -->

          <!-- App body starts -->
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
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer">
            <span class="small">© Bootstrap Gallery 2025</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/home/conversions.js"></script>
    <script src="assets/vendor/apex/custom/home/income.js"></script>
    <script src="assets/vendor/apex/custom/home/visits-conversions.js"></script>

    <!-- Rating -->
    <script src="assets/vendor/rating/raty.js"></script>
    <script src="assets/vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>


<!-- Mirrored from bootstrapget.com/demos/sporty-admin-dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 16:17:58 GMT -->
</html>