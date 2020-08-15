<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
    <title></title>
  </head>
  <body>





    <?php  ?>

  </body>
</html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>registration</title>
</head>

</head>
<body>
  <div class= "container"></div>
<!--  <a class="float-right" href="logout.php">Logout</a> -->
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
                            <a class="nav-link active" href="#"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
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
                                        <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">Dashboard</a></li>
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


<!-- put content here -->



<!-- no tounch boundary -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#search_text").keyup(function () {
      var search=$(this).val();
      if (search != ' ') {
        $.ajax({
          url:'fetch.php',
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





<?php
include 'connection.php';

if (isset($_POST['display'])) {

  //Query to select all details from the table
 $showall = "SELECT * FROM redo;";
 //Fetched details are stored in the variable result
 $result = mysqli_query($conn,$showall);
 //Number of rows of the result are stored in $resultCheck
 $numberOfResults = mysqli_num_rows($result);
 //Checks if any number of results exists
 if ($numberOfResults > 0) {

   ?>
   <?php
   echo "There are"." ".$numberOfResults." "."patients"."<br>";
  // echo "<button type='submit' name='search' formaction='search.php'>Search</button>"."<br>";
   echo "<a href= 'index.php'>Back to Registration</a><br>";
?>
<form class="" method="post" autocomplete="on">
  Search<input type="text" id="search_text" name="search" placeholder="search for a patient">
  <button type="submit" name="search-btn" formaction="search.php">Search</button>
  <div id="results">

  </div>
  <button type="submit" name="list" formaction="consultation_list.php">Daily Consultation List</button>
  <a class="float-right" href="logout.php">Logout</a>
  <br>

</form>
<table id="table-data" class="table table-bordered">
<tr>
  <th> <?php echo "ID"; ?> </th>
  <th> <?php echo "Name"; ?> </th>
  <th> <?php echo "Code"; ?> </th>
  <th> <?php echo "Age"; ?> </th>
  <th> <?php echo "time of arrival"; ?> </th>
  <th> <?php echo "contact"; ?> </th>
  <th> <?php echo "gender"; ?> </th>
</tr>
<?php
   //The details from result is stored in a variable $row
   while ($row = mysqli_fetch_assoc($result)) { ?>
     <?php //The results are displayed in a table  ?>


              <tr>
                <td><?php echo $row['no']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['code']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td>
                 <a href="delete.php?delete= <?php echo $row['no']; ?>">delete</a>
                 </td>
                 <td>
                  <a href="edit.php?edit= <?php echo $row['no']; ?>">edit </a>
                  </td>
                 <td>
                  <a href="consultation.php?consultation= <?php echo $row['no']; ?>"> <button type="button" name="consultation">consultation</button> </a>
                 </td>

              </tr>


  <?php
// echo "<table>";
//   echo "<tr>";
//     echo '<td>'.$row['name'].'</td>';
//     echo '<td>'.$row['age'].'</td>';
//     echo '<td>'.$row['gender'].'</td>';
//     echo '<td>'.$row['place'].'</td>';
//     echo '<td>'.$row['date'].'</td>';
//     echo '<td>'.$row['prescription'].'</td>';
//     //Preview button is printed corresponding to each result.
//     echo "<td><button type='submit' name='preview'>preview</button></td>";
//   echo "</tr>";
// echo "</table>";

   }
   ?></table><?php
 }

}


 ?>
</div>
</div>
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
</div>
</div>

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

</body>
</html>
