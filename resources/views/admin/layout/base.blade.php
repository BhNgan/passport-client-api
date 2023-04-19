<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>TinyCore - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <link href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        @include('admin.partial.navbar')
        
        <!-- Left Sidebar -->
        @include('admin.partial.sidebar')
        <!-- Left Sidebar -->

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    @include('admin.partial.alert')
                    @yield('content')
                    @include('admin.partial.confirmation-dialog')

                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Crovex <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/feather.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>

        <script src="{{asset('plugins/moment/moment.js')}}"></script>
        <script src="{{asset('plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.canvaswrapper.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.colorhelpers.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.js')}}"></script>        
        <script src="{{asset('plugins/flot-chart/jquery.flot.saturated.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.browser.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.drawSeries.js')}}"></script> 
        <script src="{{asset('plugins/flot-chart/jquery.flot.uiConstants.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot-dataType.js')}}"></script>
        <script src="{{asset('assets/pages/jquery.crm_dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

        <script>
            $(document).ready(function(){
                @stack('ready')
            });
        </script>
        @stack('script')
        
    </body>

</html>