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
                <a href="{{ route('patient.dashboard') }}" class="waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('appointment') }}" class="waves-effect">
                    <i class="ri-file-list-3-line text-info"></i>
                    <span>My Appointment</span>
                </a>
            </li>
            <li>
                <a href="{{ route('rhu') }}" class="waves-effect">
                    <i class="ri-user-2-fill text-danger"></i>
                    <span>Rural Health Unit</span>
                </a>
            </li>
            <li>
                <a href="{{ route('announcement.public') }}" class="waves-effect">
                    <i class="ri-calendar-event-fill text-primary"></i>
                    <span>Event's and Seminar</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dnd.public') }}" class="waves-effect">
                    <i class="ri-calendar-check-fill text-warning"></i>
                    <span>Do's and Don't</span>
                </a>
            </li>
            

            <li class="menu-title">Date and Time</li>
            
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