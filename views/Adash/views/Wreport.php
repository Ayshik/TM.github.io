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

<center><h1>WEBSITE SURVEY REPORT</h1><br><br></center>




  <table id="table" border="1">
    <tr>
      <th>Student ID</th>
      <th>Student Name</th>
      <th>Satisfiction</th>
      <th>Technical Difficulties</th>
      <th>Comments</th>
      <th>Rating</th>

    </tr>
    <tr>
      <td>Saad112</td>
      <td>Kazi Saad</td>
      <td>Yes</td>
      <td>Sometimes</td>
      <td>Very good</td>
      <td>*****</td>

    </tr>
    <tr>
      <td>Saad112</td>
      <td>Kazi Saad</td>
      <td>Yes</td>
      <td>Sometimes</td>
      <td>Very good</td>
      <td>*****</td>
    </tr>
    <tr>
      <td>Saad112</td>
      <td>Kazi Saad</td>
      <td>Yes</td>
      <td>Sometimes</td>
      <td>Very good</td>
      <td>*****</td>
    </tr>
    <tr>
      <td>Saad112</td>
      <td>Kazi Saad</td>
      <td>Yes</td>
      <td>Sometimes</td>
      <td>Very good</td>
      <td>*****</td>
  </tr>
  <tr>
    <td>Saad112</td>
    <td>Kazi Saad</td>
    <td>Yes</td>
    <td>Sometimes</td>
    <td>Very good</td>
    <td>*****</td>
  </tr>
  <tr>
    <td>Saad112</td>
    <td>Kazi Saad</td>
    <td>Yes</td>
    <td>Sometimes</td>
    <td>Very good</td>
    <td>*****</td>
  </tr>
  <tr>
    <td>Saad112</td>
    <td>Kazi Saad</td>
    <td>Yes</td>
    <td>Sometimes</td>
    <td>Very good</td>
    <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
<tr>
  <td>Saad112</td>
  <td>Kazi Saad</td>
  <td>Yes</td>
  <td>Sometimes</td>
  <td>Very good</td>
  <td>*****</td>
</tr>
  </table>





</body>
</html>
