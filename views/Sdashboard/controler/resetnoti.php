<?php
session_start();
$var=$_SESSION["loggedinuser"];
  require_once '../models/db_connect.php';
  $query="UPDATE sinbox SET Status='read' WHERE ReceiverId='$var'";

  execute($query);
  echo $query;
  header("Location:../views/SDashboard.php");
  ?>
