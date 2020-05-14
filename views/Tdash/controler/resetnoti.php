<?php
session_start();
$var=$_SESSION["loggedinuser"];
  require_once '../models/db_connect.php';
  $query="UPDATE tinbox SET Status='read' WHERE ReceiverId='$var'";

  execute($query);
  header("Location:../views/Tdashboard.php");
  ?>
