<?php

  require_once '../models/db_connect.php';
  if(isset($_POST["add_product"]))
	{
		insertPicture();
	}
	function getteacher()
	{
		$query ="SELECT * FROM teacher";
		$products = get($query);
		return $products;
	}

  function insertPicture()
  {

     //file upload
        $target_dir="../storage/product_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    //echo $target_file;
    $query="UPDATE `teacher` SET `Picture`='$target_file' WHERE `UserName`='a112'";
    execute($query);


  }

  function getProduct()
  {


    $query="SELECT * FROM teacher WHERE UserName='a112'";
    $product=get($query);
    return $product[0];

  }

?>
