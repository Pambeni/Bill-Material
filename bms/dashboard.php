<!doctype html>
<html lang="en">

<?php  session_start();if(!isset($_SESSION['username'])) { header('location:index.html');} ?>
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BMS| Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/google-roboto-300-700.css" rel="stylesheet" />
    <style>
        .center {
        margin-top:50px;   
    }
    
    .modal-header {
        padding-bottom: 5px;
    }
    
    .modal-footer {
            padding: 0;
        }
        
    .modal-footer .btn-group button {
        height:40px;
        border-top-left-radius : 0;
        border-top-right-radius : 0;
        border: none;
        border-right: 1px solid #ddd;
    }
        
    .modal-footer .btn-group:last-child > button {
        border-right: 0;
    }
    b {
	border: none;
	
	color: #f2f2f2;
	padding: 10px;
	font-size: 18px;
	border-radius: 5px;
	position: relative;
	box-sizing: border-box;
	transition: all 500ms ease; 
}
@keyframes bounce {
	0%, 20%, 60%, 100% {
		-webkit-transform: translateY(0);
		transform: translateY(0);
	}

	40% {
		-webkit-transform: translateY(-20px);
		transform: translateY(-20px);
	}

	80% {
		-webkit-transform: translateY(-10px);
		transform: translateY(-10px);
	}
}
b:hover {
	animation: bounce 1s;
}
    
    </style>
</head>
 
