<?php 
include('html/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
<title>Assignment003 || Web Engineering</title>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/jquery-ui.min.css" />
<link rel="stylesheet" href="css/style.css" />

</head>
<body>

<header class="header-section">

<nav class="main-navbar">
<div class="container">

<ul class="main-menu">
<li><a href="index.php">Home</a></li>
<li><a href="html/registered.php">Registered</a></li>
</ul>
</div>
</nav>
</header>

<main>
  <div class="mt-5"></div>
  <section>
    <div class="card" style="width: auto; height: auto; margin-left: 2rem;">
     <div class="card-body">
            <h3 class="text-center">Student Registration Form</h3>
      <div class="card" style="width: auto; height: auto; margin-right: 10rem; margin-left: 5rem;" >
       <div class="card-body">

        <form method="post" action="connect.php">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
              </div>
              <input type="text" name="fname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required="">
            </div>

            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Last Name</span>
              </div>
              <input type="text" name="lname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required="">
            </div>

            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Student ID</span>
              </div>
              <input type="number" name="sid" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required="">
            </div>

            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
              </div>
              <input type="text" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required="">
            </div>   

            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Phone</span>
              </div>
              <input type="text" name="phone" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required="">
            </div>

            <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Time Slot</span>
                  </div>
                  <select name="slot" class="custom-select" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    <option value=" ">Choose...</option>
                    <option value="Slot-1: 8am to 10am">Slot-1: 8am to 10am</option>
                    <option value="Slot-2: 11am to 2pm">Slot-2: 11am to 2pm</option>
                    <option value="Slot-3: 3pm to 5pm">Slot-3: 3pm to 5pm</option>
                  </select>
            </div>
               <input type="submit" value="Submit" class="btn btn-outline-warning">
        </form>


        </div>
      </div>
      </div>
    </div>
  </section>
</main>
    


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>


  <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="margin-top: 5.3rem;">
    <div class="container text-center">
      <small>Copyright &copy; 2019</small>
    </div>
  </footer>

</body>


</html>
