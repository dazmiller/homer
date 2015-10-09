<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Page title -->
        <title>NoHassl.com</title>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->
        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
        <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
        <link rel="stylesheet" href="vendor/animate.css/animate.css" />
        <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />
        <link rel="stylesheet" href="vendor/bootstrap-star-rating/css/star-rating.css" />
          <link rel="stylesheet" href="vendor/sweetalert/lib/sweet-alert.css" />
        <!-- App styles -->
        <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
        <link rel="stylesheet" href="styles/style.css">
         <link rel="stylesheet" href="styles/nohassl.css">
        <style>
        /* Open Sans  */
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600');
        /* General */

        </style>
    </head>
    <body>
        <!-- Simple splash screen-->
        <div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>NoHassl.com</h1><p>Time to take back your time and information. NoHassl.com takes all the worry and hassles out of finding the best quotes and deals for you. </p><img src="images/loading-bars.svg" width="64" height="64" /> </div> </div>
        <!--[if lt IE 7]>
        <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Header -->
        <div id="header">
            <div class="color-line">
            </div>
            <div id="logo" class="light-version">
                <span>
                    NoHassl.com
                </span>
            </div>
            <nav role="navigation">
                <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
                <div class="small-logo">
                    <span class="text-primary">NoHassl.com</span>
                </div>
                <form role="search" class="navbar-form-custom" method="post" action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Search something special" class="form-control" name="search">
                    </div>
                </form>
                <div class="navbar-right">
                    <ul class="nav navbar-nav no-borders">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="pe-7s-speaker"></i>
                            </a>
                            <ul class="dropdown-menu hdropdown notification animated flipInX">
                                <li>
                                    <a>
                                        <span class="label label-success">NEW</span> It is a long established.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="label label-warning">WAR</span> There are many variations.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="label label-danger">ERR</span> Contrary to popular belief.
                                    </a>
                                </li>
                                <li class="summary"><a href="#">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="pe-7s-keypad"></i>
                            </a>
                            <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="projects.php">
                                                    <i class="pe pe-7s-portfolio text-info"></i>
                                                    <h5>Dashboard</h5>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="mailbox.php">
                                                    <i class="pe pe-7s-mail text-warning"></i>
                                                    <h5>Communications</h5>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="contacts.php">
                                                    <i class="pe pe-7s-users text-success"></i>
                                                    <h5>Profile</h5>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="forum.php">
                                                    <i class="pe pe-7s-comment text-info"></i>
                                                    <h5>Feedback</h5>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="analytics.php">
                                                    <i class="pe pe-7s-graph1 text-danger"></i>
                                                    <h5>Analytics</h5>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="file_manager.php">
                                                    <i class="pe pe-7s-box1 text-success"></i>
                                                    <h5>Help</h5>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                                <i class="pe-7s-mail"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu hdropdown animated flipInX">
                                <div class="title">
                                    You have 4 new messages
                                </div>
                                <li>
                                    <a>
                                        It is a long established.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        There are many variations.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Lorem Ipsum is simply dummy.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Contrary to popular belief.
                                    </a>
                                </li>
                                <li class="summary"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" id="sidebar" class="right-sidebar-toggle">
                                <i class="pe-7s-upload pe-7s-news-paper"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="login.php">
                                <i class="pe-7s-upload pe-rotate-90"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Navigation -->
        <aside id="menu">
            <div id="navigation">
                <div class="profile-picture">
                    <a href="index.php">
                        <img src="images/profile.jpg" class="img-circle m-b" alt="logo">
                    </a>
                    <div class="stats-label text-color">
                        <span class="font-extra-bold font-uppercase"><- USERNAME -></span>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                <small class="text-muted">Account Profile <b class="caret"></b></small>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="contacts.php">Contact Details</a></li>
                                <li><a href="profile.php">Your Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="login.php">Logout</a></li>
                            </ul>
                        </div>
                        <div id="sparkline1" class="small-chart m-t-sm"></div>
                        <div>
                            <h4 class="font-extra-bold m-b-xs">
                            $260/month
                            </h4>
                            <small class="text-muted">Savings you have made since using this site.</small>
                        </div>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="active">
                        <a href="index.php"> <span class="nav-label">Dashboard</span> <span class="label label-success pull-right">v.1</span> </a>
                    </li>
                           <li>
                        <a href="profile.php"> <span class="nav-label">Your Profile</span></a>
                    </li>
                    <li>
                        <a href="analytics.php"> <span class="nav-label">Analytics</span><span class="label label-warning pull-right">NEW</span> </a>
                    </li>
                    <li>
                        <a href="mailbox.php"> <span class="nav-label">Communications</span></a>
                    </li>
                    <li>
                        <a href="forum.php"> <span class="nav-label">Help</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="nav-label">Interface</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels.php">Panels design</a></li>
                            <li><a href="typography.php">Typography</a></li>
                            <li><a href="buttons.php">Colors &amp; Buttons</a></li>
                            <li><a href="components.php">Components</a></li>
                            <li><a href="alerts.php">Alerts</a></li>
                            <li><a href="modals.php">Modals</a></li>
                            <li><a href="draggable.php">Draggable panels</a></li>
                            <li><a href="nestable_list.php">List</a></li>
                            <li><a href="tour.php">Tour</a></li>
                            <li><a href="icons.php">Icons library</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="nav-label">App views</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="contacts.php">Contacts</a></li>
                            <li><a href="projects.php">Projects</a></li>
                            <li><a href="project.php">Project detail</a></li>
                            <li><a href="social_board.php">Social board</a></li>
                            <li><a href="timeline.php">Timeline</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="mailbox.php">Mailbox</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="blog_details.php">Blog article</a></li>
                            <li><a href="forum.php">Forum</a></li>
                            <li><a href="forum_details.php">Forum details</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="invoice.php">Invoice</a></li>
                            <li><a href="file_manager.php">File manager</a></li>
                            <li><a href="chat_view.php">Chat view</a></li>
                            <li><a href="search.php">Search view</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="nav-label">Charts</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="chartjs.php">ChartJs</a></li>
                            <li><a href="flot.php">Flot charts</a></li>
                            <li><a href="inline.php">Inline graphs</a></li>
                        </ul>
                    </li>
                    <!--
                    <li>
                        <a href="#"><span class="nav-label">Box transitions</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="overview.php"><span class="label label-success pull-right">Start</span> Overview </a>  </li>
                            <li><a href="transition_two.php">Columns from up</a></li>
                            <li><a href="transition_one.php">Columns custom</a></li>
                            <li><a href="transition_three.php">Panels zoom</a></li>
                            <li><a href="transition_four.php">Rows from down</a></li>
                            <li><a href="transition_five.php">Rows from right</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="nav-label">Common views</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="error_one.php">Error 404</a></li>
                            <li><a href="error_two.php">Error 505</a></li>
                            <li><a href="lock.php">Lock screen</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="nav-label">Tables</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="tables_design.php">Tables design</a></li>
                            <li><a href="datatables.php">Data tables</a></li>
                            <li><a href="footable.php">Foo Table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.php"> <span class="nav-label">Widgets</span> <span class="label label-success pull-right">Special</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="nav-label">Forms</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="forms_elements.php">Forms elements</a></li>
                            <li><a href="forms_extended.php">Forms extended</a></li>
                            <li><a href="text_editor.php">Text editor</a></li>
                            <li><a href="wizard.php">Wizard</a></li>
                            <li><a href="validation.php">Validation</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="options.php"> <span class="nav-label">Layout options</span></a>
                    </li>
                    <li>
                        <a href="grid_system.php"> <span class="nav-label">Grid system</span></a>
                    </li>
                    <li>
                        <a href="landing_page.php"> <span class="nav-label">Landing page</span></a>
                    </li>
                    <li>
                        <a href="angular/index.php"> <span class="nav-label">AngularJS version</span></a>
                    </li>
                    <li>
                        <a href="http://104.236.248.183/dashboard"> <span class="nav-label">Meteor version</span></a>
                    </li>
                    -->
                </ul>
            </div>
        </aside>
        <!-- Main Wrapper -->
        <div id="wrapper">
            <div class="row">
                <div class="col-lg-12 text-center m-t-md">
                    <h2>
                    Welcome to your NoHassl.com Control Centre
                    </h2>
                    <p>
                        Here you can create, manage and modify all your service requests and current quotes. <br>You can also manage your profile information and privacy settings. <BR><strong>Time to take back your life</strong>
                    </p>
                </div>
            </div>
            <div class="row">

                <!-- UI X -->
                <div class="ui-220">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 col-mob">
                        <!-- Item -->
                        <div class="ui-item clearfix">
                            <!-- Nav tabs -->
                            <ul class="clearfix bg-green">
                                <!-- Users -->
                                <li class="active"><a href="#insurance" data-toggle="tab">Insurance</a></li>
                                <!-- Android -->
                                <li><a href="#Financial" data-toggle="tab">Financial</a></li>
                                <!-- Apple -->
                                <li><a href="#Travel" data-toggle="tab">Travel</a></li>
                                <!-- Dribbble -->
                                <li><a href="#Services" data-toggle="tab">Services</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <!-- Tab Pane -->
                                <div class="tab-pane fade in active" id="insurance">
                                    <!-- Paragraph -->
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <!-- UI item -->
                                                <div class="ui-item tooltip-demo" style="te">
                                                    <!-- Image -->

                                                    <a href="#" data-toggle="modal" onclick="window.activeDLG='#myModalg';"  data-target="#myModalg"  data-backdrop="static" title="" data-original-title="Create a request for life insurance quotes."><i class="fa fa-child" ></i></a>
                                                    <!-- Heading -->
                                                    <h6><a href="#">Life</a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <!-- UI iteme -->
                                                <div class="ui-item">
                                                    <!-- Image -->


                                                    <a href="#" onclick="window.activeDLG='#health_insurance_dlg';" data-toggle="modal" data-target="#health_insurance_dlg"  data-backdrop="static" title="" data-original-title="Create a request for insurance quotes."><i class="fa fa-heart"></i></a>
                                                    <!-- Heading -->
                                                    <h6><a href="#">Heath</a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <div class="ui-item">
                                                    <a href="#" onclick="window.activeDLG='#home_insurance_dlg';" data-toggle="modal" data-target="#home_insurance_dlg"  data-backdrop="static" title="" ><i class="fa fa-home"></i></a>
                                                    <h6><a href="#">Home & Contents</a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <div class="ui-item">
                                                    <a href="#"  onclick="window.activeDLG='#vehicle_insurance_dlg';" data-toggle="modal" data-target="#vehicle_insurance_dlg"  data-backdrop="static" title=""><i class="fa fa-car"></i></a>
                                                    <h6><a href="#">Vehicle</a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <div class="ui-item">
                                                    <a href="#" onclick="window.activeDLG='#funeral_insurance_dlg';" data-toggle="modal" data-target="#funeral_insurance_dlg"  data-backdrop="static" title=""><i class="fa fa-child"></i></a>
                                                    <h6><a href="#">Funeral</a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <!-- UI Item -->
                                                <div class="ui-item">
                                                    <!-- Image -->
                                                    <a href="#" onclick="window.activeDLG='#income_insurance_dlg';" data-toggle="modal" data-target="#income_insurance_dlg"  data-backdrop="static" title=""><i class="fa fa-dollar"></i></a>
                                                    <!-- Heading -->
                                                    <h6><a href="#">Income Protection</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <!-- UI item -->
                                                <div class="ui-item">
                                                    <!-- Image -->
                                                    <a href="#" onclick="window.activeDLG='#travel_insurance_dlg';" data-toggle="modal" data-target="#travel_insurance_dlg"  data-backdrop="static" title=""><i class="fa fa-plane"></i></a>
                                                    <!-- Heading -->
                                                    <h6><a href="#">Travel</a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <!-- UI item -->
                                                <div class="ui-item">
                                                    <!--Image -->
                                                    <a href="#" onclick="window.activeDLG='#landlord_insurance_dlg';" data-toggle="modal" data-target="#landlord_insurance_dlg"  data-backdrop="static" title=""><i class="fa fa-hotel"></i></a>
                                                    <!-- Heading -->
                                                    <h6><a href="#">Landlord</a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-4 ui-padd">
                                                <div class="ui-item">
                                                    <a href="#" onclick="window.activeDLG='#pet_insurance_dlg';" data-toggle="modal" data-target="#pet_insurance_dlg"  data-backdrop="static" title=""><i class="fa fa-paw"></i></a>
                                                    <h6><a href="#">Pet</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Panel -->
                                <div class="tab-pane fade" id="Financial">
                                    <!-- Heading -->
                                    <h3><a href="#"><i class="fa fa-bookmark green"></i> Velit Esse</a></h3>
                                    <!-- Paragraph -->
                                    <p>Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi laboris nisi  ut aliquip Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi laboris nisi .</p>
                                </div>
                                <!-- Tab Panel -->
                                <div class="tab-pane fade" id="Travel">
                                    <!-- Heading -->
                                    <h3><a href="#"><i class="fa fa-bullhorn green"></i> Esse Cillum</a></h3>
                                    <!-- Paragraph -->
                                    <p>Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi laboris nisi  ut aliquip Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi laboris nisi .</p>
                                </div>
                                <!-- Tab Panel -->
                                <div class="tab-pane fade" id="Services">
                                    <!-- Heading -->
                                    <h3><a href="#"><i class="fa fa-bell green"></i> Cillum Dolore</a></h3>
                                    <!-- Paragraph -->
                                    <p>Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi laboris nisi  ut aliquip Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi laboris nisi .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content animate-panel" style="padding-top:0px;">
                <div class="row projects">
                    <div class="col-lg-6">
                        <div class="hpanel hgreen">
                            <div class="panel-body">
                                <span class="label label-success pull-right">NEW</span>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4><a href=""> Life Insurance Request</a></h4>
                                        <p>
                                            Here are the current companies you have requested quotations from for life insurance. As each company will work to personalize your offer it may take a little time for them to report back to us with this offer.
                                        </p>
                                        <BR>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive project-list">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th colspan="1">Company</th>

                                                        <th>Stage</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td><a href="project.php">GIO</a>
                                                        <br>
                                                        <small><i class="fa fa-clock-o"></i> Created 14.08.2015</small>
                                                    </td>

                                        <td><strong>Recieved Request</strong></td>
                                        <td>Jul 14, 2013</td>
                                        <td>
                                            <div class="project-action">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-info"> Details</button>
                                                    <button class="btn btn-xs btn-success"> Accept</button>
                                                    <button class="btn btn-xs btn-danger"> Delete</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>There are many variations of passages
                                            <br>
                                            <small><i class="fa fa-clock-o"></i> Created 21.07.2015</small>
                                        </td>

                                    <td><strong>Calculating</strong></td>
                                    <td>Jul 16, 2013</td>
                                    <td>
                                        <div class="project-action">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-info"> Details</button>
                                                <button class="btn btn-xs btn-success"> Accept</button>
                                                <button class="btn btn-xs btn-danger"> Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Contrary to popular belief
                                        <br>
                                        <small><i class="fa fa-clock-o"></i> Created 12.06.2015</small>
                                    </td>

                                <td><strong>Quote Created</strong></td>
                                <td>Jul 18, 2013</td>
                                <td>
                                    <div class="project-action">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-info"> Details</button>
                                            <button class="btn btn-xs btn-success"> Accept</button>
                                            <button class="btn btn-xs btn-danger"> Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td>Gamma project
                                    <br>
                                    <small><i class="fa fa-clock-o"></i> Created 06.03.2015</small>
                                </td>

                            <td><strong>Processing</strong></td>
                            <td>Jul 14, 2013</td>
                            <td>
                                <div class="project-action">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-info"> Details</button>
                                        <button class="btn btn-xs btn-success"> Accept</button>
                                        <button class="btn btn-xs btn-danger"> Delete</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="panel-footer">
    Additional information about project in footer
