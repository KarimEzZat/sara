<ul class="navbar-nav bg-gradient-red sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
        <div class="sidebar-brand-icon mr-2">
            <i class="fab fa-free-code-camp"></i>
        </div>
        <div class="sidebar-brand-text">Sara</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Auth::user()->isAdmin() ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user.index') }}"><i class="fa fa-users mr-2"></i>Users</a>
                <a class="collapse-item" href="{{ route('header.index') }}"><i class="far fa-image mr-2"></i>Header</a>
                <a class="collapse-item" href="{{ route('about.index') }}"><i class="far fa-question-circle mr-2"></i>About</a>
                <a class="collapse-item" href="{{ route('skill.index') }}"><i
                        class="fa fa-sliders-h mr-2"></i>Skills</a>
                <a class="collapse-item" href="{{ route('services.index') }}"><i class="fa fa-laptop mr-2"></i>Services</a>
                <a class="collapse-item" href="{{ route('experiences.index') }}"><i class="fa fa-briefcase mr-2"></i>Experience</a>
                <a class="collapse-item" href="{{ route('education.index') }}"><i class="fa fa-school mr-2"></i>Education</a>
                <a class="collapse-item" href="{{ route('works.index') }}"><i class="fa fa-video mr-2"></i>Portfolio</a>
                <a class="collapse-item" href="{{ route('categories.index') }}"><i class="fa fa-th mr-2"></i>Categories</a>
                <a class="collapse-item" href="{{ route('counters.index') }}"><i class="fa fa-fire mr-2"></i>Counter</a>
                <a class="collapse-item" href="{{ route('testimonials.index') }}"><i class="far fa-comments mr-2"></i>Testimonials</a>
                <a class="collapse-item" href="{{ route('blogs.index') }}"><i class="far fa-newspaper mr-2"></i>Blogs</a>
                <a class="collapse-item" href="{{ route('footer.index') }}"><i
                        class="far fa-copyright mr-2"></i>Footer</a>
                <a class="collapse-item" href="{{ route('socials.index') }}"><i class="far fa-thumbs-up mr-2"></i>Socials</a>
                <a class="collapse-item" href="{{ route('contacts') }}"><i class="far fa-envelope mr-2"></i>Contacts</a>
                <a class="collapse-item" href="{{ route('seo.index') }}"><i class="far fa-chart-bar mr-2"></i>SEO</a>
                <a class="collapse-item" href="{{ route('settings.edit') }}"><i class="fas fa-cog mr-2"></i>Settings</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-list"></i>
            <span>Layout</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('layout.header') }}"><i class="far fa-image mr-2"></i>Header</a>
                <a class="collapse-item" href="{{ route('layout.about') }}"><i class="far fa-question-circle mr-2"></i>About</a>
                <a class="collapse-item" href="{{ route('layout.footer') }}"><i class="far fa-copyright mr-2"></i>Footer</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.profile') }}">
            <i class="fa fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
