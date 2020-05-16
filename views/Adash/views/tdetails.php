<?php


include('Dashboard/header.php');

include('Dashboard/navbar.php');


$products = getnoti();
$message=getmsgnoti();
$products = gettteacher();



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($sql="SELECT count(UserName) AS total FROM student"){

  $result=mysqli_query($conn,$sql);
  $values=mysqli_fetch_assoc($result);
  $num_rows=$values["total"];


}
if($query="SELECT count(UserName) AS total FROM teacher"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $num=$values["total"];

}


if($query="SELECT count(Sl) AS total FROM notification WHERE Status='unread'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $unread=$values["total"];

}

if($query="SELECT count(Sl) AS total FROM ainbox WHERE Status='unread'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $unreadmassage=$values["total"];

}

$monthly=($num * 500) + ($num_rows * 100);
$annual=($monthly * 12)



?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"><?php echo $unreadmassage ; ?></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <?php
                  foreach($message as $msg)

                  {
                  ?>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">


                    <img class="rounded-circle" src="../storage/product_image/icon.png" alt="">
                  <!--<div class="status-indicator bg-success"></div>-->

                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate"><?php echo $msg["Message"]?></div>
                    <div class="small text-gray-500"><?php echo $msg["SenderId"]?>---<?php echo $msg["Date&Time"]?></div>
                  </div>
                </a>

                <?php
                     }

                     ?>

                <a class="dropdown-item text-center small text-gray-500" href="Chatbox.php">Reply Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["loggedinuser"];?></span>
                <img class="img-profile rounded-circle" src="../storage/product_image/Admin.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">TEACHER INFORMATION TABLE</h1>
          <p class="mb-4">---------------------------------------------------------<a target="_blank" href=""></a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users Information</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>UserName</th>
                        <th>Name</th>
                      <th>Institute</th>
                      <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Password</th>
                  <th>Rating</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>UserName</th>
                        <th>Name</th>
                      <th>Institute</th>
                      <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Password</th>
                    <th>Rating</th>
                    </tr>
                  </tfoot>
                  <tbody>

                      <?php
                        foreach($products as $product)
                        {
                          echo "<tr>";
                            echo "<td>".$product["UserName"]."</td>";
                              echo "<td>".$product["Name"]."</td>";
                            echo "<td>".$product["Institute"]."</td>";
                    echo "<td>".$product["Email"]."</td>";
                      echo "<td>".$product["Phone"]."</td>";
                              echo "<td>".$product["Address"]."</td>";
                            echo "<td>".$product["Password"]."</td>";
                  echo "<td>".$product["Rating"]."</td>";
                          echo "</tr>";
                        }
                      ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>

            <?php




            include('Dashboard/footer.php');



            ?>
