<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        {{-- <link rel="shortcut icon" href="{{asset('assets/images/gsm_logo.png')}}"> --}}

        <title>E-Learning GSM</title>
        <link href="https://fonts.googleapis.com/css?family=Passion+One|Patua+One" rel="stylesheet"> 
        <!--Morris Chart CSS -->
		{{-- <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}"> --}}
        <link href="{{asset('assets/plugins/bootstrap-sweetalert/sweet-alert.css')}}" rel="stylesheet" type="text/css">

        {{-- Sweet Alert --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        {{-- Select --}}

        <link href="{{asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/select2/css/select2.min.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <style>
            /* Set the size of the div element that contains the map */
           #map {
             height: 400px;  /* The height is 400 pixels */
             width: 100%;  /* The width is the width of the web page */
            }
         </style>
     
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><span>E-Learning GSM</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group slimscroll-noti notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus noti-pink"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                              
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                        <li>
                            <a href="javascript:void(0);"><i class=" ti-home"></i><span>Homepage</span><span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/elearning') }}">Welcome Page</a></li>
                                <li><a href="{{ url('/berita') }}">Berita GSM</a></li>
                                <li><a href="{{ url('/persebaran') }}">Persebaran GSM</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="ti-user"></i><span>Profil User</span><span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/detailuser') }}">Detail User</a></li>
                                <li><a href="{{ url('/editprofile') }}">Edit Profil</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span class="label label-primary pull-right">2</span><span> Materi Pelatihan </span></a>
                            <ul class="list-unstyled">
                                    <li><a href="{{ url('/materibasic') }}">Level Basic</a></li>
                                    <li><a href="{{ url('/materiadvanced') }}">Level Advanced</a></li>
                                </ul>
                        </li>
                        <li class="has_sub">
                                <a href="{{ url('/pendampingan') }}" class="waves-effect"><i class="fa fa-comment-o"></i> <span> Pendampingan </span></a>
                            </li>
                       
                            {{-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" ti-pencil-alt"></i><span class="label label-success pull-right">2</span><span>Linimasa Perubahan</span></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/uploadperubahan') }}">Uplaod Perubahan Anda</a></li>
                                    <li><a href="{{ url('/perubahangurulain') }}">Lihat Perubahan Guru Lain</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            @yield('content')
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>
		
        <!-- jQuery  -->
        {{-- <script src="{{asset('assets/js/jquery.min.js')}}"></script> --}}
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
        <!-- jQuery  -->
        <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
        {{-- <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script> --}}
        <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>

        {{-- Select and form select  --}}
        <script src="{{asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{asset('assets/plugins/switchery/js/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
        <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>

        <!-- Todojs  -->
        <script src="{{asset('assets/pages/jquery.todo.js')}}"></script>

        <!-- chatjs  -->
        <script src="{{asset('assets/pages/jquery.chat.js')}}"></script>
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>
        <script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>		
        <script src="{{asset('assets/pages/jquery.dashboard_2.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('assets/plugins/autocomplete/jquery.autocomplete.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/plugins/autocomplete/countries.js')}}"></script>
        {{-- <script type="text/javascript" src="{{asset('assets/pages/autocomplete.js')}}"></script> --}}
        <script type="text/javascript" src="{{asset('assets/pages/jquery.form-advanced.init.js')}}"></script>

        <!--form validation init-->
        <script src="{{asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>       
        <link rel="stylesheet" href="{{asset('assets/plugins/pace_master/themes/blue/pace-theme-minimal.css')}}">
        <script src="{{asset('assets/plugins/pace_master/pace.js')}}" type="text/javascript"></script>

        {{-- Pace --}}

        <script>
      jQuery(document).ready(function($) {
        function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
        }
        var token_user=getCookie("token_login_user_gsm")
        // console.log(token_user)
        if(token_user==""){
            window.location="login"
        }
            });
    </script>
    </body>
</html>