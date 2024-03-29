<div class="navbar-header">
    <div class="d-flex">

        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="https://pngimg.com/d/plus_PNG65.png" alt="logo-sm" height="30">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('img/logo.png') }}" alt="logo-dark" height="50">
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('img/logo.png') }}" alt="logo-sm-light" height="50">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('img/logo.png') }}" alt="logo-light" height="50">
                    {{-- <span class="text-white"><b>Document Tracking</b></span> --}}
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
            <i class="ri-menu-2-line align-middle text-primary"></i>
        </button>
    </div>

    <div class="d-flex">
        {{-- notification --}}
        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-notification-3-line"></i>
                <span class="noti-dot">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger count-notif">
                        1
                      </span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-0"> Notifications </h6>
                        </div>
                        <div class="col-auto">
                            {{-- <a href="#!" class="small"> View All</a> --}}
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px; overflow-y:auto;" class="notif-container">
                   
                </div>
                <div class="p-2 border-top">
                    <div class="d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            {{-- <i class="mdi mdi-arrow-right-circle me-1"></i> View More.. --}}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- users profile --}}
        <div class="dropdown d-inline-block user-dropdown">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" 
                    src="{{ 
                        Auth::user()->profile
                        ? asset('storage/'.Auth::user()->profile)
                        : asset('storage/profiles/default.jpg')
                    }}" 
                    alt="Header Avatar">
                <span class="d-none d-xl-inline-block ms-1 text-primary">{{ Auth::user()->firstname }}</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                <div class="dropdown-divider"></div>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item text-danger" :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i> 
                        {{ __('Logout') }}
                    </a>
                </form>
            </div>
        </div>

    </div>
</div>