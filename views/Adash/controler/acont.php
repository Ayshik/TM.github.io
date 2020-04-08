<?php

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


  $query="UPDATE tsques SET Question1='$one',Question2='$two',Question3='$three',Question4='$four',Question5='$five' WHERE Action='ADMIN'";

  execute($query);


header("Location:../views/Ssurvey.php");

}

function insertMessage()
{
if(isset($_POST["fnamee"])){


  $fname=$_POST["fnamee"];
  $sub=$_POST["subject"];


  $query="INSERT INTO `chatbox`(`Sender`, `Receiver`, `Message`) VALUES ('ADMIN','$fname','$sub')";
  echo $query;
  execute($query);

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


?>
