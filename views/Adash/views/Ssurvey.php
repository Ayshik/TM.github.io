

<?php
	  require_once ('../controler/acont.php');


	   $product=gettsques();



?>









<!DOCTYPE html>
<html lang="en">
<head>

    <title>TEACHER Survey</title>

    <style type="text/css">
		// variables
	$font-stack-sans-serif: Roboto, Helvetica, Arial, sans-serif;
	$font-stack-serif: "Roboto Slab", Times, "Times New Roman", serif;
	$color: #333;
	$inputstylecolor: mediumspringgreen;



	// mixins
	@mixin box-sizing {
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}



	// resets
	html, body {
		height: 100%;
		font-size: 20px;
	}

	html {
		@include box-sizing;
	}

	*, *:before, *:after {
		@include box-sizing;
	}

	body {
		padding: 1em;
		margin: 72px;
		line-height: 1.5;
		background-color: #444;
		font-family: $font-stack-sans-serif;
		color: $color;
	}


	/* main ie fix */

	main {
		display: block;
	}


	/* headers */

	h1, h2, h3, h4, h5, h6 {
		line-height: 1.25;
		font-family: $font-stack-serif;
	}


	/* anchor links */

	a {
		text-decoration: none;
		&:hover,
		&:active {
			text-decoration: underline;
		}
		&:visited {
			color: purple;
		}
	}


	/* form elements */

	label {
		display: inline-block;
		font-weight: 700;
	}

	select, textarea, input {
		width: 100%;
		padding: .5em;
		margin: 0;
		font-family: $font-stack-sans-serif;
		font-weight: 400;
		font-size: 1rem;
		color: $color;
	}

	input[type=submit] {
		cursor: pointer;
		color: white;
	}


	/* input border bottom animation on focus */

	.input-animate {
		position: relative;
		-webkit-transition: color 200ms ease-in-out;
		-o-transition: color 200ms ease-in-out;
		transition: color 200ms ease-in-out;
		&:before {
			content: "";
			position: absolute;
			bottom: 0;
			left: 0;
			width: 0;
			border-bottom: solid 3px;
			color: $inputstylecolor;
			-webkit-transition: width 200ms ease-in-out;
			-o-transition: width 200ms ease-in-out;
			transition: width 200ms ease-in-out;
		}
	}

	.input-animate-target {
		border: none;
		&:focus, &:valid {
			outline: none;
		}
		&:focus ~ .input-animate:before, &:valid ~ .input-animate:before {
			width: 100%;
		}
	}


	/* font awesome */

	.fa {
		font-family: FontAwesome;
		font-style: normal;
	}



	// modules


	/* flex */

	.flex-cont {
		display: flex;
		align-items: center;
		height: 100%;
	}


	/* form */

	.form-cont {
		max-width: 100%;
		padding: 2em;
		border-radius: 3px;
		margin: auto;
		background-color: #eee;
		box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .5);
	}

	.form-heading {
		margin-top: 0;
		text-align: center;
	}

	.form-row {
		position: relative;
		margin-top: 1em;
	}

	.form-label {
		margin-bottom: .2em;
	}

	.form-textbox:valid ~ .form-check-icon:after {
		content: "\f00c";
		position: absolute;
		right: .5em;
		bottom: .4em;
		font-family: FontAwesome;
		font-style: normal;
		color: $inputstylecolor;
	}

	.form-submit {
		display: block;
		width: 11%;
		padding: 1em;
		border: none;
		margin: 2em auto 0;
		background-color: $inputstylecolor;
		font-weight: 700;
		color: white;
		transition: opacity 200ms ease-in-out;
		background: mediumseagreen;
    border-radius: 24px;
}
		&:hover, &:focus {
			opacity: .6;

		}




	// media queries

	@media only screen and (max-width:768px){
		html, body {
			font-size: 18px;
		}
	}
	@media only screen and (max-width:640px){
		html, body {
			font-size: 16px;
		}
	}


    </style>
</head>
<body>
	<div class="flex-cont">
		<div class="form-cont">
			<form method="post" action="../controler/acont.php"  enctype="multipart/form-data" class="form">
				<h1 class="form-heading">TEACHER SURVEY QUESTION</h1>
				<div class="form-content">
					<div class="form-row">
						<label for="first-name" class="form-label">QUESTION 1:</label>
						<input name="one" type="text" value="<?php echo $product["Question1"]?>" id="first-name" class="form-textbox input-animate-target" required>
						<div class="input-animate"></div>
						<div class="form-check-icon"></div>
					</div>
					<div class="form-row">
						<label for="first-name" class="form-label">QUESTION 2:</label>
						<input name="two" type="text" value="<?php echo $product["Question2"]?>" id="first-name" class="form-textbox input-animate-target" required>
						<div class="input-animate"></div>
						<div class="form-check-icon"></div>
					</div>
					<div class="form-row">
						<label for="first-name" class="form-label">QUESTION 3:</label>
						<input name="three" type="text" value="<?php echo $product["Question3"]?>" id="first-name" class="form-textbox input-animate-target" required>
						<div class="input-animate"></div>
						<div class="form-check-icon"></div>
					</div>
					<div class="form-row">
						<label for="first-name" class="form-label">QUESTION 4:</label>
						<input name="four" type="text" value="<?php echo $product["Question4"]?>" id="first-name" class="form-textbox input-animate-target" required>
						<div class="input-animate"></div>
						<div class="form-check-icon"></div>
					</div>
					<div class="form-row">
						<label for="first-name" class="form-label">QUESTION 5:</label>
						<input name="five" type="text" value="<?php echo $product["Question5"]?>" id="first-name" class="form-textbox input-animate-target" required>
						<div class="input-animate"></div>
						<div class="form-check-icon"></div>
					</div>

					<div>
						<input type="submit" name="Update_tsques" value="Submit" class="form-submit">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
