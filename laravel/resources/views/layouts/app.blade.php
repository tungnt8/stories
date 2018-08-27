<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from byrushan.com/projects/ma/1-7-1/jquery/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2017 09:49:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Admin</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/chosen/chosen.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('css/app_1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app_2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
    <header id="header" class="clearfix" data-ma-theme="blue">
        <ul class="h-inner">
            <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
                <div class="line-wrap">
                    <div class="line top"></div>
                    <div class="line center"></div>
                    <div class="line bottom"></div>
                </div>
            </li>

            <li class="hi-logo hidden-xs">
                <a href="index.html">Material Admin</a>
            </li>

            <li class="pull-right">
                <ul class="hi-menu">

                    <li data-ma-action="search-open">
                        <a href="#"><i class="him-icon zmdi zmdi-search"></i></a>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" href="#">
                            <i class="him-icon zmdi zmdi-email"></i>
                            <i class="him-counts">6</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="list-group">
                                <div class="lg-header">
                                    Messages
                                </div>
                                <div class="lg-body">
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">David Belle</div>
                                            <small class="lgi-text">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Jonathan Morris</div>
                                            <small class="lgi-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Fredric Mitchell Jr.</div>
                                            <small class="lgi-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Glenn Jecobs</div>
                                            <small class="lgi-text">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Bill Phillips</div>
                                            <small class="lgi-text">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </a>
                                </div>
                                <a class="view-more" href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="#">
                            <i class="him-icon zmdi zmdi-notifications"></i>
                            <i class="him-counts">9</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="list-group him-notification">
                                <div class="lg-header">
                                    Notification

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="#" data-ma-action="clear-notification">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lg-body">
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">David Belle</div>
                                            <small class="lgi-text">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Jonathan Morris</div>
                                            <small class="lgi-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Fredric Mitchell Jr.</div>
                                            <small class="lgi-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Glenn Jecobs</div>
                                            <small class="lgi-text">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </a>
                                    <a class="list-group-item media" href="#">
                                        <div class="pull-left">
                                            <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Bill Phillips</div>
                                            <small class="lgi-text">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </a>
                                </div>

                                <a class="view-more" href="#">View Previous</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" href="#">
                            <i class="him-icon zmdi zmdi-view-list-alt"></i>
                            <i class="him-counts">2</i>
                        </a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="list-group">
                                <div class="lg-header">
                                    Tasks
                                </div>
                                <div class="lg-body">
                                    <div class="list-group-item">
                                        <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="lgi-heading m-b-5">Google Chrome Extension</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="lgi-heading m-b-5">Social Intranet Projects</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="lgi-heading m-b-5">Bootstrap Admin Template</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="lgi-heading m-b-5">Youtube Client App</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="view-more" href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="#"><i class="him-icon zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="skin-switch hidden-xs">
                                <span class="ss-skin bgm-lightblue" data-ma-action="change-skin" data-ma-skin="lightblue"></span>
                                <span class="ss-skin bgm-bluegray" data-ma-action="change-skin" data-ma-skin="bluegray"></span>
                                <span class="ss-skin bgm-cyan" data-ma-action="change-skin" data-ma-skin="cyan"></span>
                                <span class="ss-skin bgm-teal" data-ma-action="change-skin" data-ma-skin="teal"></span>
                                <span class="ss-skin bgm-orange" data-ma-action="change-skin" data-ma-skin="orange"></span>
                                <span class="ss-skin bgm-blue" data-ma-action="change-skin" data-sma-kin="blue"></span>
                            </li>
                            <li class="divider hidden-xs"></li>
                            <li class="hidden-xs">
                                <a data-ma-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-ma-action="clear-localstorage" href="#"><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i> Other Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs ma-trigger" data-ma-action="sidebar-open" data-ma-target="#chat">
                        <a href="#"><i class="him-icon zmdi zmdi-comment-alt-text"></i></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Top Search Content -->
        <div class="h-search-wrap">
            <div class="hsw-inner">
                <i class="hsw-close zmdi zmdi-arrow-left" data-ma-action="search-close"></i>
                <input type="text">
            </div>
        </div>
    </header>
    <section id="main">
        <aside id="sidebar" class="sidebar c-overflow">
            <div class="s-profile">
                <a href="#" data-ma-action="profile-menu-toggle">
                    <div class="sp-pic">
                        <img src="{{ Auth::user()->avatar  }}" alt="">
                    </div>

                    <div class="sp-info">
                        {{ Auth::user()->full_name }}

                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </a>

                <ul class="main-menu">
                    <li>
                        <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                    </li>
                    <li>
                        <a href="#"><i class="zmdi zmdi-settings"></i> Settings</a>
                    </li>
                    <li>
                        <a href="#"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                    </li>
                </ul>
            </div>

            <ul class="main-menu">
                <li><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-chart"></i> Dashboards</a>

                    <ul>
                        <li><a href="dashboards/analytics.html">Analytics</a></li>
                        <li><a href="dashboards/school.html">School</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Headers</a>

                    <ul>
                        <li><a href="textual-menu.html">Textual menu</a></li>
                        <li><a href="image-logo.html">Image logo</a></li>
                        <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
                    </ul>
                </li>
                <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-widgets"></i> Widgets</a>

                    <ul>
                        <li><a href="widget-templates.html">Templates</a></li>
                        <li><a href="widgets.html">Widgets</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                    <ul>
                        <li><a href="tables.html">Normal Tables</a></li>
                        <li><a href="data-tables.html">Data Tables</a></li>
                    </ul>
                </li>
                <li class="sub-menu active toggled">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                    <ul>
                        <li><a href="form-elements.html">Basic Form Elements</a></li>
                        <li><a class="active" href="form-components.html">Form Components</a></li>
                        <li><a href="form-examples.html">Form Examples</a></li>
                        <li><a href="form-validations.html">Form Validation</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                    <ul>
                        <li><a href="colors.html">Colors</a></li>
                        <li><a href="animations.html">Animations</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="preloaders.html">Preloaders</a></li>
                        <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="other-components.html">Others</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Charts & Maps</a>
                    <ul>
                        <li><a href="flot-charts.html">Flot Charts</a></li>
                        <li><a href="other-charts.html">Other Charts</a></li>
                        <li><a href="maps.html">Maps</a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                    <ul>
                        <li><a href="photos.html">Default</a></li>
                        <li><a href="photo-timeline.html">Timeline</a></li>
                    </ul>
                </li>

                <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample
                        Pages</a>
                    <ul>

                        <li><a href="profile-about.html">Profile</a></li>
                        <li><a href="list-view.html">List View</a></li>
                        <li><a href="messages.html">Messages</a></li>
                        <li><a href="pricing-table.html">Pricing Table</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="wall.html">Wall</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="login.html">Login and Sign Up</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="404.html">Error 404</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                    <ul>
                        <li><a href="form-elements.html">Level 2 link</a></li>
                        <li><a href="form-components.html">Another level 2 Link</a></li>
                        <li class="sub-menu">
                            <a href="#" data-ma-action="submenu-toggle">I have children too</a>

                            <ul>
                                <li><a href="#">Level 3 link</a></li>
                                <li><a href="#">Another Level 3 link</a></li>
                                <li><a href="#">Third one</a></li>
                            </ul>
                        </li>
                        <li><a href="form-validations.html">One more 2</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <section id="content">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                @if (session('success'))
                                    <div role="alert" class="alert alert-success alert-icon alert-dismissible">
                                        <div class="icon"><span class="mdi mdi-check"></span></div>
                                        <div class="message">
                                            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Success!</strong> {{ session('success') }}
                                        </div>
                                    </div>
                                @endif
                                @if (session('fail'))
                                    <div role="alert" class="alert alert-danger alert-icon alert-dismissible">
                                        <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
                                        <div class="message">
                                            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Fail!</strong> {{ session('fail') }}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </section>
    </section>

    <!-- Javascript Libraries -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('vendors/bower_components/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
    <script src="{{ asset('vendors/sparklines/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

    <script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>


    <script src="{{ asset('vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>


    <script src="{{ asset('js/app.min.js') }}"></script>
</body>

<!-- Mirrored from byrushan.com/projects/ma/1-7-1/jquery/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2017 09:49:04 GMT -->
</html>
