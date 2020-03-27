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
<center><h2>Teacher Id:</h2><input type="text" name="fname" id="fname" disabled><br><br></center>


<div>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
</div>
<button class="button">Rate</button><br><br>
  <table id="table" border="1">
    <tr>
      <th>Student ID</th>
      <th>Student Name</th>
      <th>Teacher ID</th>
      <th>Teaching Month</th>
      <th>Time Maintaining</th>
      <th>Study Experience</th>
      <th>Teaching Quality</th>
      <th>Comments</th>
      <th>Rating</th>

    </tr>
    <tr>
      <td>Saad112</td>
      <td>Kazi Saad</td>
      <td>Ayshik112</td>
      <td>February</td>
      <td>Very good</td>
      <td>Excellent</td>
      <td>Excellent</td>
      <td>Best.I want to continue study.</td>
      <td>10</td>
    </tr>
    <tr>
     <td>Saad112</td>
      <td>Shohan Khan</td>
      <td>Ayshik112</td>
      <td>February</td>
      <td>good</td>
      <td>Excellent</td>
      <td>Excellent</td>
      <td>Good.I want to continue study.</td>
      <td>8</td>
    </tr>
    <tr>
      <td>Shopnil2</td>
      <td>Swopnil Mahmud</td>
      <td>Ayshik112</td>
      <td>May</td>
      <td>Very good</td>
      <td>Excellent</td>
      <td>Excellent</td>
      <td>He is a good teacher.</td>
      <td>9</td>
    </tr>
    <tr>
     <td>Rifa444</td>
      <td>Rifa Khan</td>
      <td>Shuvo312</td>
      <td>May</td>
      <td>Very Bad</td>
      <td>Bad</td>
      <td>Bad</td>
      <td>I dont want to continue study.</td>
      <td>1</td>
  </tr>
  </table>

<script>

               var table = document.getElementById('table');

               for(var i = 1; i < table.rows.length; i++)
               {
                   table.rows[i].onclick = function()
                   {
                        //rIndex = this.rowIndex;
                        document.getElementById("fname").value = this.cells[2].innerHTML;

                   };
               }

        </script>




</body>
</html>
