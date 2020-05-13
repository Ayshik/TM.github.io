 <!DOCTYPE html>
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard.php">
     <div class="sidebar-brand-icon rotate-n-15">
       <i class="fas fa-laugh-wink"></i>
     </div>
     <div class="sidebar-brand-text mx-3">TM-Student <sup>TM</sup></div>
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
       <span>Student Profile</span>
     </a>
     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
         <h6 class="collapse-header">View & respond:</h6>
         <a class="collapse-item" href="pdash.php">Edit Profile</a>
         <a class="collapse-item" href="ddash.php">Delete Account</a>
       </div>
     </div>
   </li>

   <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact" aria-expanded="true" aria-controls="collapseUtilities">
       <i class="fas fa-fw fa-wrench"></i>
       <span>Contacts</span>
     </a>
     <div id="collapseContact" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
         <a class="collapse-item" href="Chatbox.php">Contact To Teacher</a>
         <a class="collapse-item" href="contact Admin.php">Contact To Admin</a>
       </div>
     </div>
   </li>
   <!-- Nav Item - Utilities Collapse Menu -->
   <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
       <i class="fas fa-fw fa-wrench"></i>
       <span>Survey</span>
     </a>
     <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
         <h6 class="collapse-header">Survey:</h6>
         <a class="collapse-item" href="tserdash.php">Teacher Survey</a>
         <a class="collapse-item" href="wdash.php">Website Survey</a>

       </div>
     </div>
   </li>

   <li class="nav-item">
     <a class="nav-link" href="note/index.html">
       <i class="fa fa-sticky-note"></i>
       <span>Notebook</span>
     </a>





   </li>


   <!-- Heading -->


   <!-- Nav Item - Pages Collapse Menu -->


   <!-- Nav Item - Charts -->


   <!-- Nav Item - Tables -->

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
         <a class="btn btn-primary" href="logout.php">Logout</a>
       </div>
     </div>
   </div>
 </div>
