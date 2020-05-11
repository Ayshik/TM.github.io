<?php

  require_once '../models/db_connect.php';
  $query="UPDATE notification SET Status='read' WHERE Status='unread'";

  execute($query);
  header("Location:../views/Dashboard.php");
  ?>
