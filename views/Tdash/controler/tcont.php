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
  else if(isset($_POST["insertreport"]))
  {
    insertreportadmin();
  }

  else if(isset($_POST["senttoteacher"]))
  {
    sendmessagetoteacher();
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
    $npassword=$_POST["npass"];
      $cpass=$_POST["cpass"];
    session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }


    if($npassword==$cpass){

    $institute=$_POST["institute"];


    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $password=$_POST["mpass"];
      $npassword=$_POST["npass"];
        $cpass=$_POST["cpass"];


     $query="UPDATE teacher SET Institute='$institute',Phone='$phone',Address='$address',Password='$password' WHERE UserName='$var'";
    execute($query);
    echo '<script language="javascript">';
    echo 'alert("successfully updates.")';
    echo '</script>';

}

else{
  echo '<script language="javascript">';
  echo 'alert("yor password not match!!!!")';
  echo '</script>';
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



  function insertreportadmin()
  { session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $aname=$_POST["sub"];
    $aemail=$_POST["msg"];


    $query="INSERT INTO ainbox(Type,SenderId,Subject,Message,Status) VALUES ('Teacher','$var','$aname','$aemail','unread')";
    $query2="INSERT INTO chatbox(Sender,Receiver,Message) VALUES ('$var','ADMIN','$aemail')";

    execute($query);
    execute($query2);

  header("Location:../Views/contact Admin.php");
  }

  function sendmessagetoteacher()
  { session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }
  $uid=$_POST["rec"];
    $aname=$_POST["sub"];
    $aemail=$_POST["msg"];


    $query="INSERT INTO sinbox(Type,SenderId,ReceiverId,Subject,Message,Status) VALUES ('Teacher','$var','$uid','$aname','$aemail','unread')";

    $query2="INSERT INTO chatbox(Sender,Receiver,Message) VALUES ('$var','$uid','$aemail')";

   execute($query);
      execute($query2);
    echo $query;

    echo $query2;


  header("Location:../Views/Tdashboard.php");
  }

  function getmsgnoti()
  {


      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }

    $query ="SELECT * from `tinbox` WHERE Status='unread' and ReceiverId='$var' order by `SL` DESC";
    $products = get($query);
    return $products;
  }


?>
