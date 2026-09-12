<nav id="sidebar" class="sidebar-wrapper">

    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
        <ul class="sidebar-menu">
            <li class="sidebar-title">
                <h6 class="m-0 text-truncate fw-bold small">Website</h6>
            </li>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-pie-chart"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.banner') }}">
                    <i class="bi bi-image"></i>
                    <span class="menu-text">Banner</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.feature') }}">
                    <i class="bi bi-stars"></i>
                    <span class="menu-text">Features</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.about') }}">
                    <i class="bi bi-info-circle"></i>
                    <span class="menu-text">About</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.aboutcard') }}">
                    <i class="bi bi-card-text"></i>
                    <span class="menu-text">About Cards</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.brand') }}">
                    <i class="bi bi-award"></i>
                    <span class="menu-text">Brands</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.category') }}">
                    <i class="bi bi-grid"></i>
                    <span class="menu-text">Categories</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.course') }}">
                    <i class="bi bi-journal-bookmark"></i>
                    <span class="menu-text">Courses</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.team') }}">
                    <i class="bi bi-people"></i>
                    <span class="menu-text">Team</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.discount') }}">
                    <i class="bi bi-percent"></i>
                    <span class="menu-text">Discount</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.testimonial') }}">
                    <i class="bi bi-chat-quote"></i>
                    <span class="menu-text">Testimonials</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.blog') }}">
                    <i class="bi bi-newspaper"></i>
                    <span class="menu-text">Blogs</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.contact') }}">
                    <i class="bi bi-telephone"></i>
                    <span class="menu-text">Contact</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.faq') }}">
                    <i class="bi bi-question-circle"></i>
                    <span class="menu-text">FAQ's</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.gallery') }}">
                    <i class="bi bi-images"></i>
                    <span class="menu-text">Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.join') }}">
                    <i class="bi bi-person-plus"></i>
                    <span class="menu-text">Become Teacher</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.join.application') }}">
                    <i class="bi bi-file-earmark-person"></i>
                    <span class="menu-text">Teacher Applications</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.instructor') }}">
                    <i class="bi bi-person-check"></i>
                    <span class="menu-text">Instructors</span>
                    @if (($pendingInstructorCount ?? 0) > 0)
                        <span class="badge bg-primary ms-2">{{ $pendingInstructorCount }}</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('all.contact.message') }}">
                    <i class="bi bi-envelope"></i>
                    <span class="menu-text">Contact Messages</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all.faq.message') }}">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="menu-text">FAQ Questions</span>
                </a>
            </li>











        </ul>
    </div>
    <!-- Sidebar menu ends -->

    <!-- Sidebar settings starts -->
    <div class="sidebar-settings gap-1 d-lg-flex d-none">
        <a href="{{ route('admin.profile') }}" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Profile">
            <i class="bi bi-person"></i>
        </a>
        <a href="{{ route('admin.change.password') }}" class="settings-icon" data-bs-toggle="tooltip"
            data-bs-placement="top" title="Settings">
            <i class="bi bi-gear"></i>
        </a>
        <a href="widgets.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Widgets">
            <i class="bi bi-box"></i>
        </a>
        <a href="contact-us.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Contact Us">
            <i class="bi bi-phone-vibrate"></i>
        </a>
        <a href="{{ route('admin.logout') }}" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Logout">
            <i class="bi bi-power"></i>
        </a>
    </div>
    <!-- Sidebar settings ends -->

</nav>
