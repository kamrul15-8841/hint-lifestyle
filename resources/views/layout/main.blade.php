<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title','Dashboard') | HINT Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="HINT Lifestyle" name="description" />
    <meta content="HINT" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- App favicon -->
 <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

 <!-- DataTables -->
 <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

 <!-- Responsive datatable examples -->
 <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />


 <!-- Bootstrap Css -->
 <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <!-- Icons Css -->
 <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
 <!-- App Css-->
 <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert-->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--    select2--}}
    <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@yield('header')
 <!-- App js -->
 <script src="{{ asset('assets/js/plugin.js') }}"></script>

</head>

<body data-sidebar="dark">

 <!-- Begin page -->
 <div id="layout-wrapper">

     <!-- ============================================================== -->
     <!-- Header Start -->
     <!-- ============================================================== -->
     @include('layout.header')
     <!-- ============================================================== -->
     <!-- Header End -->
     <!-- ============================================================== -->

     <!-- ============================================================== -->
     <!-- Menu Start -->
     <!-- ============================================================== -->
     <div class="vertical-menu">
         <div data-simplebar class="h-100">
             @include('layout.sidebar')
         </div>
     </div>
     <!-- ============================================================== -->
     <!-- Menu Start -->
     <!-- ============================================================== -->


     <!-- ============================================================== -->
     <!-- Content Start-->
     <!-- ============================================================== -->
     <div class="main-content">

         <div class="page-content">
             <div class="container-fluid">
                 @yield('content')
             </div>
         </div>

         @include('layout.footer')
     </div>
     <!-- ============================================================== -->
     <!-- Content End-->
     <!-- ============================================================== -->

 </div>


 <!-- Right bar overlay-->
 <div class="rightbar-overlay"></div>
 <script>
     document.addEventListener('DOMContentLoaded', function () {
         @if (session('success'))
         Swal.fire({
             icon: 'success',
             title: 'Success',
             text: "{{ session('success') }}",
             confirmButtonText: 'OK'
         });
         @endif

         @if (session('error'))
         Swal.fire({
             icon: 'error',
             title: 'Error',
             text: "{{ session('error') }}",
             confirmButtonText: 'OK'
         });
         @endif
     });
 </script>


 <!-- JAVASCRIPT -->
 <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
 <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

 <!-- apexcharts -->
  <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>


 @stack('body-scripts')

 <!-- Required datatable js -->
 <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <!-- Buttons examples -->
 <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
 <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

 <!-- Responsive examples -->
 <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>


 <!-- Datatable init js -->
 <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
 <!-- Sweet Alerts js -->
 <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
 <script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>
 <script src="{{ asset('assets/js/app.js') }}"></script>
 @yield('jsLink')


</body>

</html>
