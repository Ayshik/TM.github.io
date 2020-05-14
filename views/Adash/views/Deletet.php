<?php

	require '../controler/acont.php';
	$products = gettteacher();


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>DELETE TEACHER</title>
<style>
table {
  border-collapse: collapse;
margin-left: 272px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

table tr:not(:first-child){
               cursor: pointer;transition: all .25s ease-in-out;
           }
           table tr:not(:first-child):hover{background-color: #ddd;}

           .btn {
   background-color: red;
   border: none;
   color: white;
   padding: 12px 16px;
   font-size: 16px;
   cursor: pointer;
	 border-radius: 10px;
 }


 .btn:hover {
   background-color: RoyalBlue;
 }

 a:link{


   color: white;
   text-decoration: none;

 }
 a:visited{

color: white;

 }

</style>
</head>
<body>

<center><h1>DELETE TEACHER</h1><br><br></center>




<table id="table" border="1">
  <thead>
    <th>UserName</th>
      <th>Name</th>
    <th>Institute</th>
    <th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Password</th>
<th>Delete</th>
  </thead>


  <tbody>
    <?php
      foreach($products as $product)
      {
        echo "<tr>";
          echo "<td>".$product["UserName"]."</td>";
            echo "<td>".$product["Name"]."</td>";
          echo "<td>".$product["Institute"]."</td>";
  echo "<td>".$product["Email"]."</td>";
    echo "<td>".$product["Phone"]."</td>";
            echo "<td>".$product["Address"]."</td>";
          echo "<td>".$product["Password"]."</td>";
echo '<td><button class="btn"><a href="../controler/dcont.php?id='.$product["UserName"].'" i class="fa fa-trash">  Delete</a></td>';
        echo "</tr>";
      }
    ?>

  </tbody>








</table>





</body>
</html>
