<?php

  require_once '../models/db_connect.php';
  $query ="Delete from student where UserName='$_GET[id]'";
  execute($query);
	header("Location:../views/Deletes.php");
  ?>