</div>
</div>
</div>
<div class="col-lg-6">
<div class="hpanel hyellow">
<div class="panel-body">
    <span class="label label-success pull-right">NEW</span>
    <div class="row">
        <div class="col-sm-12">
            <h4><a href=""> Health Insurance Request</a></h4>
            <p>
                Here are the current companies you have requested quotations from for health insurance. Health Insurance can be tricky so be patient and the companies will return you the best quotes as soon as they can. If you want to see more info click the details button next to each request.
            </p>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive project-list">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="1">Company</th>

                            <th>Stage</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td><a href="">Contract with Zender Company</a>
                            <br>
                            <small><i class="fa fa-clock-o"></i> Created 14.08.2015</small>
                        </td>

            <td><strong>Recieved Request</strong></td>
            <td>Jul 14, 2013</td>
            <td>
                <div class="project-action">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-info"> Details</button>
                        <button class="btn btn-xs btn-success"> Accept</button>
                        <button class="btn btn-xs btn-danger"> Delete</button>
                    </div>
                </div>
            </td>
        </tr>
        <tr>

            <td>There are many variations of passages
                <br>
                <small><i class="fa fa-clock-o"></i> Created 21.07.2015</small>
            </td>

        <td><strong>Calculating</strong></td>
        <td>Jul 16, 2013</td>
        <td>
            <div class="project-action">
                <div class="btn-group">
                    <button class="btn btn-xs btn-info"> Details</button>
                    <button class="btn btn-xs btn-success"> Accept</button>
                    <button class="btn btn-xs btn-danger"> Delete</button>
                </div>
            </div>
        </td>
    </tr>
    <tr>

        <td>Contrary to popular belief
            <br>
            <small><i class="fa fa-clock-o"></i> Created 12.06.2015</small>
        </td>

    <td><strong>Quote Created</strong></td>
    <td>Jul 18, 2013</td>
    <td>
        <div class="project-action">
            <div class="btn-group">
                <button class="btn btn-xs btn-info"> Details</button>
                <button class="btn btn-xs btn-success"> Accept</button>
                <button class="btn btn-xs btn-danger"> Delete</button>
            </div>
        </div>
    </td>
