<?php

  require_once '../models/db_connect.php';
 if(isset($_POST["edit_product"]))
  {
    Profileupdate();
  }
	function getteacher()
	{
		$query ="SELECT * FROM teacher";
		$products = get($query);
		return $products;
	}

  function getdetails()
	{
		$query="SELECT * FROM student WHERE UserName='a112'";
		$product=get($query);
		return $product;

	}

  function Profileupdate()
  {  $target_file=$_POST["prev_image"];
    $name=$_POST["name"];
    $uname=$_POST["username"];
    $institute=$_POST["institute"];
    $type=$_POST["type"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $password=$_POST["mpass"];
      $npassword=$_POST["npass"];
        $cpassword=$_POST["cpass"];
    /* //file upload
        $target_dir="../storage/product_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    //echo $target_file;*/
    if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
    {
      $target_dir="../storage/product_image/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      //echo 'No upload';
    }
    $query="UPDATE `student` SET 'UserName'='$uname','Name'='$name','Institute'='$institute','Type'='$type','Email'='$email','Phone'='$phone','Address'='$address','Password'='$cpassword',`Picture`='$target_file' WHERE `UserName`='a112'";
    execute($query);


  }


?>
