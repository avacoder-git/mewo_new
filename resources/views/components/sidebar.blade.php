<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    @if(auth()->user()->userHasRole('administrator')|| auth()->user()->userHasRole('owner'))
        <x-sidebar-users></x-sidebar-users>
    @endif
    <hr class="sidebar-divider d-none d-md-block">

    <x-sidebar-zayavki></x-sidebar-zayavki>
    <hr class="sidebar-divider d-none d-md-block">

    <x-general></x-general>
    <x-video-comment-links></x-video-comment-links>
    <x-certificates-links></x-certificates-links>
    <x-coworkers-links></x-coworkers-links>
    <x-videos-link></x-videos-link>
    <x-deseases-links></x-deseases-links>
    <x-reviews-links></x-reviews-links>
    <x-property-links></x-property-links>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
