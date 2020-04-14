<?php
  $var;
  require_once '../models/db_connect.php';
  if(isset($_POST["add_picture"]))
  {
    insertPicture();
  }
  else if(isset($_POST["Update_student"]))
	{
		Profileupdate();
	}

  else if(isset($_POST["inserttext"]))
  {
    insertMessage();
  }
















  function getstudent()
  {
    $query ="SELECT * FROM student";
    $products = get($query);
    return $products;
  }


  function insertPicture()
  {
    {
      session_start();

      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }

     //file upload
        $target_dir="../storage/product_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    //echo $target_file;
    $query="UPDATE `student` SET `Picture`='$target_file' WHERE `UserName`='$var'";
    execute($query);
}

  }

  function getdetails()
  {
    session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }




    $query="SELECT * FROM student WHERE UserName='$var'";
    $product=get($query);
    return $product[0];

  }
  function getpic()
  {


    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }




    $query="SELECT Picture FROM student WHERE UserName='$var'";
    $pro=get($query);
    return $pro[0];

  }

  function Profileupdate()
  {
      session_start();

      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }

  if(isset($_POST["mpass"]) || isset($_POST["npass"]) || isset($_POST["cpass"])){



    $institute=$_POST["institute"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $password=$_POST["mpass"];
      $npassword=$_POST["npass"];
        $cpass=$_POST["cpass"];


     $query="UPDATE student SET Institute='$institute',Phone='$phone',Address='$address',Password='$cpass' WHERE UserName='$var'";
    execute($query);


  }
}

function getmessage()
{

    session_start();
  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $query ="SELECT * FROM chatbox where Receiver='$var'";
  $products = get($query);
  return $products;
}


function insertMessage()
{

  session_start();
if(!empty('$_SESSION["loggedinuser"]')){
$var=$_SESSION["loggedinuser"];

}
if(isset($_POST["fname"])){


  $fname=$_POST["fname"];
  $sub=$_POST["subject"];


  $query="INSERT INTO `chatbox`(`Sender`, `Receiver`, `Message`) VALUES ('$var','$fname','$sub')";
  echo $query;
  execute($query);

}
}






?>
