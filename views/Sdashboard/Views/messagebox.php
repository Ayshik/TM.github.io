<?php
session_start();
	require '../controler/scont.php';

$reply=getreply();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Box</title>

   <link rel="stylesheet" href="chat.css">
</head>


<style>

*{
    margin: 0;
    padding: 0;
    font-family: tahoma, sans-serif;
    box-sizing: border-box;
}
body{
    background: lightblue;
}
.message_box{
    width: 500px;
    min-width: 390px;
    height: 600px;
    background: #fff;
    padding: 25px;
    margin: 20px auto;
    box-shadow: 0 3px #ccc;
}
.message_logs{
    padding: 10px;
    width: 100%;
    height: 450px;
    background: #eee;
    overflow-x: hidden;
    overflow-y: scroll;

}
.message_logs::-webkit-scrollbar{
    width: 10px;
}
.message_logs::-webkit-scrollbar-thumb{
    border-radius: 5px;
    background: rgba(0,0,0,0.1);
}
.message{
    display: flex;
    flex-flow: row wrap;
    align-items: flex-start;
    margin-bottom: 10px;
}
.message .user-photo{
    width: 60px;
    height: 60px;
    background: #ccc;
    border-radius: 50%;
    overflow: hidden;
}
.message .user-photo img{
    width: 100%;
}
.message .message_chat{
    width: 80%;
    padding: 15px;
    margin:5px 10px 0;
    border-radius: 10px;
    color: #fff;
    font-size: 20px;
}
.friend .message_chat{
    background: #1adda4;
}
.self .message_chat{
    background: #1ddced;
    order: -1;
}
.chat-form{
    margin-top: 20px;
    display: flex;
    align-items: flex-start;
}
.chat-form textarea{
    background: #fbfbfb;
    height: 50px;
    width: 75%;
    border: 2px solid #eee;
    border-radius: 3px;
    resize: 3px;
    padding: 10px;
    font-size: 18px;
    color: #333;
}
.chat-form textarea:focus{
    background: #fff;
}
.chat-form textarea:focus::-webkit-scrollbar{
    width: 10px;
}
.chat-form textarea:focus::-webkit-scrollbar-thumb{
    border-radius: 5px;
    background: rgba(0,0,0,0.1);
}
.chat-form button{
    background: #1ddced;
    padding: 5px 15px;
    font-size: 30px;
    color: #fff;
    border: none;
    margin: 0 10px;
    border-radius: 3px;
    box-shadow: 0 3px 0 #0eb2c1;
    cursor: pointer;

    -webkit-transition: background .2s ease ;
    -moz-transition: background .2s ease  ;
    -o-transition: background .2s ease  ;
}
.chat-form button:hover{
    background: #13c8d9;
}



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
.eror{
	margin-top: 9px;
	background: #fe8b8e;
	padding: 0px;
	text-align: center;
	font-size: 16px;
	transition: all 0.5s ease;

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


<body>

	<form  method="post" onsubmit="return validate();" action="../controler/scont.php" enctype="multipart/form-data">
	<center><h1>InBox</h1></center>
    <div class="message_box">
        <div class="message_logs">

					<table id="table">
						<thead>
								<th>Date & Time</th>
								<th>Sender Id</th>
								<th>Reciever Id</th>
								<th>Massage</th>


						</thead>


						<tbody>
							<?php
									foreach($reply as $pro)
								{
									echo "<tr>";
											echo "<td>".$pro["Date&Time"]."</td>";
											echo "<td>".$pro["Sender"]."</td>";
											echo "<td>".$pro["Receiver"]."</td>";
										echo "<td>".$pro["Message"]."</td>";

									echo "</tr>";
								}
							?>

						</tbody>
					</table>
            </div>

        <div class="chat-form">
            <textarea name="massage" id="message"></textarea>

            <button name="send">send</button>

        </div>
				<div class="eror" id="error_message"></div>
</div>
	</form>
</body>
</html>
<script>

function validate(){


  var message = document.getElementById("message").value;

  var error_message = document.getElementById("error_message");

  error_message.style.padding = "10px";

  var text;



  if(message.length <=1){
    text = "Please Write Your massage in details.";
    error_message.innerHTML = text;
    return false;
  }
  alert("Message Sent Successfully!");
  return true;
}
</script>
