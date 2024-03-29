<div data-simplebar class="h-100 border">

    <!-- User details -->
    <div class="user-profile text-center mt-3">
        <div class="">
            <img 
                src="{{ 
                    Auth::user()->profile
                    ? asset('storage/'.Auth::user()->profile)
                    : asset('storage/profiles/default.jpg')
                }}" 
                alt="" class="avatar-md rounded-circle">
        </div>
        <div class="mt-3">
            <h4 class="font-size-16 mb-1">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h4>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- <li>
                <a href="#" class="waves-effect">
                    <i class="ri-file-list-3-line text-info"></i>
                    <span>Consultation form</span>
                </a>
            </li> --}}
            <li>
                <a href="#" class="waves-effect">
                    <i class="ri-user-2-fill text-danger"></i>
                    <span>Patient's Record</span>
                </a>
            </li>
            <li>
                <a href="#" class="waves-effect">
                    <i class="ri-calendar-event-fill text-primary"></i>
                    <span>Seminar's</span>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('administrator.dashboard.incoming.request') }}" class="waves-effect">
                    <i class="fas fa-file"></i><span class="badge rounded-pill bg-success float-end"></span>
                    <span>Requests</span>
                </a>
            </li>
            <li>
                <a href="{{ route('administrator.dashboard.my.request') }}" class="waves-effect">
                    <i class="fas fa-file"></i><span class="badge rounded-pill bg-success float-end"></span>
                    <span>My Request</span>
                </a>
            </li>
            <li>
                <a href="{{ route('administrator.dashboard.monitor') }}" class="waves-effect">
                    <i class="fas fa-file"></i><span class="badge rounded-pill bg-success float-end"></span>
                    <span>Monitor Documents</span>
                </a>
            </li>
            <li>
                <a href="{{ route('administrator.dashboard.offices') }}" class="waves-effect">
                    <i class="fas fa-building"></i>
                    <span>Offices</span>
                </a>
            </li>
            <li>
                <a href="{{ route('reportsPdf') }}" class="waves-effect">
                    <i class="ri-bar-chart-grouped-line"></i>
                    <span>Reports</span>
                </a>
            </li>
            <li>
                <a href="{{ route('history') }}" class="waves-effect">
                    <i class="ri-history-line"></i>
                    <span>Logs</span>
                </a>
            </li> --}}
            {{-- <li>
                <form method="POST" action="{{ route('logout') }}" class="waves-effect">
                    @csrf
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt align-middle me-1 text-danger"></i> 
                        <span>{{ __('Logout') }}</span>
                    </a>
                </form>
            </li> --}}

            <li class="menu-title">Date and Time</li>
            {{-- <hr class="text-dark"> --}}
            <li>
                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                    <i class="far fa-calendar-alt text-dark"></i>
                    
                    <span class="current-date text-dark">12:00 PM</span>
                </a>
            </li>
            {{-- <hr class="text-dark"> --}}
        </ul>
        <!-- Add a container for the time display -->
        {{-- <div class="time-display bg-dark" style="text-align: center;padding: 10px; background-color: #f5f5f5;border-top: 1px solid #ddd;display:flex;flex-direction:column; position: absolute;width:100%;bottom:0;">
            <!-- Display the time here -->
            <span class="current-date text-white" style="font-size: 18px;color: #333;">12:00 PM</span>
            <!-- Display the time here -->
            <span class="current-time text-white" style="font-size: 18px;color: #333;">12:00 PM</span>
        </div> --}}
    </div>
    <!-- Sidebar -->
</div>