</tr>
<tr>

    <td>Gamma project
        <br>
        <small><i class="fa fa-clock-o"></i> Created 06.03.2015</small>
    </td>

<td><strong>Processing</strong></td>
<td>Jul 14, 2013</td>
<td>
    <div class="project-action">
        <div class="btn-group">
            <button class="btn btn-xs btn-info"> Details</button>
            <button class="btn btn-xs btn-success"> Accept</button>
            <button class="btn btn-xs btn-danger"> Delete</button>
        </div>
    </div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
</div>
<div class="row projects">
<div class="col-lg-6">
<div class="hpanel hblue">
<div class="panel-body">
<span class="label label-info pull-right">NEW</span>
<div class="row">
<div class="col-sm-8">
<h4><a href=""> Website project</a></h4>
<p>
Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
<div class="row">
<div class="col-sm-3">
<div class="project-label">CLIENT</div>
<small>Morph Company</small>
</div>
<div class="col-sm-3">
<div class="project-label">VERSION</div>
<small>2.5.2</small>
</div>
<div class="col-sm-3">
<div class="project-label">DEDLINE</div>
<small>10.01.2015</small>
</div>
<div class="col-sm-3">
<div class="project-label">PROGRESS</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 43%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="43" role="progressbar" class=" progress-bar progress-bar-info">
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 project-info">
<div class="project-action m-t-md">
<div class="btn-group">
<button class="btn btn-xs btn-default"> View</button>
<button class="btn btn-xs btn-default"> Edit</button>
<button class="btn btn-xs btn-default"> Delete</button>
</div>
</div>
<div class="project-value">
<h2 class="text-info">
$456,20
</h2>
</div>
<div class="project-people">
<img alt="logo" class="img-circle" src="images/a8.jpg">
<img alt="logo" class="img-circle" src="images/a2.jpg">
<img alt="logo" class="img-circle" src="images/a1.jpg">
<img alt="logo" class="img-circle" src="images/a4.jpg">
<img alt="logo" class="img-circle" src="images/a6.jpg">
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
<div class="col-lg-6">
<div class="hpanel hgreen">
<div class="panel-body">
<span class="label label-success pull-right">NEW</span>
<div class="row">
<div class="col-sm-8">
<h4><a href=""> Desing project</a></h4>
<p>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
more-or-less normal distribution of letters, as opposed to using.
</p>
<div class="row">
<div class="col-sm-3">
<div class="project-label">CLIENT</div>
<small>Hendrix Corp</small>
</div>
<div class="col-sm-3">
<div class="project-label">VERSION</div>
<small>1.5.2</small>
</div>
<div class="col-sm-3">
<div class="project-label">DEDLINE</div>
<small>12.06.2015</small>
</div>
<div class="col-sm-3">
<div class="project-label">PROGRESS</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 12%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="12" role="progressbar" class=" progress-bar progress-bar-success">
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 project-info">
<div class="project-action m-t-md">
<div class="btn-group">
<button class="btn btn-xs btn-default"> View</button>
<button class="btn btn-xs btn-default"> Edit</button>
<button class="btn btn-xs btn-default"> Delete</button>
</div>
</div>
<div class="project-value">
<h2 class="text-success">
$1 206,40
</h2>
</div>
<div class="project-people">
<img alt="logo" class="img-circle" src="images/a1.jpg">
<img alt="logo" class="img-circle" src="images/a2.jpg">
<img alt="logo" class="img-circle" src="images/a3.jpg">
<img alt="logo" class="img-circle" src="images/a4.jpg">
<img alt="logo" class="img-circle" src="images/a5.jpg">
<img alt="logo" class="img-circle" src="images/a6.jpg">
<img alt="logo" class="img-circle" src="images/a7.jpg">
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
</div>
<div class="row projects">
<div class="col-lg-6">
<div class="hpanel hgreen">
<div class="panel-body">
<div class="row">
<div class="col-sm-8">
<h4><a href=""> New branding</a></h4>
<p>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
</p>
<div class="row">
<div class="col-sm-3">
<div class="project-label">CLIENT</div>
<small>Red Agency</small>
</div>
<div class="col-sm-3">
<div class="project-label">VERSION</div>
<small>1.2.1</small>
</div>
<div class="col-sm-3">
<div class="project-label">DEDLINE</div>
<small>22.04.2015</small>
</div>
<div class="col-sm-3">
<div class="project-label">PROGRESS</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 22%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="22" role="progressbar" class=" progress-bar progress-bar-success">
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 project-info">
<div class="project-action m-t-md">
<div class="btn-group">
<button class="btn btn-xs btn-default"> View</button>
<button class="btn btn-xs btn-default"> Edit</button>
<button class="btn btn-xs btn-default"> Delete</button>
</div>
</div>
<div class="project-value">
<h2 class="text-success">
$680,00
</h2>
</div>
<div class="project-people">
<img alt="logo" class="img-circle" src="images/a5.jpg">
<img alt="logo" class="img-circle" src="images/a3.jpg">
<img alt="logo" class="img-circle" src="images/a6.jpg">
<img alt="logo" class="img-circle" src="images/a8.jpg">
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
<div class="col-lg-6">
<div class="hpanel hgreen">
<div class="panel-body">
<div class="row">
<div class="col-sm-8">
<h4><a href=""> New branding</a></h4>
<p>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
</p>
<div class="row">
<div class="col-sm-3">
<div class="project-label">CLIENT</div>
<small>Red Agency</small>
</div>
<div class="col-sm-3">
<div class="project-label">VERSION</div>
<small>1.2.1</small>
</div>
<div class="col-sm-3">
<div class="project-label">DEDLINE</div>
<small>22.04.2015</small>
</div>
<div class="col-sm-3">
<div class="project-label">PROGRESS</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 22%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="22" role="progressbar" class=" progress-bar progress-bar-success">
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 project-info">
<div class="project-action m-t-md">
<div class="btn-group">
<button class="btn btn-xs btn-default"> View</button>
<button class="btn btn-xs btn-default"> Edit</button>
<button class="btn btn-xs btn-default"> Delete</button>
</div>
</div>
<div class="project-value">
<h2 class="text-success">
$680,00
</h2>
</div>
<div class="project-people">
<img alt="logo" class="img-circle" src="images/a5.jpg">
<img alt="logo" class="img-circle" src="images/a3.jpg">
<img alt="logo" class="img-circle" src="images/a6.jpg">
<img alt="logo" class="img-circle" src="images/a8.jpg">
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
</div>
<div class="row projects">
<div class="col-lg-6">
<div class="hpanel hgreen">
<div class="panel-body">
<div class="row">
<div class="col-sm-8">
<h4><a href=""> Project manager app</a></h4>
<p>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum..
</p>
<div class="row">
<div class="col-sm-3">
<div class="project-label">CLIENT</div>
<small>Vito Company</small>
</div>
<div class="col-sm-3">
<div class="project-label">VERSION</div>
<small>3.0.0</small>
</div>
<div class="col-sm-3">
<div class="project-label">DEDLINE</div>
<small>16.10.2015</small>
</div>
<div class="col-sm-3">
<div class="project-label">PROGRESS</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" role="progressbar" class=" progress-bar progress-bar-success">
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 project-info">
<div class="project-action m-t-md">
<div class="btn-group">
<button class="btn btn-xs btn-default"> View</button>
<button class="btn btn-xs btn-default"> Edit</button>
<button class="btn btn-xs btn-default"> Delete</button>
</div>
</div>
<div class="project-value">
<h2 class="text-success">
$3 600,20
</h2>
</div>
<div class="project-people">
<img alt="logo" class="img-circle" src="images/a7.jpg">
<img alt="logo" class="img-circle" src="images/a8.jpg">
<img alt="logo" class="img-circle" src="images/a3.jpg">
<img alt="logo" class="img-circle" src="images/a2.jpg">
<img alt="logo" class="img-circle" src="images/a5.jpg">
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
<div class="col-lg-6">
<div class="hpanel hred">
<div class="panel-body">
<span class="label label-danger pull-right">DEDLINE</span>
<div class="row">
<div class="col-sm-8">
<h4><a href=""> Ilustration project</a></h4>
<p>
All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
over 200 Latin words
</p>
<div class="row">
<div class="col-sm-3">
<div class="project-label">CLIENT</div>
<small>Taco Fresh Company</small>
</div>
<div class="col-sm-3">
<div class="project-label">VERSION</div>
<small>1.0.4</small>
</div>
<div class="col-sm-3">
<div class="project-label">DEDLINE</div>
<small>26.02.2015</small>
</div>
<div class="col-sm-3">
<div class="project-label">PROGRESS</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 23%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="23" role="progressbar" class=" progress-bar progress-bar-danger">
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 project-info">
<div class="project-action m-t-md">
<div class="btn-group">
<button class="btn btn-xs btn-default"> View</button>
<button class="btn btn-xs btn-default"> Edit</button>
<button class="btn btn-xs btn-default"> Delete</button>
</div>
</div>
<div class="project-value">
<h2 class="text-danger">
$456,20
</h2>
</div>
<div class="project-people">
<img alt="logo" class="img-circle" src="images/a5.jpg">
<img alt="logo" class="img-circle" src="images/a3.jpg">
<img alt="logo" class="img-circle" src="images/a1.jpg">
<img alt="logo" class="img-circle" src="images/a6.jpg">
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
</div>
<div class="row projects">
<div class="col-lg-6">
<div class="hpanel hred">
<div class="panel-body">
<span class="label label-danger pull-right">DEDLINE</span>
<div class="row">
<div class="col-sm-8">
<h4><a href=""> Ilustration project</a></h4>
<p>
All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
over 200 Latin words
</p>
<div class="row">
<div class="col-sm-3">
<div class="project-label">CLIENT</div>
<small>Taco Fresh Company</small>
</div>
<div class="col-sm-3">
<div class="project-label">VERSION</div>
<small>1.0.4</small>
</div>
<div class="col-sm-3">
<div class="project-label">DEDLINE</div>
<small>26.02.2015</small>
</div>
<div class="col-sm-3">
<div class="project-label">PROGRESS</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 23%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="23" role="progressbar" class=" progress-bar progress-bar-danger">
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 project-info">
<div class="project-action m-t-md">
<div class="btn-group">
<button class="btn btn-xs btn-default"> View</button>
<button class="btn btn-xs btn-default"> Edit</button>
<button class="btn btn-xs btn-default"> Delete</button>
</div>
</div>
<div class="project-value">
<h2 class="text-danger">
$456,20
</h2>
</div>
<div class="project-people">
<img alt="logo" class="img-circle" src="images/a5.jpg">
<img alt="logo" class="img-circle" src="images/a3.jpg">
<img alt="logo" class="img-circle" src="images/a1.jpg">
<img alt="logo" class="img-circle" src="images/a6.jpg">
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
<div class="col-lg-6">
<div class="hpanel hblue">
<div class="panel-body">
<span class="label label-info pull-right">NEW</span>
<div class="row">
<div class="col-sm-8">
<h4><a href=""> Website project</a></h4>
<p>
Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
<div class="row">
<div class="col-sm-3">
<div class="project-label">CLIENT</div>
<small>Morph Company</small>
</div>
<div class="col-sm-3">
<div class="project-label">VERSION</div>
<small>2.5.2</small>
</div>
<div class="col-sm-3">
<div class="project-label">DEDLINE</div>
<small>10.01.2015</small>
</div>
<div class="col-sm-3">
<div class="project-label">PROGRESS</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 43%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="43" role="progressbar" class=" progress-bar progress-bar-info">
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 project-info">
<div class="project-action m-t-md">
<div class="btn-group">
<button class="btn btn-xs btn-default"> View</button>
<button class="btn btn-xs btn-default"> Edit</button>
<button class="btn btn-xs btn-default"> Delete</button>
</div>
</div>
<div class="project-value">
<h2 class="text-info">
$456,20
</h2>
</div>
<div class="project-people">
<img alt="logo" class="img-circle" src="images/a8.jpg">
<img alt="logo" class="img-circle" src="images/a2.jpg">
<img alt="logo" class="img-circle" src="images/a1.jpg">
<img alt="logo" class="img-circle" src="images/a4.jpg">
<img alt="logo" class="img-circle" src="images/a6.jpg">
</div>
</div>
</div>
</div>
<div class="panel-footer">
Additional information about project in footer
</div>
</div>
</div>
</div>
</div>
<!-- Right sidebar -->
<div id="right-sidebar" class="animated fadeInRight">
<div class="p-m">
<button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
</button>
<div>
<span class="font-bold no-margins"> Analytics </span>
<br>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
</div>
<div class="row m-t-sm m-b-sm">
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold text-success">300,102</h3>
<div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold text-success">280,200</h3>
<div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
class=" progress-bar progress-bar-success">
<span class="sr-only">35% Complete (success)</span>
</div>
</div>
</div>
<div class="p-m bg-light border-bottom border-top">
<span class="font-bold no-margins"> Social talks </span>
<br>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
<div class="m-t-md">
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a1.jpg" alt="profile-picture">
</a>
<div class="media-body">
<span class="font-bold">John Novak</span>
<small class="text-muted">21.03.2015</small>
<div class="social-content small">
Injected humour, or randomised words which don't look even slightly believable.
</div>
</div>
</div>
</div>
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a3.jpg" alt="profile-picture">
</a>
<div class="media-body">
<span class="font-bold">Mark Smith</span>
<small class="text-muted">14.04.2015</small>
<div class="social-content">
Many desktop publishing packages and web page editors.
</div>
</div>
</div>
</div>
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a4.jpg" alt="profile-picture">
</a>
<div class="media-body">
<span class="font-bold">Marica Morgan</span>
<small class="text-muted">21.03.2015</small>
<div class="social-content">
There are many variations of passages of Lorem Ipsum available, but the majority have
</div>
</div>
</div>
</div>
</div>
</div>
<div class="p-m">
<span class="font-bold no-margins"> Sales in last week </span>
<div class="m-t-xs">
<div class="row">
<div class="col-xs-6">
<small>Today</small>
<h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
</div>
<div class="col-xs-6">
<small>Last week</small>
<h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
</div>
</div>
<div class="row">
<div class="col-xs-6">
<small>Today</small>
<h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
</div>
<div class="col-xs-6">
<small>Last week</small>
<h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
</div>
</div>
</div>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
Many desktop publishing packages and web page editors.
</small>
</div>
</div>
<div class="content animate-panel">
<div class="row">
<div class="col-lg-12 text-center m-t-md">
<h2>
Welcome to your NoHassl.com Control Centre
</h2>
<p>
Here you can create, manage and modify all your service requests and current quotes. <br>You can also manage your profile information and privacy settings. <BR><strong>Time to take back your life</strong>
</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="hpanel">
<div class="panel-heading">
<div class="panel-tools">
<a class="showhide"><i class="fa fa-chevron-up"></i></a>
<a class="closebox"><i class="fa fa-times"></i></a>
</div>
Dashboard information and statistics
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-3 text-center">
<div class="small">
<i class="fa fa-bolt"></i> Page views
</div>
<div>
<h1 class="font-extra-bold m-t-xl m-b-xs">
226,802
</h1>
<small>Page views in last month</small>
</div>
<div class="small m-t-xl">
<i class="fa fa-clock-o"></i> Data from January
</div>
</div>
<div class="col-md-6">
<div class="text-center small">
<i class="fa fa-laptop"></i> Active users in current month (December)
</div>
<div class="flot-chart" style="height: 160px">
<div class="flot-chart-content" id="flot-line-chart"></div>
</div>
</div>
<div class="col-md-3 text-center">
<div class="small">
<i class="fa fa-clock-o"></i> Active duration
</div>
<div>
<h1 class="font-extra-bold m-t-xl m-b-xs">
10 Months
</h1>
<small>And four weeks</small>
</div>
<div class="small m-t-xl">
<i class="fa fa-clock-o"></i> Last active in 12.10.2015
</div>
</div>
</div>
</div>
<div class="panel-footer">
<span class="pull-right">
You have two new messages from <a href="">Monica Bolt</a>
</span>
Last update: 21.05.2015
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3">
<div class="hpanel">
<div class="panel-body text-center h-200">
<i class="pe-7s-graph1 fa-4x"></i>
<h1 class="m-xs">$1 206,90</h1>
<h3 class="font-extra-bold no-margins text-success">
All Income
</h3>
<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
</div>
<div class="panel-footer">
This is standard panel footer
</div>
</div>
</div>
<div class="col-lg-3">
<div class="hpanel stats">
<div class="panel-body h-200">
<div class="stats-title pull-left">
<h4>Users Activity</h4>
</div>
<div class="stats-icon pull-right">
<i class="pe-7s-share fa-4x"></i>
</div>
<div class="m-t-xl">
<h3 class="m-b-xs">210</h3>
<span class="font-bold no-margins">
Social users
</span>
<div class="progress m-t-xs full progress-small">
<div style="width: 55%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55"
role="progressbar" class=" progress-bar progress-bar-success">
<span class="sr-only">35% Complete (success)</span>
</div>
</div>
<div class="row">
<div class="col-xs-6">
<small class="stats-label">Pages / Visit</small>
<h4>7.80</h4>
</div>
<div class="col-xs-6">
<small class="stats-label">% New Visits</small>
<h4>76.43%</h4>
</div>
</div>
</div>
</div>
<div class="panel-footer">
This is standard panel footer
</div>
</div>
</div>
<div class="col-lg-3">
<div class="hpanel stats">
<div class="panel-body h-200">
<div class="stats-title pull-left">
<h4>Page Views</h4>
</div>
<div class="stats-icon pull-right">
<i class="pe-7s-monitor fa-4x"></i>
</div>
<div class="m-t-xl">
<h1 class="text-success">860k+</h1>
<span class="font-bold no-margins">
Social users
</span>
<br/>
<small>
Lorem Ipsum is simply dummy text of the printing and <strong>typesetting
industry</strong>. Lorem Ipsum has been.
</small>
</div>
</div>
<div class="panel-footer">
This is standard panel footer
</div>
</div>
</div>
<div class="col-lg-3">
<div class="hpanel stats">
<div class="panel-body h-200">
<div class="stats-title pull-left">
<h4>Today income</h4>
</div>
<div class="stats-icon pull-right">
<i class="pe-7s-cash fa-4x"></i>
</div>
<div class="clearfix"></div>
<div class="flot-chart">
<div class="flot-chart-content" id="flot-income-chart"></div>
</div>
<div class="m-t-xs">
<div class="row">
<div class="col-xs-5">
<small class="stat-label">Today</small>
<h4>$230,00 </h4>
</div>
<div class="col-xs-7">
<small class="stat-label">Last week</small>
<h4>$7 980,60 <i class="fa fa-level-up text-success"></i></h4>
</div>
</div>
</div>
</div>
<div class="panel-footer">
This is standard panel footer
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3">
<div class="hpanel stats">
<div class="panel-heading">
<div class="panel-tools">
<a class="showhide"><i class="fa fa-chevron-up"></i></a>
<a class="closebox"><i class="fa fa-times"></i></a>
</div>
Last active
</div>
<div class="panel-body list">
<div class="stats-title pull-left">
<h4>Activity</h4>
</div>
<div class="stats-icon pull-right">
<i class="pe-7s-science fa-4x"></i>
</div>
<div class="m-t-xl">
<span class="font-bold no-margins">
Social users
</span>
<br/>
<small>
Lorem Ipsum is simply dummy text of the printing simply all dummy text. Lorem Ipsum is
simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
</small>
</div>
<div class="row m-t-md">
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold text-success">300,102</h3>
<div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold text-success">280,200</h3>
<div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
</div>
<div class="row m-t-md">
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold ">120,108</h3>
<div class="font-bold">38% <i class="fa fa-level-down"></i></div>
</div>
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold ">450,600</h3>
<div class="font-bold">28% <i class="fa fa-level-down"></i></div>
</div>
</div>
</div>
<div class="panel-footer">
This is standard panel footer
</div>
</div>
</div>
<div class="col-lg-6">
<div class="hpanel">
<div class="panel-heading">
<div class="panel-tools">
<a class="showhide"><i class="fa fa-chevron-up"></i></a>
<a class="closebox"><i class="fa fa-times"></i></a>
</div>
Recently active projects
</div>
<div class="panel-body list">
<div class="table-responsive project-list">
<table class="table table-striped">
<thead>
<tr>
<th colspan="2">Project</th>
<th>Completed</th>
<th>Task</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td><input type="checkbox" class="i-checks" checked></td>
<td>Contract with Zender Company
<br/>
<small><i class="fa fa-clock-o"></i> Created 14.08.2015</small>
</td>
<td>
<span class="pie">1/5</span>
</td>
<td><strong>20%</strong></td>
<td>Jul 14, 2013</td>
<td><a href=""><i class="fa fa-check text-success"></i></a></td>
</tr>
<tr>
<td><input type="checkbox" class="i-checks"></td>
<td>There are many variations of passages
<br/>
<small><i class="fa fa-clock-o"></i> Created 21.07.2015</small>
</td>
<td>
<span class="pie">1/4</span>
</td>
<td><strong>40%</strong></td>
<td>Jul 16, 2013</td>
<td><a href=""><i class="fa fa-check text-navy"></i></a></td>
</tr>
<tr>
<td><input type="checkbox" class="i-checks" checked></td>
<td>Contrary to popular belief
<br/>
<small><i class="fa fa-clock-o"></i> Created 12.06.2015</small>
</td>
<td>
<span class="pie">0.52/1.561</span>
</td>
<td><strong>75%</strong></td>
<td>Jul 18, 2013</td>
<td><a href=""><i class="fa fa-check text-navy"></i></a></td>
</tr>
<tr>
<td><input type="checkbox" class="i-checks"></td>
<td>Gamma project
<br/>
<small><i class="fa fa-clock-o"></i> Created 06.03.2015</small>
</td>
<td>
<span class="pie">226/360</span>
</td>
<td><strong>16%</strong></td>
<td>Jul 22, 2013</td>
<td><a href=""><i class="fa fa-check text-navy"></i></a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="hpanel">
<div class="panel-heading">
<div class="panel-tools">
<a class="showhide"><i class="fa fa-chevron-up"></i></a>
<a class="closebox"><i class="fa fa-times"></i></a>
</div>
Activity
</div>
<div class="panel-body list">
<div class="pull-right">
<a href="#" class="btn btn-xs btn-default">Today</a>
<a href="#" class="btn btn-xs btn-default">Month</a>
</div>
<div class="panel-title">Last Activity</div>
<small class="fo">This is simple example</small>
<div class="list-item-container">
<div class="list-item">
<h3 class="no-margins font-extra-bold text-success">2,773</h3>
<small>Tota Messages Sent</small>
<div class="pull-right font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
<div class="list-item">
<h3 class="no-margins font-extra-bold text-color3">4,422</h3>
<small>Last activity</small>
<div class="pull-right font-bold">13% <i class="fa fa-level-down text-color3"></i></div>
</div>
<div class="list-item">
<h3 class="no-margins font-extra-bold text-color3">9,180</h3>
<small>Monthly income</small>
<div class="pull-right font-bold">22% <i class="fa fa-bolt text-color3"></i></div>
</div>
<div class="list-item">
<h3 class="no-margins font-extra-bold text-success">1,450</h3>
<small>Tota Messages Sent</small>
<div class="pull-right font-bold">44% <i class="fa fa-level-up text-success"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Right sidebar -->
<div id="right-sidebar" class="animated fadeInRight">
<div class="p-m">
<button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
</button>
<div>
<span class="font-bold no-margins"> Analytics </span>
<br>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
</div>
<div class="row m-t-sm m-b-sm">
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold text-success">300,102</h3>
<div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold text-success">280,200</h3>
<div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
class=" progress-bar progress-bar-success">
<span class="sr-only">35% Complete (success)</span>
</div>
</div>
</div>
<div class="p-m bg-light border-bottom border-top">
<span class="font-bold no-margins"> Social talks </span>
<br>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
<div class="m-t-md">
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a1.jpg" alt="profile-picture">
</a>
<div class="media-body">
<span class="font-bold">John Novak</span>
<small class="text-muted">21.03.2015</small>
<div class="social-content small">
Injected humour, or randomised words which don't look even slightly believable.
</div>
</div>
</div>
</div>
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a3.jpg" alt="profile-picture">
</a>
<div class="media-body">
<span class="font-bold">Mark Smith</span>
<small class="text-muted">14.04.2015</small>
<div class="social-content">
Many desktop publishing packages and web page editors.
</div>
</div>
</div>
</div>
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a4.jpg" alt="profile-picture">
</a>
<div class="media-body">
<span class="font-bold">Marica Morgan</span>
<small class="text-muted">21.03.2015</small>
<div class="social-content">
There are many variations of passages of Lorem Ipsum available, but the majority have
</div>
</div>
</div>
</div>
</div>
</div>
<div class="p-m">
<span class="font-bold no-margins"> Sales in last week </span>
<div class="m-t-xs">
<div class="row">
<div class="col-xs-6">
<small>Today</small>
<h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
</div>
<div class="col-xs-6">
<small>Last week</small>
<h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
</div>
</div>
<div class="row">
<div class="col-xs-6">
<small>Today</small>
<h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
</div>
<div class="col-xs-6">
<small>Last week</small>
<h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
</div>
</div>
</div>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
Many desktop publishing packages and web page editors.
</small>
</div>
</div>
<!-- Footer-->
<footer class="footer">
<span class="pull-right">
Example text
</span>
Company 2015-2020
</footer>
</div>



