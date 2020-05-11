<?php
  //for database
  include ('Tutiondb.php');



  $Sfirstname=$Slastname=$Semail=$Sgen=$Spass= $sql="";
  if(isset($_POST['studentsignup'])){
    if(!empty($_POST['fname'])){
      $Sfirstname = mysqli_real_escape_string($conn, $_POST['fname']);
    }

    if(!empty($_POST['lname'])){
      $Slastname= mysqli_real_escape_string($conn, $_POST['lname']);
    }

    if(!empty($_POST['uemail'])){
      $Semail = mysqli_real_escape_string($conn, $_POST['uemail']);

    }
    if(!empty($_POST['upass'])){
      $Spass = mysqli_real_escape_string($conn, $_POST['upass']);

    }
    if(!empty($_POST['ugen'])){
      $Sgen = mysqli_real_escape_string($conn, $_POST['ugen']);

    }
    $sql = "INSERT INTO student (UserName,Name,Email,Password,Gender,Picture)
              VALUES ('$Slastname','$Sfirstname','$Semail','$Spass','$Sgen','../storage/product_image/ava.png');";
              $sql2 = "INSERT INTO notification (Nmessage,Status)
                        VALUES ('$Slastname has joined as a Student!!','unread');";
      mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);


  }



  ?>







<?php
//for database
include ('Tutiondb.php');
$tfirstname=$tlastname=$temail=$tgen=$tpass= $tsql="";
if(isset($_POST['teachersignup'])){
  if(!empty($_POST['tfname'])){
    $tfirstname = mysqli_real_escape_string($conn, $_POST['tfname']);
  }

  if(!empty($_POST['tlname'])){
    $tlastname= mysqli_real_escape_string($conn, $_POST['tlname']);
  }

  if(!empty($_POST['tuemail'])){
    $temail = mysqli_real_escape_string($conn, $_POST['tuemail']);

  }
  if(!empty($_POST['tpass'])){
    $tpass = mysqli_real_escape_string($conn, $_POST['tpass']);

  }
  if(!empty($_POST['tugen'])){
    $tgen = mysqli_real_escape_string($conn, $_POST['tugen']);

  }

  $tsql = "INSERT INTO teacher (UserName,Name,Email,Password,Gender,Picture)
            VALUES ('$tlastname','$tfirstname','$temail','$tpass','$tgen','../storage/product_image/ava.png');";
    $tsql2 = "INSERT INTO notification (Nmessage,Status)
                      VALUES ('$tlastname has joined as a Teacher!!','unread');";

    mysqli_query($conn, $tsql);
      mysqli_query($conn, $tsql2);

      $signupt="ok";
}

?>
<!-- ADmin loginnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->
<?php
session_start();
require "db_connect.php";


$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT * FROM admin WHERE UserId='$uname' AND Password='$psw'";
    $result=get($query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["UserName"];

      header("Location:Adash/Dashboard.php");
    }
    else
    {

    }
  }


}
?>



<!-- Student loginnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->


<?php
$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT * FROM student WHERE UserName='$uname' AND Password='$psw'";
    $result=get($query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["UserName"];
      header("Location:Sdashboard/SDashboard.php");
    }
    else
    {

    }
  }


}
?>

<!-- teacher loginnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->


<?php
$eror= "top";

$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT * FROM teacher WHERE UserName='$uname' AND Password='$psw'";
    $result=get($query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["UserName"];
      header("Location:Tdash/Tdashboard.php");
    }
    else
    {
      $eror = "error";


      echo '<script>
      console.log("hi");

      </script>';

    }
  }


}
?>




