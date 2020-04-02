<?php

  require_once '../models/db_connect.php';

	function getainbox()
	{
		$query ="SELECT * FROM ainbox";
		$products = get($query);
		return $products;
	}

  
  function gettcomments()
	{
		$query ="SELECT * FROM tcomments";
		$products = get($query);
		return $products;
	}










?>
