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
</body>
</html>