<!DOCTYPE html>
<html>
    <head>
          <link href="owl.carousel.css" rel="stylesheet">
          <link href="style1.css" rel="stylesheet">
          <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

          <title>TUTION MEDIA</title>
          <style>
          * {box-sizing: border-box}
          body {font-family: Verdana, sans-serif; margin:0}
          .mySlides {display: none}
          img {vertical-align: middle;}

          /* Slideshow container */
          .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;

          }
          .quets{
            border:7px solid MediumSeaGreen;

            background-color:rgb(255,87,87);
            width:100%;
          }

          /* Next & previous buttons */
          .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
          }

          /* Position the "next button" to the right */
          .next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .prev:hover, .next:hover {
            background-color:rgba(0,0,0,0.8);
          }

          /* Caption text */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .active, .dot:hover {
            background-color: #717171;
          }

          /* Fading animation */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
          }

          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
          }
          </style>

    </head>

    <body>
    <!-- header paaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaart -->
        <header>
           <!--navigation part-->
               <nav>
                 <div class="m1">
                     <ul>
                        <li><a href="#"><i class="fa fa-address-card" aria-hidden="true"></i><b>Registration</b></a>
                          <div class="menu-Reg">
                               <ul>

                                 <li><lpop onclick="document.getElementById('tpop')
                                            .style.display='block'"
                                             style="width:100px;
                                             margin-top:200px;
                                             margin-left:20px;">
                                           <i class="fa fa-user-secret"style="color:black">Teacher</i>
                                   </lpop>
                                 </li>



                            			  <li>
                                      <lpop onclick="document.getElementById('spop')
                                           .style.display='block'"
                                            style="width:100px;
                                            margin-top:200px;
                                            margin-left:20px;" >
                                            <i class="fa fa-graduation-cap"style="color:black">Student</i></lpop>

                            				</li>

                                </ul>
                           </div>
                          </li>
                              <li><a href="#"> <lpop onclick="document.getElementById('modal-wrapper')
                  .style.display='block'"
                  style="width:100px;
                   margin-top:200px;
                 margin-left:20px;" >

                                <i class="fa fa-sign-in" aria-hidden="true"></i><b>Log In</b></a></lpop>
                        </li>
                      </ul>
                 </div>
                  <div class="m2">
                     <ul>
                       <li><a href="Home.php"><i class="fa fa-home"></i>Home</a></li>
                       <li><a href="About.php"><i class="fa fa-indent"></i>About</a></li>
                       <li><a href="Contact.php"><i class="fa fa-phone"></i>Contact</a></li>
                       <li><a href="Instruction.php"><i class="fa fa-play"></i>Instruction</a></li>
                     </ul>
                  </div>
               </nav>









               <div id="spop" class="modal">
                  <form class="modal-content animate" action="" method="post">
                  <div class="imgcontainer">
                       <span onclick="document.getElementById('spop').style.display='none'" class="close" title="Close PopUp">&times;</span>
                       <img src="pic/ava.png" alt="Student" class="avatar">
                       <h1 style="text-align:center " >New Student Signup</h1>
                     </div>

                     <div class="container">
                        <input type="text" placeholder="Enter Name" name="fname" pattern="[A-Za-z].{4,}" title="Example : Ayshik Khan or Ayshik" required></br>
                     <input type="text" placeholder="Enter Username" name="lname" pattern="[A-Z]+[A-Za-z.-].{2,}" title="EXAMPLE: Ayshik12/Ayshik" required></br>
                     <input type="text" placeholder="Enter Email" name="uemail"  title="EXAMPLE: ayshik123@gmail.com" required></br>
                        <input type="password" placeholder="Enter Password" name="upass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="EXAMPLE: @#Ayshik123 and minimum lenth 8" required> </br>


                    <td><center>Gender:

                          <input type="radio" id="male" name="ugen" value="male">
                                 <label for="male">Male</label>
                                 <input type="radio" id="female" name="gen" value="female" >
                                 <label for="female">Female</label></center>



                       </td>
                       <center><input type="checkbox" style="margin:20px 10px;" required> I accept all terms and conditions </center>
                       <center> <button type="submit" name="studentsignup" value="submit">Signup</button>	</center>
                     </div>


                   </form>
                   </div>






              <div id="tpop" class="modal">
                   	   <form class="modal-content animate" action="" method="post">
                               	    <div class="imgcontainer">
                                         <span onclick="document.getElementById('tpop').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                         <img src="pic/ava.png" alt="Student" class="avatar">
                                         <h1 style="text-align:center " >New Teacher Signup</h1>
                                   </div>
                                   <div class="container">
                                               <input type="text" placeholder="Enter Name" name="tfname" pattern="[A-Za-z].{4,}" title="Example : Ayshik Khan or Ayshik" required></br>
                                       	       <input type="text" placeholder="Enter Username" name="tlname" pattern="[A-Z]+[A-Za-z.-].{2,}" title="EXAMPLE: Ayshik12/Ayshik" required></br>
                                       	       <input type="text" placeholder="Enter Email" name="tuemail"  title="EXAMPLE: ayshik123@gmail.com" required></br>
                                               <input type="password" placeholder="Enter Password" name="tpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="EXAMPLE: @#Ayshik123 and minimum lenth 8" required> </br>
                                               <td>
                                                     <center>Gender:
                                                            <input type="radio" id="male" name="tugen" value="male">
                                                             <label for="male">Male</label>
                                                             <input type="radio" id="female" name="gen" value="female">
                                                             <label for="female">Female</label>
                                                     </center>
                                                </td>
                                                      <center><input type="checkbox" style="margin:20px 10px;" required> I accept all terms and conditions </center>
                                                      <center> <button type="submit" name="teachersignup" value="submit">Signup</button>	</center>
                                   </div>
                           </form>
                 </div>





                <div id="modal-wrapper" class="modal">

                   <form class="modal-content animate" action=""  method="post">

                     <div class="imgcontainer">
                       <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close">&times;</span>
                       <img src="pic/ava.png" alt="Student" class="avatar">
                       <h1 style="text-align:center " >Login</h1>
                     </div>

                     <div class="container">


                 	 <input type="text" placeholder="Enter Username" name="uname" title="Please Enter your UserName" required></br>
                       <input type="password" placeholder="Enter Password" name="psw"  title="Please Enter your Password" required> </br>


                      <!--<input type="text" placeholder="Enter Username" name="uname" value="<?php// echo $vname;?>">
                 	  <br><span style="color:red"><?php// echo $err_uname;?></span></td>


                       <input type="password" placeholder="Enter Password" name="pass" value="<?php// echo $pass;?>">
                                <br><span style="color:red"><?php// echo $err_pass;?></span></td>     -->


                 	<button type="submit" value="submit">Login</button>
                       <input type="checkbox" style="margin:26px 30px;"> Remember me
                       <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
                     </div>

                   </form>
                 </div>
