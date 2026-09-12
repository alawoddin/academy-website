<nav id="sidebar" class="sidebar-wrapper">

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li class="sidebar-title">
                <h6 class="m-0 text-truncate fw-bold small">Dashboards</h6>
              </li>
              <li class="current-page">
                <a href="{{ route('instructor.dashboard') }}">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Dashboard</span>
                </a>
              </li>
            
              
            
           
            
         
              <li>
                <a href="{{ route('instructor.profile') }}">
                  <i class="bi bi-filter-circle"></i>
                  <span class="menu-text">User Profile</span>
                </a>
              </li>
              <li>
                <a href="{{ route('instructor.teacher') }}">
                  <i class="bi bi-person-badge"></i>
                  <span class="menu-text">Teacher Page</span>
                </a>
              </li>
              <li>
                <a href="{{ route('instructor.courses') }}">
                  <i class="bi bi-journal-text"></i>
                  <span class="menu-text">My Courses</span>
                </a>
              </li>
              <li>
                <a href="{{ route('instructor.change.password') }}">
                  <i class="bi bi-gear"></i>
                  <span class="menu-text">Account Settings</span>
                </a>
              </li>
             
            
           
            
         
            
         
       
             
       
            </ul>
          </div>
          <!-- Sidebar menu ends -->

          <!-- Sidebar settings starts -->
          <div class="sidebar-settings gap-1 d-lg-flex d-none">
            <a href="{{ route('instructor.profile') }}" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Profile">
              <i class="bi bi-person"></i>
            </a>
            <a href="{{ route('instructor.change.password') }}" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
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
            <a href="{{ route('instructor.logout') }}" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
              <i class="bi bi-power"></i>
            </a>
          </div>
          <!-- Sidebar settings ends -->

        </nav>