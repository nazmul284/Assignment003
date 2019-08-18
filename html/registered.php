<?php include("connection.php");?>
<!DOCTYPE html>
<html>

<head>
<title>Student List || Assignment003</title>

<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<link rel="stylesheet" href="../css/jquery-ui.min.css" />
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>



<header class="header-section">
  
<nav class="main-navbar">
<div class="container">

<ul class="main-menu">
<li><a href="../index.php">Home</a></li>
<li><a href="registerd.php">Registered</a></li>
</ul>
</div>
</nav>
</header>

<main>
    <div class="card" style="width: auto; height: auto; margin-left: 2rem; margin-top: 2rem; margin-right: 2rem; margin-bottom: 2rem">
    <div class="card-body">
      <h3 class="alert alert-danger text-center">Registered Student List</h3>
      <h5 class="text-center"class="">
        <?php
        $sql="SELECT * FROM registration ORDER BY id";

          if ($result1=mysqli_query($con,$sql))
            {
            // Return the number of rows in result set
            $rowcount=mysqli_num_rows($result1);
            echo "Total Registered Student: $rowcount";
            // Free result set
            mysqli_free_result($result1);
            }
        ?>



      </h5>
  <div class="card" style="width: auto; height: auto; margin-left: 3rem; margin-top: 2rem; margin-right: 3rem; margin-bottom: 5rem">
    <div class="card-body">

<?php  
$query = "SELECT * FROM registration ORDER BY id DESC";
 
 
echo '<table class="table table-bordered table-striped mb-0"> 
  <thead class="alert alert-warning">
      <tr class="table-active"> 
          <th > First Name</font> </th> 
          <th> Last Name</font> </th> 
          <th> SID</font> </th> 
          <th> Email</font> </th> 
          <th> Phone</font> </th> 
          <th> Time slot</font> </th> 
      </tr>';
 
if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["fname"];
        $field2name = $row["lname"];
        $field3name = $row["sid"];
        $field4name = $row["email"];
        $field5name = $row["phone"]; 
        $field6name = $row["slot"];
 
        echo '<tr class="table-secondary"> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>  
                  <td>'.$field6name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
    </thead>
  </table>
</div>
  </div>
</div>
</div>


</main>


<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>

 <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; 2019</small>
    </div>
  </footer> 

</body>

</html>
