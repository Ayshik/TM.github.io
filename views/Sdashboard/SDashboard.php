<?php


include('sheader.php');

include('snavbar.php');



?>

<style>
table {
  border-collapse: collapse;
  width: 100%;

margin-top: 34px;


}


th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

table tr:not(:first-child){
               cursor: pointer;transition: all .25s ease-in-out;
           }
           table tr:not(:first-child):hover{background-color: #ddd;}



           .cardpro {
             box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
             max-width: 300px;
             margin: auto;
             text-align: center;
             font-family: arial;
             border-radius: 17px;
                 margin-top: 42px;

           }

           .title {
             color: grey;
             font-size: 18px;
           }

           button {
             border: none;
             outline: 0;
             display: inline-block;
             padding: 8px;
             color: white;
             background-color: #000;
             text-align: center;
             cursor: pointer;
             width: 100%;
             font-size: 18px;
           }

           a {
             text-decoration: none;

             color: black;
           }

           button:hover, a:hover {
             opacity: 0.7;
           }






           </style>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="min-height: 900px">

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
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">Ayshik Khan Started a New Tution!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    saad has signed up
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Report:Kazi saad has sent you a mail.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://photos.app.goo.gl/VLoVwg3z8rdMy14C6" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://photos.app.goo.gl/VLoVwg3z8rdMy14C6" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ayshik Khan</span>
                <img class="img-profile rounded-circle" src="https://lh3.googleusercontent.com/stYovA906ZBAqOzHLTIiBbthmd_mz6XthT_pArrPCIBlmTgByf7XGf3inM-wsULgEdnTh8II-3jwDUPt2ZZsWmgF-qc7Y7LBuQTluqe8AmX3XTHBIHNVqQ2oBcLJossiL0CeEXQeklw3DKfHO2sUEhbaP33tXnQtR_AdozcByjzUNmY0Yl-EX8UNQApSf90spk7pjzdXYmTWBvnH7-4S_CvcsTEcAhzpimqq0JT45k3D2yjGWxm4yZq1X1xIvEtnYlnbH4MmYWbUCYqoq6ci7lbd_zr3dmG9-1FLMMVeONbSfvIgmYgamI1QczRc2dSzl0Y820EVLTXz4OoFci42P7pv647xYzLHgDtYGk6Xy35TfmOMStNHS_-3ZBzgIUQlk4PEBF3ybuo8erJCUjX7L6vXQob_8qnjssS4hy2VvvJTia3EaikjsM_m-E_nnGCpalhmU1Nuu_ibXPKF7V_6NHTtHqaaO6nekzhm5OaEyfsuJ0Z9R4u_tY0lIxjCcc19vyoQLb-R_9zzxuZLQZOJz0SKjmegwZKnAejnhmygxnscDDbM5Umv7-kXSYEHjdH33Q0O1SMpYb-25t--fopgjgzQ0F-pUpN1G0_jV5bswnHsF42KBPMzvVcocZMG1ox8Nc6FmWD9DDPLEQ0hDBQcSahyfBgFamUYjneOu4NzHW19pU4=w322-h521-no">
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->


            <!-- Earnings (Monthly) Card Example -->


          <!-- Content Row -->
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <input type="text" name= "ft" placeholder="Find Teacher " width="80%">
            <input type="Submit" value="Find">

          </div>
          <div class="col-md-4"></div>

          <table id="table" border="1">
                <tr>
                  <th>From</th>
                  <th>Sender Id</th>
                  <th>Massage</th>


                </tr>
                <tr>
                  <td>Student</td>
                  <td>Ayshik112</td>
                  <td>I want to continue study.</td>

                </tr>
                <tr>
                  <td>Teacher</td>
                  <td>saad223</td>
                  <td>I Dont want to continue study.</td>
                </tr>
                <tr>
                  <td>Student</td>
                  <td>Sopnil</td>
                  <td>I want a teacher.</td>
                </tr>

              </table>



<div class="cardpro">
  <center><h2 style="text-align:center">User Profile</h2></center>
  <img src="https://lh3.googleusercontent.com/NebHoHuqhp7grdL3_8phy44hMwaYtuxevs0cGyxMe_kWnBw6mxyp3cC1sWmWPpEOBFeEMWKXbH3w_JmnJm17ZqVunF0cEYXFVHD0WpqZ5FgU7oIClyI09XDrwjXonQHTSLF9FfMZKWWH9QohxqgthW5xNG4glvYslvkPcVnO_NerQbjaZUtUb1E_56fXgHvPLC2Ha_G5REsh0obYmdWpNZPP7OjZTdbDgf9t0HqDkjhDJw6oiiMMDBlTr9y8RCrY2wDdXZdK70CbUdaf7JxeIfB69ceFGClZL78BUbc3UY91ri0x4YAr3uhMdd5gcQZq1BpGLsdAg1XiFrcrJ0bvC70R_4iIlHXu0T6NUIr7YqvHxoqd8B-LJsX033iYlsibrpzAzjQs_OqcVHySnt23DhjGcAwO3-zO8llc8HwFAUYXVV8Ey5JpEOcajb0ly2JRwJVvRgP6ztTOMY6nvVAIbdAl1B7AsLjvGUA4p1J2WFdTAIXd_aNFcRFRQ3JdQSZkDBdWEq3XrujCXtKTN3CoY3jNaCm7oqdpotMkH7GhaDyd5E_RlmjElfeBFNvJ82Tmu9vcSo4btdwC4FkJZZBw7iDwQvZKktmyOoKJcV9WjM3rooAeAU5MImZ4sfoi1rZILIoDFn8uNo5HEuKpwoNzZmlAYYVDrPpGmqcbol9J1bQks3g=w493-h657-no" alt="John" style="width:100%">
  <h1>Ayshik Khan</h1>
  <p class="title">Teacher</p>
  <p>American International University</p>
  <div style="margin: 24px 0;">
     <p>Kuril,Dhaka</p>
  </div>
  <p><button disabled>Ayshik112</button></p>
</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->







  <?php


  include('scripts.php');

  include('footer.php');



  ?>
