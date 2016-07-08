<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Global stylesheets -->
<<<<<<< HEAD
        <!--<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">-->
=======
<!--        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">-->
>>>>>>> e1b835d3cc69de0a85dbf2acf083602648e5e282
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
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/plugins/pickers/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugin/limitless/assets/js/core/app.js')}}"></script>
        <!--<script type="text/javascript" src="{{asset('plugin/limitless/assets/js/pages/dashboard.js')}}"></script>-->
        <!-- /theme JS files -->
    </head>
    <body>
        <!-- Main navbar -->
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('plugin/limitless/assets/images/logo_light.png')}}" alt=""></a>
                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
            </div>
            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bubbles4"></i>
                            <span class="visible-xs-inline-block position-right">Messages</span>
                            <span class="badge bg-warning-400">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-content width-350">
                            <div class="dropdown-content-heading">
                                Messages
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-compose"></i></a></li>
                                </ul>
                            </div>
                            <ul class="media-list dropdown-content-body">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{asset('plugin/limitless/assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt="">
                                        <span class="badge bg-danger-400 media-badge">5</span>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">James Alexander</span>
                                            <span class="media-annotation pull-right">04:58</span>
                                        </a>
                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{asset('plugin/limitless/assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt="">
                                        <span class="badge bg-danger-400 media-badge">4</span>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Margo Baker</span>
                                            <span class="media-annotation pull-right">12:16</span>
                                        </a>
                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img src="{{asset('plugin/limitless/assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Jeremy Victorino</span>
                                            <span class="media-annotation pull-right">22:48</span>
                                        </a>
                                        <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img src="{{asset('plugin/limitless/assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Beatrix Diaz</span>
                                            <span class="media-annotation pull-right">Tue</span>
                                        </a>
                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img src="{{asset('plugin/limitless/assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Richard Vango</span>
                                            <span class="media-annotation pull-right">Mon</span>
                                        </a>

                                        <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('plugin/limitless/assets/images/placeholder.jpg')}}" alt="">
                            <span>{{$user->name}}</span>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                            <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                            <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                            <li><a href="{{url('auth/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->
        <!-- Page container -->
        <div class="page-container">
            <!-- Page content -->
            <div class="page-content">
                @include('partials.sidebar')
                <!-- Main content -->
                <div class="content-wrapper">
                    <!-- Page header -->
                    <div class="page-header">
                        <div class="breadcrumb-line">
                            <ul class="breadcrumb">
                                <li><a href="{{url('/dashboard')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                                <li class="active">Dashboard</li>
                            </ul>
                            <ul class="breadcrumb-elements">
                                <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-gear position-left"></i>
                                        Settings
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /page header -->
                    <!-- Content area -->
                    <div class="content">
                        @yield('content')
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
