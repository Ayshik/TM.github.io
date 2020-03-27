 <!DOCTYPE html>
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard.php">
     <div class="sidebar-brand-icon rotate-n-15">
       <i class="fas fa-laugh-wink"></i>
     </div>
     <div class="sidebar-brand-text mx-3">TM-ADMIN <sup>TM</sup></div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item -  -->
   <li class="nav-item active">
     <a class="nav-link" href="Dashboard.php">
       <i class="fas fa-fw fa-tachometer-alt"></i>
       <span>Dashboard</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
     Delete & Contact
   </div>

   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
       <i class="fas fa-fw fa-cog"></i>
       <span>Contact Users</span>
     </a>
     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
         <h6 class="collapse-header">Chat & Rating</h6>
         <a class="collapse-item" href="Chatbox.php">Chat Box</a>
         <a class="collapse-item" href="Trate.php">Rate Teacher</a>

       </div>
     </div>
   </li>

   <!-- Nav Item - Utilities Collapse Menu -->
   <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
       <i class="fas fa-fw fa-wrench"></i>
       <span>Users And comments</span>
     </a>
     <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
         <h6 class="collapse-header">Delete & comments & survey:</h6>
         <a class="collapse-item" href="Delete.php">Delete User</a>
         <a class="collapse-item" href="Scomments.php">Comments</a>
         <a class="collapse-item" href="Ssurvey.php">Teacher Survey</a>
         <a class="collapse-item" href="Wsurvey.php">Website Survey</a>
       </div>
     </div>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
     Users and admin
   </div>

   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
       <i class="fas fa-fw fa-folder"></i>
       <span>Actions and add ADMIN</span>
     </a>
     <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
         <h6 class="collapse-header">Login Screens:</h6>

         <a class="collapse-item" href="Asignup.php">Register Admin</a>

         <div class="collapse-divider"></div>
         <h6 class="collapse-header">Other Pages:</h6>
         <a class="collapse-item" href="404.php">404 Page</a>

       </div>
     </div>
   </li>

   <!-- Nav Item - Charts -->


   <!-- Nav Item - Tables -->
   <li class="nav-item">
     <a class="nav-link" href="tables.html">
       <i class="fas fa-fw fa-table"></i>
       <span>USERS</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
     <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

 </ul>
 <!-- End of Sidebar -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
 </a>



 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
         </button>
       </div>
       <div class="modal-body">Select "Logout" below if you are ready to Leave.</div>
       <div class="modal-footer">
         <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
         <a class="btn btn-primary" href="../Home.php">Logout</a>
       </div>
     </div>
   </div>
 </div>