<!-- Start Life Insurance -->

 <div class="modal fade" id="myModalg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">Life Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your life insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
        <form name="simpleForm" novalidate id="simpleForm" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1life" data-toggle="lifetab" id="lifestep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2life" data-toggle="lifetab" id="lifestep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3life" data-toggle="lifetab" id="lifestep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1life" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="lifenext">Next</a>
                    </div>

                </div>

                <div id="step2life" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="lifeprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="lifenext2">Next</a>
                    </div>

                </div>
            <div id="step3life" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="lifeapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="lifeprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="lifesubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>
<!-- End Life Insurance -->

<!-- Start Healh Insurance -->

 <div class="modal fade" id="health_insurance_dlg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">Health Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your health insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
            <form name="simpleForm" novalidate id="simpleFormHealth" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1health" data-toggle="healthtab" id="healthstep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2health" data-toggle="healthtab" id="healthstep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3health" data-toggle="healthtab" id="healthstep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1health" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="healthnext">Next</a>
                    </div>

                </div>

                <div id="step2health" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="healthprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="healthnext2">Next</a>
                    </div>

                </div>
            <div id="step3health" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="healthapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="healthprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="healthsubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>

    <!-- End Health Insurance -->

<!-- Start Home Insurance -->

 <div class="modal fade" id="home_insurance_dlg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">home Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your home insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
            <form name="simpleForm" novalidate id="simpleFormhome" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1home" data-toggle="hometab" id="homestep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2home" data-toggle="hometab" id="homestep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3home" data-toggle="hometab" id="homestep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1home" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="homenext">Next</a>
                    </div>

                </div>

                <div id="step2home" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="homeprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="homenext2">Next</a>
                    </div>

                </div>
            <div id="step3home" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="homeapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="homeprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="homesubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>

    <!-- End Home Insurance -->