<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="green" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    Billboard System
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="dashboard.php" class="simple-text">
                    BMS
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="../assets/img/faces/avatar.png" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                           <?php echo $_SESSION['name'] ?>
                            <strong class="caret"></strong>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">My Profile</a>
                                </li>
                                <li>
                                    <a href="#">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">account_balance</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                            <a  data-toggle="modal" data-target="#squarespaceModal3">
                                <i class="material-icons">fingerprint</i>
                                <p>Scheme Management</p>
                            </a>
                        </li>
                    <li>
                        
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="fa fa-briefcase"></i>
                            <p>Client Management
                                <strong class="caret"></strong>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                        <a  data-toggle="modal" data-target="#squarespaceModal">Registration</a>
                                </li>
                                <li>
                                    <a href="payments.html">Purchases</a>
                                </li>
                                <li>
                                        <a href="debt.html">Debt Management</a>
                                    </li>
                               
                            </ul>
                        </div>
                    </li>
                   
                    
                    <li>
                        <a href="user.html">
                            <i class="fa fa-user"></i>
                            <p>User Management</p>
                            
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                    <a  data-toggle="modal" data-target="#compose">
                                    <i class="material-icons">help</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope"></i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">You have 3 New Messages</a>
                                    </li>
                                    <li>
                                        <a href="#">5 complaints were raised</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="logout.php"  >
                                    <i class="fa fa-power-off"></i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    
                   
                    <div class="row">
                        <b class="col-lg-3 col-md-6 col-sm-6">
                                <a  data-toggle="modal" data-target="#squarespaceModal"><div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">weekend</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Client Registration</p>
                                    
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons ">toll</i>
                                        Click to Proceed....</a>
                                    </div>
                                </div>
                            </div>
                        </b>
                        <b class="col-lg-3 col-md-6 col-sm-6">
                                <a  data-toggle="modal" data-target="#squarespaceModal3"> <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="material-icons">equalizer</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Billboard Importation</p>
                                    
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons ">toll</i>
                                        Click to Proceed....</a>
                                    </div>
                                </div>
                            </div>
                        </b>
                        <b class="col-lg-3 col-md-6 col-sm-6">
                                <a href="payments.html"> <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="fa fa-dollar"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Permit Purchase</p>
                                   
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons ">toll</i>
                                        Click to Proceed....</a>
                                    </div>
                                </div>
                            </div>
                        </b>
                        <b class="col-lg-3 col-md-6 col-sm-6">
                                <a href="user.html"> <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">User Management</p>
                                    
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons ">toll</i>
                                        Click to Proceed....
                                    </div>
                                </div>
                            </div>
                        </b>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-text" data-background-color="rose">
                                        <h4 class="card-title">Billboards Map</h4>
                                    </div>
                                    <div class="card-content">
                                        <div id="satelliteMap" class="map map-big"></div>
                                    </div>
                                </div>
                            </div>
                            
                                        <div id="regularMap" class="map"></div>
                                
                            
                                        <div id="customSkinMap" class="map"></div>
                                   
                                
                            </div>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <!--Modal Details-->
    <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                     <h3 class="modal-title" id="lineModalLabel">Choose Scheme Type</h3>
                  </div>
                  <div class="modal-body">
                     <!-- content goes here -->
                     <form action="registration.php">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Select Scheme</label>
                           <select name="scheme" class="form-control selectpicker">
                              <option value="Rural">Rural</option>
                              <option value="Urban">Urban</option>
                              <option value="Industrial">Industrial</option>
                           </select>
                        </div>
                  </div>
                  <div class="modal-footer">
                  <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                  <div class="btn-group" role="group">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"  role="button">Close</button>
                  </div>
                  <div class="btn-group btn-delete hidden" role="group">
                  <button type="button" id="delImage" class="btn btn-default btn-hover-orange" data-dismiss="modal"  role="button">Delete</button>
                  </div>
                  <div class="btn-group" role="group">
                  <button type="submit" id="saveImage" class="btn btn-info btn-hover-green" data-action="save" role="button">Proceed</button>
                  </div>
                  </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="modal fade" id="squarespaceModal3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Choose Scheme Type</h3>
                     </div>
                     <div class="modal-body">
                        <!-- content goes here -->
                        <form action="billboards.php">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Select Scheme</label>
                              <select name="scheme" class="form-control selectpicker">
                                 <option value="Rural">Rural</option>
                                 <option value="Urban">Urban</option>
                                 <option value="Industrial">Industrial</option>
                              </select>
                           </div>
                     </div>
                     <div class="modal-footer">
                     <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                     <div class="btn-group" role="group">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal"  role="button">Close</button>
                     </div>
                     <div class="btn-group btn-delete hidden" role="group">
                     <button type="button" id="delImage" class="btn btn-default btn-hover-orange" data-dismiss="modal"  role="button">Delete</button>
                     </div>
                     <div class="btn-group" role="group">
                     <button type="submit" id="saveImage" class="btn btn-info btn-hover-green" data-action="save" role="button">proceed</button>
                     </div>
                     </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="compose">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h3 class="modal-title" id="lineModalLabel">Send Email To Developer </h3>
                                </div>
                                <div class="modal-body">
                                        <div class="form-row">
                                                <div class="form-group col-md-12">
                                                  
                                                   <input type="text" class="form-control" id="inputEmail4" reqired value="info@pambeni.com">
                                                </div>
                                                
                                             </div>
                                             <div class="form-row">
                                                <div class="form-group col-md-12">
                                                   
                                                   <input type="number" class="form-control" id="inputEmail4" placeholder="Subject..">
                                                </div>
                                               
                                             </div>
                                             <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                       
                                                       <textarea type="number" rows="5" class="form-control" placeholder="Message..."></textarea>
                                                    </div>
                                                   
                                                 </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-google" data-dismiss="modal" role="button">Cancel</button>
                                        </div>
                                        <div class="btn-group btn-delete hidden" role="group">
                                            <button type="button" id="delImage" class="btn btn-github btn-hover-orange" data-dismiss="modal" role="button">Delete</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="submit" id="saveImage" class="btn btn-github btn-hover-green" data-action="save" role="button">Send Email</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                </div>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<script src="../assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="../assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="../assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="../assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="../assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="../assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="../assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="../assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="../assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="../assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="../assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="../assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
    $(document).ready(function() {
        demo.initSmallGoogleMaps();
    });
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>