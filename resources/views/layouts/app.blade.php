<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta name="format-detection" content="telephone=no">

    <title>@yield('title')|GKZ</title>
    <!-- includes to style -->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>

<body>

    <!-- Page Wrapper -->
    <div id="main-wrapper">
        <!-- Topbar -->
        @include('includes.header')
        <!-- End of Topbar -->
        <!-- Sidebar -->
        @include('includes.sidebar')
        <!-- End of Sidebar -->
        <!-- mesaage -->
        <!-- Begin Page Content -->
        @yield('content')
        <!-- /.container-fluid -->

        <!-- End of Main Content -->

        <!-- Footer -->
        @include('includes.footer')
        <!-- End of Footer -->
        <!-- Bootstrap core JavaScript-->
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

</body>

</html>
