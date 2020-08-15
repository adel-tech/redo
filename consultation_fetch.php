<?php
include 'connection.php';
if(isset($_POST['search']) && !empty($_POST['search'])){
$sql = "SELECT * FROM daily WHERE name LIKE '%".$_POST["search"]."%' OR consultation LIKE '%".$_POST["search"]."%' OR
date LIKE '%".$_POST["search"]."%' OR contact LIKE '%".$_POST["search"]."%' OR code LIKE '%".$_POST["search"]."%' ";
$result = mysqli_query($conn,$sql);
$output = " ";
if (mysqli_num_rows($result)>0) {
  $output .= ' <h4 align = "center"> Search Results </h4> ';
  $output .= '<div class = "table-responsive">
  <table class="table table-bordered">
  <tr>
  <th>#</th>
  <th>name</th>
  <th>token</th>
  <th>date</th>
  <th>contact</th>
  <th>consultation</th>
   </tr>';
   while ($row= mysqli_fetch_array($result)) {
     $output .= '<tr>
     <th>'.$row["no"].'</th>
     <th>'.$row["name"].'</th>
     <th>'.$row["code"].'</th>
     <th>'.$row["date"].'</th>
     <th>'.$row["contact"].'</th>
     <th>'.$row["consultation"].'</th>
      </tr>' ;
   }
   echo $output;
}
else {
  echo "data not found";
}
}
else {
  echo " ";
}
