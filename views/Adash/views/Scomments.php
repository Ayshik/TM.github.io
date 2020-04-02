<?php

	require '../controler/acont.php';
	$products = gettcomments();


?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
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
</style>
</head>
<body>

<center><h2>Comments</h2></center
>

<table>

  <thead>
    <th>Student ID</th>
    <th>Student Name</th>
    <th>Teacher ID</th>
    <th>Teaching Month</th>
    <th>Time Maintaining</th>
    <th>Study Experience</th>
    <th>Teaching Quality</th>
    <th>Comments</th>
    <th>Rating</th>
      <th>Date and Time</th>


  </thead>
  <tbody>

    <?php
      foreach($products as $product)
      {
        echo "<tr>";
          echo "<td>".$product["SId"]."</td>";
          echo "<td>".$product["SName"]."</td>";
          echo "<td>".$product["TeacherId"]."</td>";
          echo "<td>".$product["TeachingMon"]."</td>";
          echo "<td>".$product["TimeMain"]."</td>";
          echo "<td>".$product["StudyExp"]."</td>";
          echo "<td>".$product["TeachingQ"]."</td>";
          echo "<td>".$product["Comments"]."</td>";
          echo "<td>".$product["Rating"]."</td>";
            echo "<td>".$product["D&T"]."</td>";

        echo "</tr>";
      }
    ?>



</tbody>
</table>

</body>
</html>
