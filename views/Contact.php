<!DOCTYPE html>
<html>

<head>
<style>
@charset "UTF-8";

@font-face {
  font-family: "untitled-font-20";
  src:url("../fonts/untitled-font-20.eot"),
    url("../fonts/untitled-font-20.woff") format("woff"),
    url("../fonts/untitled-font-20.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;

}

[data-icon]:before {
  font-family: "untitled-font-20" !important;
  content: attr(data-icon);
  font-style: normal !important;
  font-weight: normal !important;
  font-variant: normal !important;
  text-transform: none !important;
  speak-as: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

[class^="icon-"]:before, [class*=" icon-"]:before {
    font-family: "untitled-font-20" !important;
    font-style: normal !important;
    font-weight: normal !important;
    font-variant: normal !important;
    text-transform: none !important;
    speak-as: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}



.page-header {
   background:MediumSeaGreen no-repeat center top;
   background-size: cover;
   padding: 30px 0 35px;
   margin: 0;
}

.page-header h1 {
   font-size: 30px;
   text-transform: uppercase;
   color: #f15b22;
   margin: 20px 0;
}

.heading .stickLine {
   width: 110px;
   height: 3px;
   background: #f15b22;
   margin: 30px auto;
}

.contact-box {
   width: 100%;
   display: inline-block;
   text-align: center;
   margin: 52px 0 0;
}

.contact-box .contactIcon {
   background: #f15b22;
   width: 81px;
   height: 81px;
   display: inline-block;
   border-radius: 50%;
   margin-bottom: 32px;
}

.contact-box .contactIcon span {
   display: table-cell;
   vertical-align: middle;
   width: 81px;
   height: 81px;
   font-size: 50px;
   color: black;
}

.contact-box a {
   display: block;
   color: #6a6767;
}

.contact-box address {
   display: block;
   color: #6a6767;
   padding: 0 30px;
}

.contact-box span {
   display: block;
   color: #6a6767;
}

.contact-box span a {
   display: inline-block;
}


.col-sm-4{
display: inline-block;
margin: 0 30px;
width: 370px;
height: 370px;
overflow: hidden;

}













body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}


.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


</style>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style1.css" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>




















     <body>


       <header>
          <!--navigation part-->
              <nav>
              <div class="m1">

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


          </header>







		 <section class="page-header">
            <div class="container">
                <h1>contact us</h1>
            </div>
        </section>

		<section class="content">
            <div class="container">
                <div class="home-event">
                    <div class="heading">
                        <div class="icon"><center><em class="icon icon-heading-icon"><h1><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></h1></em></center></div>
                        <div class="text">
                            <h2><center>Contact Us</center></h2>
                        </div>
                        <div class="info-text"><center>All the information you will need is listed below, just click on the page
                            you want to view and that's it.</center></div>
                        <div class="stickLine"></div>
                    </div>
                    <div class="row">
                       <div class="col-sm-4">
                            <div class="contact-box">
                                <div class="contactIcon">
                                    <span class="icon icon-phone"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                </div>
                                <a href="telTo:4408007654321">+01776264332</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-box">
                                <div class="contactIcon">
                                    <span class="icon icon-location-1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                </div>
                                <address>Bashundhara R\A, Dhaka, Bangladesh</address>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-box">
                                <div class="contactIcon">
                                    <span class="icon icon-message"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                </div>
                                <span>Email - <a href="mailTo:kasaad6620@gmail.com">kasaad6620@gmail.com</a></span>
                                <span>Website - <a href="#">tutionmedia.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section></br></br>





	 <section class="page-header">
            <div class="container">
                <h1>Comment Bellow</h1>
            </div>
        </section>
	 <section class="content">
	    <div class="container">
       <div class="heading">
                        <div class="icon"><center><em class="icon icon-heading-icon"><h1><i class="fa fa-comments" aria-hidden="true"></i></h1></em></center></div>
                        <div class="text">
                            <h2><center>Comment Bellow</center></h2>
                        </div>
                        <div class="info-text"><center>If you have any query or objection,please comment bellow.</center></div>
                        <div class="stickLine"></div>
                    </div>
  <div class="row">
    <div class="column">
      <img src="pic/map.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Division</label>
        <select id="country" name="country">
          <option value="dha">Dhaka</option>
          <option value="khu">Khulna</option>
          <option value="raj">Rajshahi</option>
		  <option value="chi">chittagong</option>
          <option value="bar">Barisal</option>
          <option value="syl">Sylhet</option>
        </select>
        <label for="subject">Your Comment</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
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












</body>
</html>