<!-- Start vehicle Insurance -->

 <div class="modal fade" id="vehicle_insurance_dlg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">vehicle Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your vehicle insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
            <form name="simpleForm" novalidate id="simpleFormvehicle" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1vehicle" data-toggle="vehicletab" id="vehiclestep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2vehicle" data-toggle="vehicletab" id="vehiclestep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3vehicle" data-toggle="vehicletab" id="vehiclestep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1vehicle" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="vehiclenext">Next</a>
                    </div>

                </div>

                <div id="step2vehicle" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="vehicleprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="vehiclenext2">Next</a>
                    </div>

                </div>
            <div id="step3vehicle" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="vehicleapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="vehicleprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="vehiclesubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>

    <!-- End vehicle Insurance -->




<!-- Start funeral Insurance -->

 <div class="modal fade" id="funeral_insurance_dlg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">funeral Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your funeral insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
            <form name="simpleForm" novalidate id="simpleFormfuneral" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1funeral" data-toggle="funeraltab" id="funeralstep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2funeral" data-toggle="funeraltab" id="funeralstep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3funeral" data-toggle="funeraltab" id="funeralstep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1funeral" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="funeralnext">Next</a>
                    </div>

                </div>

                <div id="step2funeral" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="funeralprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="funeralnext2">Next</a>
                    </div>

                </div>
            <div id="step3funeral" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="funeralapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="funeralprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="funeralsubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>

    <!-- End funeral Insurance -->



