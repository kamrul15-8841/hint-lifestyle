<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ URL('dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm" style="color: white; font-size:15px">
                        {{-- HINT --}}
                        <img src="{{ URL::asset('assets/images/HINT.png') }}" alt="" height="10">
                    </span>
                    <span class="logo-lg" style="color: white; font-size:25px">
                        {{-- HINT Lifestyle --}}
                        <img src="{{ URL::asset('assets/images/HINT.png') }}" alt="" height="30">
                    </span>
                </a>

                <a href="{{ URL('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm" style="color: white; font-size:15px">
                        {{-- HINT --}}
                        <img src="{{ URL::asset('assets/images/HINT.png') }}" alt="" height="10">
                    </span>
                    <span class="logo-lg" style="color: white; font-size:25px">
                        {{-- HINT Lifestyle --}}
                        <img src="{{ URL::asset('assets/images/HINT.png') }}" alt="" height="30">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" style="border: 2px solid #CCC"
                        src="{{ URL::asset('assets/images/users/default-user.png') }}" alt="User">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle me-1"></i>
                        <span key="t-profile">Profile</span></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle me-1"></i>
                        <span key="t-profile">Password Change</span></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ URL('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                            key="t-logout">Logout</span></a>

                            <form id="logout-form" action="{{ URL('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                </div>
            </div>
        </div>
    </div>
</header>