</header>

<!--<sectiooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooon slide part>-->
           <section >
                        <div class="pic">
                        <div id="slider">
                            <figure>
                                <img src="pic/a.jpg">
                                <img src="pic/b.jpg">
                                <img src="pic/c.jpg">
                                <img src="pic/d.jpg">
                                <img src="pic/c.jpg">
                            </figure>
                       </div>
                     </div>
                </section>
<section> <div class="quets">
                <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="pic/AYSHIK.png" style="width:100%">

                </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="pic/MAHMUD.png" style="width:100%">

                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="pic/SHOHAN.png" style="width:100%">

                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>

                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                </div>

                <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                }
                </script>

   </div>
</section>
<!--foooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooter part-->
                <footer id="footer">
                      <div class="footer-content">
                           <div class="footer-one">
                               <h3>Contact Us</h3>
                               <ul>
                                  <li><a href="mahmudaiub51@gmail.com"><i class="fa fa-envelope"></i>Email:TutionM@gmail.com</a></li>
                                  <li> <a href="01839500005"><i class="fa fa-phone"></i>Phone:+008475859</a></li>
                                  <li> <a href="http//:www.googlemap.com"><i class="fa fa-home"></i>Address:kuril,Dhaka</a></li>
                               </ul>
                            </div>
                        </div>
                        <div class="footer-two">
                                   <ul>
                                      <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-wechat"></i></a></li>
                                       <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                     </ul>
                                </div>
                               <div class="footer-company">
                                     <div class="footer-three">
                                         <h3>company</h3>
                                         <ul>
                                            <li><a href="mahmudaiub51@gmail.com"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a></li>
                                            <li> <a href="01839500005"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy & policy</a></li>
                                            <li> <a href="http//:www.googlemap.com"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Careers</a></li>
                                            <li> <a href="http//:www.googlemap.com"><i class="fa fa-angle-double-right" aria-hidden="true"></i></i>Blogs</a></li>
                                         </ul>
                                      </div>
                                  </div>
                            <div class="footer-bottom">
                            <div class="footer-cop">
                                <p> @Tution Media|| All Rights reserved</p>
                            </div>
                        </div>
                    </footer>
                    <script>
                      var er = "no";
                      er = "<?php echo $eror; ?>";
                      console.log(er);
                      if(er=="error"){
                        swal({
                        title: "SORRY!",
                        text: "Please check your Username & Password!",
                        icon: "error",
                        button: "OK",
                      });
                      er ="no";
                      }
                    /*  var st = "no";
                      st = "<?php echo $signupt; ?>";
                      console.log(st);
                      if(st=="ok"){
                        swal({
                        title: "Congratulation!",
                        text: "You have REGISTERED as a Teacher!",
                        icon: "success",
                        button: "OK",
                      });

                      st="no";
                    }*/
                    </script>
  </body>
</html>