<!-- Start income Insurance -->

 <div class="modal fade" id="income_insurance_dlg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">income Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your income insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
            <form name="simpleForm" novalidate id="simpleFormincome" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1income" data-toggle="incometab" id="incomestep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2income" data-toggle="incometab" id="incomestep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3income" data-toggle="incometab" id="incomestep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1income" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="incomenext">Next</a>
                    </div>

                </div>

                <div id="step2income" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="incomeprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="incomenext2">Next</a>
                    </div>

                </div>
            <div id="step3income" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="incomeapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="incomeprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="incomesubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>

    <!-- End income Insurance -->




<!-- Start travel Insurance -->

 <div class="modal fade" id="travel_insurance_dlg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">travel Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your travel insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
            <form name="simpleForm" novalidate id="simpleFormtravel" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1travel" data-toggle="traveltab" id="travelstep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2travel" data-toggle="traveltab" id="travelstep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3travel" data-toggle="traveltab" id="travelstep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1travel" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="travelnext">Next</a>
                    </div>

                </div>

                <div id="step2travel" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="travelprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="travelnext2">Next</a>
                    </div>

                </div>
            <div id="step3travel" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="travelapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="travelprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="travelsubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>

    <!-- End travel Insurance -->




<!-- Start landlord Insurance -->

 <div class="modal fade" id="landlord_insurance_dlg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">landlord Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your landlord insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
            <form name="simpleForm" novalidate id="simpleFormlandlord" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1landlord" data-toggle="landlordtab" id="landlordstep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2landlord" data-toggle="landlordtab" id="landlordstep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3landlord" data-toggle="landlordtab" id="landlordstep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1landlord" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="landlordnext">Next</a>
                    </div>

                </div>

                <div id="step2landlord" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="landlordprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="landlordnext2">Next</a>
                    </div>

                </div>
            <div id="step3landlord" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="landlordapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="landlordprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="landlordsubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>

    <!-- End landlord Insurance -->




