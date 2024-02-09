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

    <div id="layout-wrapper">

        <header id="page-topbar">
            @include('patient.components.header.header')
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            @include('patient.components.sidebar.sidebar')
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
                @include('patient.components.footer.footer')
            </footer>

        </div>
        <!-- end main content-->

    </div>

    @yield('scripts')

    <script>
        $(document).ready(function(){
            $('.noti-dot').css({'display': 'none'})
        })
    </script>
</body>
</html>