<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>

</head>

<style>
*{
  margin: 8px;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
	    font-weight: bold;
}

body{
  background: #fece0c;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 350px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px rgba(254,236,164,1);
}

.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper .input_field{
  margin-bottom: 10px;
}

.wrapper .input_field input[type="text"],
.wrapper textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}

.wrapper .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #fece0c;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}




</style>



<body>

<div class="wrapper">
  <h2>Contact Student</h2>
  <div id="error_message"></div>
  <form id="myform" onsubmit="return validate();">
    <div class="input_field">
			<label for="Name">From:</label >
        <input type="text" placeholder="Sender" id="" >
    </div>
    <div class="input_field">
			<label for="subject">To:</label>
        <input type="text" placeholder="Receiver" id=""><br><br>
    </div>
		<div class="input_field">
			<label for="subject">Subject:</label>
				<input type="text" placeholder="Subject" id="subject"><br><br>
		</div>

    <div class="input_field">

        <textarea placeholder="Message" id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>



</body>

</html>
<script>

function validate(){

  var subject = document.getElementById("subject").value;
  var message = document.getElementById("message").value;

  var error_message = document.getElementById("error_message");

  error_message.style.padding = "10px";

  var text;

  if(subject.length < 10){
    text = "Please Write your problem Subject correctly";
    error_message.innerHTML = text;
    return false;
  }

  if(message.length <= 40){
    text = "Please Write your problem in details";
    error_message.innerHTML = text;
    return false;
  }
  alert("Your Report has been sent");
  return true;
}
</script>
