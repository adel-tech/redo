<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
setcookie(name)

?>
<!DOCTYPE html>
<html>
<head>
	< <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
        <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
        <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
        <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
        <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
        <title>ENDEMIC - MEDIPLUZZ</title>
				<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
				<script type="text/javascript">
				  $(document).ready(function() {
				    $("#search_text").keyup(function () {
				      var search=$(this).val();
				      if (search != ' ') {
				        $.ajax({
				          url:'fetchnew.php',
				          method: 'post',
				          data:{query:search},
				          success: function (response) {
				            $("#table-data").html(response);
				          }
				        });
				      }
				      else {
				        $("#table-data").html(" ");
				      }
				    });
				  });
				</script>
</head>

<body>

        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="#"><img class="logo-img" src="assets/images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <h1>Dr.<?php echo $_SESSION['username']; ?> </h1>
                                        <span class="status"></span><span class="ml-2">Current User</span>
                                    </div>
                                    <!--<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>-->
                                    <!--<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>-->
                                    <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link active" href="home.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Patient</a>
                                    <div id="submenu-2" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php">New Register<span class="badge badge-secondary">New</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="all.php"> Patients List </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                 <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fas fa-fw fa-inbox"></i>Consulting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                    <div id="submenu-5" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end left sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                	<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
                                    <h2 class="pageheader-title">ENDEMIC MEDIPLUZZ </h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Developed & Maintained by Endemic Software Solutions</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        <div class="ecommerce-widget">

                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- Total Patients  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card border-3 border-top border-top-primary">
                                        <div class="card-body">
                                            <h5 class="text-muted">Total Patients</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1">12099</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- Total Patients  -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- Todays Patients  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card border-3 border-top border-top-primary">
                                        <div class="card-body">
                                            <h5 class="text-muted">Todays Patients</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1">1245</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">

                                    <div class="card border-3 border-top border-top-primary">
                                        <div class="card-body">
                                        	<div class="metric-value d-inline-block">
                                            <h5 class="text-muted">Search for a patient</h5>
                                        </div>
                                            <form class="" method="post">
  Search<input type="text" id="search_text" name="search" placeholder="enter any details">
  <button type="submit" name="search-btn" formaction="search.php">Search</button>
  <div id="table-data">
                                        </div>
                                    </div>

                                </div>
                                <!-- ============================================================== -->
                                <!-- Todays Patients -->
                                <!-- ============================================================== -->
                            </div>

                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- recent orders  -->
                                <!-- ============================================================== -->
<!--                                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <h5 class="card-header">Recent Orders</h5>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="bg-light">
                                                        <tr class="border-0">
                                                            <th class="border-0">#</th>
                                                            <th class="border-0">Image</th>
                                                            <th class="border-0">Product Name</th>
                                                            <th class="border-0">Product Id</th>
                                                            <th class="border-0">Quantity</th>
                                                            <th class="border-0">Price</th>
                                                            <th class="border-0">Order Time</th>
                                                            <th class="border-0">Customer</th>
                                                            <th class="border-0">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                            </td>
                                                            <td>Product #1 </td>
                                                            <td>id000001 </td>
                                                            <td>20</td>
                                                            <td>$80.00</td>
                                                            <td>27-08-2018 01:22:12</td>
                                                            <td>Patricia J. King </td>
                                                            <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                                            </td>
                                                            <td>Product #2 </td>
                                                            <td>id000002 </td>
                                                            <td>12</td>
                                                            <td>$180.00</td>
                                                            <td>25-08-2018 21:12:56</td>
                                                            <td>Rachel J. Wicker </td>
                                                            <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>
                                                                <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                                            </td>
                                                            <td>Product #3 </td>
                                                            <td>id000003 </td>
                                                            <td>23</td>
                                                            <td>$820.00</td>
                                                            <td>24-08-2018 14:12:77</td>
                                                            <td>Michael K. Ledford </td>
                                                            <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>
                                                                <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                            </td>
                                                            <td>Product #4 </td>
                                                            <td>id000004 </td>
                                                            <td>34</td>
                                                            <td>$340.00</td>
                                                            <td>23-08-2018 09:12:35</td>
                                                            <td>Michael K. Ledford </td>
                                                            <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!-- ============================================================== -->
                                <!-- end recent orders  -->
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <div class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    Copyright © 2020. All rights reserved by <a href="endemicsoftwares.com">ENDEMIC</a>.
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="text-md-right footer-links d-none d-sm-block">
                                        <!--<a href="#">About</a>-->
                                        <!--<a href="#">Support</a>-->
                                        <a href="#">Contact Us: (+91) 99 99 99 99 99</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <!-- jquery 3.3.1 -->
            <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
            <!-- bootstap bundle js -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
            <!-- slimscroll js -->
            <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
            <!-- main js -->
            <script src="assets/libs/js/main-js.js"></script>
            <!-- chart chartist js -->
            <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
            <!-- sparkline js -->
            <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
            <!-- morris js -->
            <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
            <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
            <!-- chart c3 js -->
            <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
            <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
            <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
            <script src="assets/libs/js/dashboard-ecommerce.js"></script>
	<div class= "container"></div>


</div>
</body>
</html>
