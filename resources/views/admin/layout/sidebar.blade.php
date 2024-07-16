<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('img/skibidi.png') }}" alt="Custom Image" class="custom-icon" style="width: 2rem; height: 2rem;">
        </div>
        <div class="sidebar-brand-text mx-3">SKIBIDICMS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Posts
    </div>

    <!-- Nav Item - Manage Posts -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManagePosts" aria-expanded="true" aria-controls="collapseManagePosts">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage</span>
        </a>
        <div id="collapseManagePosts" class="collapse" aria-labelledby="headingManagePosts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Posts:</h6>
                <a class="collapse-item" href="{{ route('admin.post.create') }}">Create</a>
                <a class="collapse-item" href="{{ route('admin.post.detail') }}">Details</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Users
    </div>

    <!-- Nav Item - Manage Users -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManageUsers" aria-expanded="true" aria-controls="collapseManageUsers">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage</span>
        </a>
        <div id="collapseManageUsers" class="collapse" aria-labelledby="headingManageUsers" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Users:</h6>
                <a class="collapse-item" href="{{ route('admin.user.create') }}">Create</a>
                <a class="collapse-item" href="{{ route('admin.user.detail') }}">Details</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Categories
    </div>

    <!-- Nav Item - Manage Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManageCategories" aria-expanded="true" aria-controls="collapseManageCategories">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage</span>
        </a>
        <div id="collapseManageCategories" class="collapse" aria-labelledby="headingManageCategories" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Categories:</h6>
                <a class="collapse-item" href="{{ route('admin.category.create') }}">Create</a>
                <a class="collapse-item" href="{{ route('admin.category.detail') }}">Details</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->