<!-- Start pet Insurance -->

 <div class="modal fade" id="pet_insurance_dlg" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

        <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">pet Insurance Request</h4>
                <small class="font-bold">Dont be messed around, simply enter what you want in your pet insurance and let us do the rest.</small>
            </div>
            <div class="modal-body">
            <form name="simpleForm" novalidate id="simpleFormpet" action="#" method="post">

            <div class="text-center m-b-md" id="wizardControl">

                <a class="btn btn-primary" href="#step1pet" data-toggle="pettab" id="petstep1">Step 1 - Personal data</a>
                <a class="btn btn-default" href="#step2pet" data-toggle="pettab" id="petstep2">Step 2 - Payment data</a>
                <a class="btn btn-default" href="#step3pet" data-toggle="pettab" id="petstep3">Step 3 - Approval</a>

            </div>

                <div class="tab-content">
                <div id="step1pet" class="p-m tab-pane active">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-user fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="" value="" id="" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company</label>
                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Company Name" name="company">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="" value="" id="" class="form-control" name="" placeholder="user@email.com" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Country</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="country" placeholder="UK">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right m-t-xs">

                        <a class="btn btn-default next" href="#" id="petnext">Next</a>
                    </div>

                </div>

                <div id="step2pet" class="p-m tab-pane">

                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <i class="pe-7s-credit fa-5x text-muted"></i>
                            <p class="small m-t-md">
                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                <br/><br/>Many desktop publishing packages and web page editors now use
                            </p>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name on Card</label>
                                    <input type="" value="" id="" class="form-control" name="card_name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Card Number</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Billing Address</label>
                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div class="col-xs-4 form-group">
                                            <label>CVC</label>
                                            <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label>Expiration</label>
                                            <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                        </div>
                                        <div class="col-xs-4 form-group">
                                            <label></label>
                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#" id="petprev2">Previous</a>
                        <a class="btn btn-default next" href="#" id="petnext2">Next</a>
                    </div>

                </div>
            <div id="step3pet" class="tab-pane">
                <div class="row text-center m-t-lg m-b-lg">
                    <div class="col-lg-12">
                        <i class="pe-7s-check fa-5x text-muted"></i>
                        <p class="small m-t-md">
                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                        </p>
                    </div>
                    <div class="checkbox col-lg-12">
                        <input type="checkbox" class="i-checks approveCheck" name="approve" id="petapproveCheck" >
                        Approve this form
                    </div>
                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#" id="petprev3">Previous</a>
                    <!--
                    <a class="btn btn-default next" href="#">Next</a>
                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                    -->
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submitWizard" id="petsubmit">Save changes</button>
        </div>
            </div>
        </div>
    </div>

    <!-- End pet Insurance -->



