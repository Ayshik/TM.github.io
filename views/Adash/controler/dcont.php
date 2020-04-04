<?php

  require_once '../models/db_connect.php';
  $query ="Delete from teacher where UserName='$_GET[id]'";
  execute($query);
	header("Location:../views/Deletet.php");
  ?>
