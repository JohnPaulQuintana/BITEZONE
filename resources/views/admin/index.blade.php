<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
    <title>{{ config('app.name', 'BITEZONE') }}</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    {{-- <h1>Admin Dashboard</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit"
            class="w-full block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
            out</button>
    </form> --}}

    <div id="layout-wrapper">

        <header id="page-topbar">
            @include('admin.components.header.header')
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            @include('admin.components.sidebar.sidebar')
        </div>
        <!-- Left Sidebar End -->

         <!-- Start right Content here -->
         <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        @yield('contents')
                    </div>
                    <!-- end row -->
                </div>

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                @include('admin.components.footer.footer')
            </footer>

        </div>
        <!-- end main content-->

    </div>

    @yield('scripts')

    <script>
        $(document).ready(function(){
            $('.noti-dot').css({'display': 'none'})
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('38d8287d081fbd212033', {
                cluster: 'ap1'
            });

            var channel = pusher.subscribe('notify-admin');
            channel.bind('initialize-notif', function(data) {
                // notif: firstname: "john paul"
                // id: 10
                // lastname: "Yulde"
                // middlename: "yulde"
                console.log(data.notif);
                var renderNotif = ''

                // means new patients is registered
                if (data.notif.role == 0) {
                    renderNotif += `
                        <a class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mb-1 text-primary">${data.notif.firstname} ${data.notif.lastname}</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">has registered to bitezone</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 minutes ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    `


                }
                $('.notif-container').html(renderNotif)
                $('.noti-dot').css({'display': 'flex'})
            });

        })
    </script>
</body>
</html>