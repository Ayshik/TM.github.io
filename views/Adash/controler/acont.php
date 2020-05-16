<?php
$var;
  require_once '../models/db_connect.php';
  if(isset($_POST["add_Rate"]))
  {
    insertrating();
  }
  else if(isset($_POST["Update_wsques"]))
  {
    updatewsq();
  }
  else if(isset($_POST["Update_tsques"]))
  {
    updatetsq();
  }
  else if(isset($_POST["inserttext"]))
  {
    insertMessage();

  }
  else if(isset($_POST["insertadmin"]))
  {
    insertadmin();
  }
  else if(isset($_POST["send"]))
  {
    sendmessagetochatbox();
  }


	function getainbox()
	{
		$query ="SELECT * FROM ainbox where Status='unread'";
		$products = get($query);
		return $products;
	}


  function gettcomments()
	{
		$query ="SELECT * FROM tcomments";
		$products = get($query);
		return $products;
	}


  function gettwsreport()
  {
    $query ="SELECT * FROM wsreport";
    $products = get($query);
    return $products;
  }

  function gettteacher()
  {
    $query ="SELECT * FROM teacher";
    $products = get($query);
    return $products;
  }

  function gettstudent()
  {
    $query ="SELECT * FROM student";
    $products = get($query);
    return $products;
  }
  function insertrating()
  {
      if(isset($_POST["fname"])){
    $name=$_POST["rate"];
      $fname=$_POST["fname"];


    $query="UPDATE teacher SET Rating='$name' WHERE UserName='$fname'";

    execute($query);


  }

}

function getwsques()
{

  $query ="SELECT * FROM wsques";
  $products = get($query);
  return $products[0];
}


function updatewsq()
{

    $one=$_POST["one"];
      $two=$_POST["two"];
        $three=$_POST["three"];
          $four=$_POST["four"];
            $five=$_POST["five"];


  $query="UPDATE wsques SET Question1='$one',Question2='$two',Question3='$three',Question4='$four',Question5='$five' WHERE Action='ADMIN'";

  execute($query);


header("Location:../views/Wsurvey.php");

}

function gettsques()
{

  $query ="SELECT * FROM tsques";
  $products = get($query);
  return $products[0];
}

function updatetsq()
{

    $one=$_POST["one"];
      $two=$_POST["two"];
        $three=$_POST["three"];
          $four=$_POST["four"];
            $five=$_POST["five"];
            $six=$_POST["six"];
            $seven=$_POST["seven"];
            $eight=$_POST["eight"];


  $query="UPDATE tsques SET Question1='$one',Question2='$two',Question3='$three',Question4='$four',Question5='$five', Question6='$six',Question7='$seven',Question8='$eight' WHERE Action='ADMIN'";

  execute($query);


header("Location:../views/Ssurvey.php");

}

function insertMessage()
{ session_start();
if(isset($_POST["fnamee"])){


  $fname=$_POST["fnamee"];
  $slno=$_POST["sl"];
  $sub=$_POST["subject"];


  $query="INSERT INTO `chatbox`(`Sender`, `Receiver`, `Message`) VALUES ('ADMIN','$fname','$sub')";
  $query2="UPDATE ainbox SET Status='read' WHERE Sl='$slno'";

  echo $query;
  //execute($query);
  execute($query2);
  $_SESSION["id"]=$fname;
header("Location:../views/messagebox.php");
}
}

function insertadmin()
{


  $auname=$_POST["uname"];
  $aname=$_POST["name"];
  $aemail=$_POST["email"];
    $apass=$_POST["pass"];


  $query="INSERT INTO `admin`VALUES ('$auname','$aname','$aemail','$apass')";
  echo $query;
  execute($query);

}

function getunread()
{

  $query ="SELECT count(Sl) AS total FROM notification WHERE Status='unread'";
  $products = get($query);

  return $products;
  $unread=$products["total"];


}

function getnoti()
{

  $query ="SELECT * from `notification` WHERE Status='unread' order by `SL` DESC";
  $products = get($query);
  return $products;
}

function getreply()
{

if(!empty('$_SESSION["id"]')){
  $var=$_SESSION["id"];

}
  $query ="SELECT * from chatbox WHERE `Sender`='ADMIN' and `Receiver`='$var' or  `Sender`='$var' and `Receiver`='ADMIN' order by `Sl` DESC";
  $products = get($query);
  return $products;
}

function isLoggedIn()
{
  if (isset($_SESSION['loggedinuser'])) {
    return true;
  }else{
    return false;
  }
}


function getmsgnoti()
{

  $query ="SELECT * from `ainbox` WHERE Status='unread' order by `SL` DESC";
  $products = get($query);
  return $products;
}

function sendmessagetochatbox()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){

  $var2=$_SESSION["id"];
  }


  $aemail=$_POST["massage"];


  $query2="INSERT INTO chatbox(Sender,Receiver,Message) VALUES ('ADMIN','$var2','$aemail')";

  $query="UPDATE sinbox SET Type='ADMIN',SenderId='ADMIN',ReceiverId='$var2',Subject='Reply',Message='$aemail',Status='unread' WHERE SenderId='ADMIN' and ReceiverId='$var2'";
  $query3="UPDATE tinbox SET Type='ADMIN',SenderId='ADMIN',ReceiverId='$var2',Subject='Reply',Message='$aemail',Status='unread' WHERE SenderId='ADMIN' and ReceiverId='$var2'";


 execute($query2);
 execute($query3);
 execute($query);

echo $query;

header("Location:../Views/messagebox.php");

}
?>
