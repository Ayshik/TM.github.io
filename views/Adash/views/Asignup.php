
<?php

	require '../controler/acont.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Admin Registration Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">




  <style>

  *{
		background-color: transparent;
    border: none;
		    cursor: pointer;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
  background: #3aaf9f;
}

.wrapper{
  max-width: 350px;
  width: 100%;
  height: auto;
  background: #fff;
  padding: 60px 45px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  border-radius: 20px;
}

.wrapper .title{
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: #3aaf9f;
}

.wrapper .social_media{
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.wrapper .social_media .item{
  margin: 0 5px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border: 2px solid #eeeeee;
  border-radius: 50%;
  cursor: pointer;
  color: #eeeeee;
  transition: all 0.5s ease;
}

.wrapper .social_media .item:hover{
  border: 2px solid #3aaf9f;
  color: #3aaf9f;
}

.wrapper .form .input_field{
  position: relative;
  margin-bottom: 10px;
}

.wrapper .form .input_field .input{
  width: 100%;
  padding: 12px;
  padding-left: 30px;
  border: none;
  background: #eeeeee;
}

.wrapper .form .btn{
  width: 70%;
  margin: 20px auto 0;
  background: #3aaf9f;
  text-align: center;
  padding: 12px;
  border-radius: 25px;
}

.wrapper .form .btn a{
  color: #fff;
}

.wrapper .form .input_field i{
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 14px;
  color: #1d2120;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #1d2120;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #1d2120;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #1d2120;
}











  </style>


</head>
<body>

<div class="wrapper">
  <div class="title">
    Admin Registration
  </div>
<form	method="post" action="../controler/acont.php" enctype="multipart/form-data">
  <div class="social_media">
    <div class="item">
      <i class="fab fa-facebook-f"></i>
    </div>
    <div class="item">
      <i class="fab fa-twitter"></i>
    </div>
    <div class="item">
      <i class="fab fa-google-plus-g"></i>
    </div>
  </div>

  <div class="form">
		<div class="input_field">
			<input type="text" name="uname" placeholder="UserName" class="input">
			<i class="fas fa-user"></i>
		</div>
    <div class="input_field">
      <input type="text" name="name" placeholder="Name" class="input">
      <i class="fas fa-user"></i>
    </div>
    <div class="input_field">
      <input type="text" name="email" placeholder="Email" class="input">
      <i class="far fa-envelope"></i>
    </div>
    <div class="input_field">
      <input type="password" name="pass" placeholder="Password" class="input">
      <i class="fas fa-lock"></i>
    </div>
    <div class="btn" >
    <input type="submit" name="insertadmin" value="Signup">
    </div>
  </div>
</form>
</div>

</body>
</html>
