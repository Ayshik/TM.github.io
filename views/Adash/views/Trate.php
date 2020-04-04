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

table tr:not(:first-child){
               cursor: pointer;transition: all .25s ease-in-out;
           }
           table tr:not(:first-child):hover{background-color: #ddd;}

           *{
               margin: 0;
               padding: 0;
           }
           .rate {
               float: left;
               height: 46px;
               padding: 0 10px;
                   padding-left: 578px;

           }
           .rate:not(:checked) > input {
               position:absolute;
               top:-9999px;
           }
           .rate:not(:checked) > label {
               float:right;
               width:1em;
               overflow:hidden;
               white-space:nowrap;
               cursor:pointer;
               font-size:30px;
               color:#ccc;
                   margin-right: 36px;
           }
           .rate:not(:checked) > label:before {
               content: '★ ';
           }
           .rate > input:checked ~ label {
               color: #ffc700;
           }
           .rate:not(:checked) > label:hover,
           .rate:not(:checked) > label:hover ~ label {
               color: #deb217;
           }
           .rate > input:checked + label:hover,
           .rate > input:checked + label:hover ~ label,
           .rate > input:checked ~ label:hover,
           .rate > input:checked ~ label:hover ~ label,
           .rate > label:hover ~ input:checked ~ label {
               color: #c59b08;
           }


           .button {
             background-color: #f4511e;
             border: none;
             color: white;
             padding: 16px 32px;
             text-align: center;
             font-size: 16px;
             margin: 4px 2px;
             opacity: 0.6;
             transition: 0.3s;
             display: inline-block;
             text-decoration: none;
             cursor: pointer;
                 border-radius: 10px;
                     margin-left: -26px;
           }

.button:hover {opacity: 1}



</style>
</head>
<body>

<center><h1>Rate Teacher</h1><br><br></center>
<form method="post" action="../controler/acont.php" enctype="multipart/form-data" class="form-horizontal form-material">
<center><h2>Teacher Id:</h2>
	<input type="text" name="fname" id="fnameid"  disabled><br><br></center>


<div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="*****" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="****" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="***" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="**" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="*" />
    <label for="star1" title="text">1 star</label>
  </div>
</div>
<button name="add_Rate" class="button">Rate</button><br><br>


  <table id="table" border="1">
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
</form>
<script>

               var table = document.getElementById('table');

               for(var i = 1; i < table.rows.length; i++)
               {
                   table.rows[i].onclick = function()
                   {
                        //rIndex = this.rowIndex;
                        document.getElementById("fnameid").value = this.cells[2].innerHTML;

                   };
               }

        </script>




</body>
</html>
