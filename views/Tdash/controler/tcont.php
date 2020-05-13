<?php
  $var;
$var2;
  require_once '../models/db_connect.php';
  if(isset($_POST["add_picture"]))
	{
		insertPicture();
	}
  else if(isset($_POST["Update_teacher"]))
  {
    Profileupdate();
  }
  else if(isset($_POST["inserttext"]))
  {
    insertMessage();

  }



	function getteacher()
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
    $query="UPDATE `teacher` SET `Picture`='$target_file' WHERE `UserName`='$var'";
    execute($query);

}
  }

  function getdetails()
  {
    session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];
      echo $var;
    }



    $query="SELECT * FROM teacher WHERE UserName='$var'";
    $product=get($query);
    return $product[0];

  }

  function getpic()
  {


    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }




    $query="SELECT Picture FROM teacher WHERE UserName='$var'";
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


     $query="UPDATE teacher SET Institute='$institute',Phone='$phone',Address='$address',Password='$cpass' WHERE UserName='$var'";
    execute($query);

}
  }


  function getwebquestion()
	{

		$query ="SELECT * FROM wsques where Action='ADMIN'";
		$products = get($query);
		return $products[0];
	}


  function getreply(){
  if(!empty('$_SESSION["id"]')){
    $var2=$_SESSION["id"];
    $var=$_SESSION["loggedinuser"];

  }
    $query ="SELECT * from chatbox WHERE `Sender`='$var' and `Receiver`='$var2' or  `Sender`='$var2' and `Receiver`='$var' order by `Sl` DESC";
    $products = get($query);
    return $products;
  }

  function getainbox()
  {

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];
}

    $query ="SELECT * FROM tinbox where ReceiverId='$var'";
    $products = get($query);
    return $products;
  }


  function insertMessage()
  { session_start();
    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }
  if(isset($_POST["fnamee"])){


    $fname=$_POST["fnamee"];
    $sub=$_POST["subject"];


    $query="INSERT INTO `chatbox`(`Sender`, `Receiver`, `Message`) VALUES ('$var','$fname','$sub')";

    execute($query);
    $_SESSION["id"]=$fname;
  header("Location:../views/messagebox.php");
  }
  }
?>
