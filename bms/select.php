<!doctype html>
<html lang="en">

<?php  session_start();if(!isset($_SESSION['username'])) { header('location:index.html');}
require 'connect2db.php';
$connection=  mysqli_query($con, "SELECT * FROM `clients`");
$newid = $_GET['newid'];
// This action will execute if a user is selected from the select customer modal and populate the selected client details on the form
if(isset($_GET['x'])) {
    $id = $_GET['id'];
    $connect = mysqli_query($con, "SELECT * FROM `clients` where id =$id");

    $detail=  mysqli_fetch_array($connect);
    $clientname = $detail['name'];
    $clientemail = $detail['email'];
    $clientaddress = $detail['address'];
    $clientphone = $detail['phone'];
    $clientid = $detail['id'];

}
?>
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BMS| Billboard Registration</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
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
    }</style>
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
                                    <b class="caret"></b>
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
                            <li>
                                <a href="dashboard.php">
                                    <i class="material-icons">account_balance</i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li >
                                    <a  data-toggle="modal" data-target="#squarespaceModal3">
                                        <i class="material-icons">fingerprint</i>
                                        <p>Scheme Management</p>
                                    </a>
                                </li>
                            <li class="active">
                                
                                <a data-toggle="collapse" href="#pagesExamples">
                                    <i class="fa fa-briefcase"></i>
                                    <p>Client Management
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse" id="pagesExamples">
                                    <ul class="nav">
                                        <li class="active">
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
                   <div class="col-sm-12 ">
                      
                   <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="purple">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Select Billboard</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Address</th>
                                                    <th>Dimensions</th>
                                                    <th>Signage</th>
                                                    <th>Status</th>
                                                 
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            <?php 
                                           $billy = mysqli_query($con, "SELECT * FROM `billboards`");

                                          
                                            while($bill =mysqli_fetch_array($billy)) {
                                                           
                                                $billtype = $bill['type'];
                                                $billsignage = $bill['signage'];
                                                $billstatus = $bill['status'];
                                                $billaddress = $bill['address'];
                                                $length = $bill['length'];
                                                $width = $bill['width'];
                                                $billid = $bill['id'];
                                                $height = $bill['height'];
                                                $dimension = "$length X $width X $height";
                                                        
                                            ?>
                                                <tr>
                                                
                                                <td><a href="php/update.php?<?php echo "id=$newid&billid=$billid"?>"> <?php echo $billtype?></a></td>
                                                    <td><a href="php/update.php?<?php echo "id=$newid&x=1"?>"><?php echo $billaddress?></a></td>
                                                    <td><a href="php/update.php?<?php echo "id=$newid&x=1"?>"><?php echo $dimension?></a></td>
                                                    <td><a href="php/update.php?<?php echo "id=$newid&x=1"?>"><?php echo $billsignage?></a></td>
                                                    <td><?php echo $billstatus?></td>
                                                    
                                                </tr>
                                                         <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
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
                  <button type="submit" id="saveImage" class="btn btn-info btn-hover-green" data-action="save" role="button">Save</button>
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
                     <button type="submit" id="saveImage" class="btn btn-info btn-hover-green" data-action="save" role="button">Save</button>
                     </div>
                     </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
    <!-- List of Customers Modal -->
    <div class="modal fade" id="squarespaceModal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Choose Customer</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="purple">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">List of All Registerd Customers</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Debt</th>
                                                 
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            <?php 
                                            while($row =mysqli_fetch_array($connection))
    
                                                         {
                                            extract($row);
                                            ?>
                                                <tr>
                                                <td><a href="php/update.php?<?php echo "id=$newid&x=1"?>"> <?php echo $name?></a></td>
                                                    <td><a href="php/update.php?<?php echo "id=$newid&x=1"?>"><?php echo $address?></a></td>
                                                    <td><a href="php/update.php?<?php echo "id=$newid&x=1"?>"><?php echo $email?></a></td>
                                                    <td><a href="php/update.php?<?php echo "id=$newid&x=1"?>"><?php echo $phone?></a></td>
                                                    <td><a href="php/update.php?<?php echo "id=$newid&x=1"?>">$<?php echo $debt?></a></td>
                                                    
                                                </tr>
                                                         <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>

                
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button">Close</button>
                        </div>
                        <div class="btn-group btn-delete hidden" role="group">
                            <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="saveImage" class="btn btn-primary btn-hover-green" data-action="save" role="button">Save</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Select Billboard Modal -->
    <div class="modal fade" id="billboards" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Choose Customer</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="purple">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">List of All Registerd Customers</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Address</th>
                                                    <th>Dimensions</th>
                                                    <th>Signage</th>
                                                    <th>Status</th>
                                                 
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            <?php 
                                           $billy = mysqli_query($con, "SELECT * FROM `billboards`");

                                          
                                            while($bill =mysqli_fetch_array($billy)) {
                                                           
                                                $billtype = $bill['type'];
                                                $billsignage = $bill['signage'];
                                                $billstatus = $bill['status'];
                                                $billaddress = $bill['address'];
                                                $length = $bill['length'];
                                                $width = $bill['width'];
                                                $height = $bill['height'];
                                                $dimension = "$length X $width X $height";
                                                        
                                            ?>
                                                <tr>
                                                <td> <?php echo $billaddress?></td>
                                                    <td><?php echo $billtype?></td>
                                                    <td><?php echo $dimension?></td>
                                                    <td><?php echo $billsignage ?></td>
                                                    <td><?php echo $billstatus?></td>
                                                    
                                                </tr>
                                                         <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>

                
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button">Close</button>
                        </div>
                        <div class="btn-group btn-delete hidden" role="group">
                            <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="saveImage" class="btn btn-primary btn-hover-green" data-action="save" role="button">Save</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
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
        demo.initMaterialWizard();
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>