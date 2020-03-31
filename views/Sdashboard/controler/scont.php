<?php

  require_once '../models/db_connect.php';
  if(isset($_POST["add_picture"]))
  {
    insertPicture();
  }
  else if(isset($_POST["Update_student"]))
	{
		Profileupdate();
	}
  function getstudent()
  {
    $query ="SELECT * FROM student";
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
    $query="UPDATE `student` SET `Picture`='$target_file' WHERE `UserName`='Ayshik111'";
    execute($query);


  }

  function getdetails()
  {


    $query="SELECT * FROM student WHERE UserName='Ayshik111'";
    $product=get($query);
    return $product[0];

  }

  function Profileupdate()
  {

    $institute=$_POST["institute"];

    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $password=$_POST["mpass"];
      $npassword=$_POST["npass"];
        $cpass=$_POST["cpass"];


    $query="UPDATE `student` SET 'Institute'=$institute,'Phone'=$phone,'Address'=$address,'Password'=$password WHERE `UserName`='Ayshik111'";
    execute($query);


  }


?>
