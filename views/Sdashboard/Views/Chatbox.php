<?php

	require '../controler/scont.php';
	$products = getmessage();


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

* {
  box-sizing: border-box;
}


col-75.input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 83px 12px 21px 78px;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  position:center;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
     background: #66acb3;
  padding: 84px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }


</style>
</head>
<body>

<center><h1>Chat Box</h1><br><br></center>

<form  method="post" action="../controler/scont.php" enctype="multipart/form-data">


  <table id="table" border="1">
  <thead>


    <th>From</th>
      <th>Sender Id</th>
  <th>Massage</th>
    <th>Date & Time</th>



  </thead>


  <tbody>
    <?php
      foreach($products as $product)
      {
        echo "<tr>";


          echo "<td>Teacher</td>";
          echo "<td>".$product["Sender"]."</td>";
  echo "<td>".$product["Message"]."</td>";
            echo "<td>".$product["Date&Time"]."</td>";


        echo "</tr>";
      }
    ?>

  </tbody>
  </table>



   <!--<button class="button">Send</button><br><br>-->
   <div class="container">
<center><h2>To Id :</h2><input type="text" name="fname" id="fname" required><br><br></center>
     <div class="row">


       <div class="col-25">
        <h2> <label for="subject">Massage Box:</label><h2>
       </div>
       <div class="col-75">
         <textarea id="subject" name="subject" placeholder="Write Your Massage.."  style="height:200px; font-size:30px;" required></textarea>
       </div>
     </div>
     <div class="row">
       <input type="submit" name="inserttext" value="Submit">
     </div>

   </div>
    </form>
<script>

               var table = document.getElementById('table');

               for(var i = 1; i < table.rows.length; i++)
               {
                   table.rows[i].onclick = function()
                   {

                        document.getElementById("fname").value = this.cells[1].innerHTML;

                   };
               }

        </script>




</body>
</html>
