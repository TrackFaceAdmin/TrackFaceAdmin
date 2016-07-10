<!DOCTYPE html>
<html lang="as">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Global stylesheets -->
        <link href="{{asset('plugin/limitless/assets/css/fonts.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugin/limitless/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugin/limitless/assets/css/minified/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugin/limitless/assets/css/minified/core.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugin/limitless/assets/css/minified/components.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugin/limitless/assets/css/minified/colors.min.css')}}" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->
        <!-- Core JS files -->
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/loaders/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/core/libraries/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/core/libraries/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/loaders/blockui.min.js')}}"></script>
        <!-- /core JS files -->
        <!-- Theme JS files -->
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/core/app.js')}}"></script>
        <!-- /theme JS files -->
    </head>
    <body>
        <!-- Main navbar -->
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('plugin/limitless/assets/images/logo_light.png')}}" alt=""></a>
                <ul class="nav navbar-nav pull-right visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->
        <!-- Page container -->
        <div class="page-container login-container">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main content -->
                <div class="content-wrapper">
                    <!-- Content area -->
                    <div class="content">
                        <!-- Error wrapper -->
                        <div class="container-fluid text-center">
                            <h1 class="error-title">@yield('error_code')</h1>
                            <h6 class="text-semibold content-group">@yield('error_message')</h6>
                        </div>
                        <!-- /error wrapper -->
                        <!-- Footer -->
                        <div class="footer text-muted">
                            &copy; 2016. <a href="{{url('/')}}">TrackFace Web App</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                        </div>
                        <!-- /footer -->
                    </div>
                    <!-- /content area -->
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
        </div>
        <!-- /page container -->
    </body>
</html>