<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/jquery-flot/jquery.flot.js"></script>
<script src="vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="vendor/flot.curvedlines/curvedLines.js"></script>
<script src="vendor/jquery.flot.spline/index.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/peity/jquery.peity.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<script src="vendor/sweetalert/lib/sweet-alert.min.js"></script>
<!-- App scripts -->
<script src="scripts/homer.js"></script>
<script src="scripts/charts.js"></script>
<script>
$(function () {
/**
* Flot charts data and options
*/
var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];
var chartUsersOptions = {
series: {
splines: {
show: true,
tension: 0.4,
lineWidth: 1,
fill: 0.4
},
},
grid: {
tickColor: "#f0f0f0",
borderWidth: 1,
borderColor: 'f0f0f0',
color: '#6a6c6f'
},
colors: [ "#62cb31", "#efefef"],
};
$.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);
/**
* Flot charts 2 data and options
*/
var chartIncomeData = [
{
label: "line",
data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
}
];
var chartIncomeOptions = {
series: {
lines: {
show: true,
lineWidth: 0,
fill: true,
fillColor: "#64cc34"
}
},
colors: ["#62cb31"],
grid: {
show: false
},
legend: {
show: false
}
};
$.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);
});
</script>
<script src="">
/*
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-4625583-2', 'webapplayers.com');
ga('send', 'pageview');
*/
</script>

<script src="scripts/nohassl.js"></script>

<style>
    body.modal-open {
        padding-right: 0 !important;

    }
</style>

</body>
</html>