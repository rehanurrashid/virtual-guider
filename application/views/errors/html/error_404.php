<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Page Not Found</title>
	

		
		<!-- Vendor CSS -->

		

		<!-- Theme CSS -->
		
		<!-- Skin CSS -->
		\
		<!-- Theme Custom CSS -->
	

		

<!-- Animations-->
  <link href="css/animations.css" rel="stylesheet">

  <style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body{
	background-color: grey;
}
a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
 /*font awosme*/
@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.1.0');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.1.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff?v=4.1.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.1.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.1.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fa-file:before {
  content: "\f15b";
}

/*bootstrap*/
.text-center {
  text-align: center;
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
/*themse.css*/
.body-error {
	margin: 0 auto;
	max-width: 900px;
	width: 100%;
}
.body-error.error-outside {
		height: auto;
		padding: 20px;
	}
	.body-error.error-outside {
	display: table;
	height: 100vh;
}
.body-error.error-outside .center-error {
	display: table-cell;
	vertical-align: middle;
}
.body-error.error-inside {
	margin-top: 150px;
}
.body-error.error-outside .center-error {
	display: table-cell;
	vertical-align: middle;
}
.mb-xlg {
	margin-bottom: 30px !important;
}

.body-error .error-code {
	font-size: 140px;
	font-size: 14rem;
	line-height: 140px;
	line-height: 14rem;
	letter-spacing: -10px;
}
@media only screen and (min-width: 768px) and (max-width: 1150px) {
	.body-error.error-inside .error-code {
		font-size: 100px;
		font-size: 10rem;
		line-height: 100px;
		line-height: 10rem;
		letter-spacing: -7px;
	}
	@media only screen and (max-width: 767px) {
	.body-error .error-code {
		font-size: 90px;
		font-size: 9rem;
		line-height: 90px;
		line-height: 9rem;
		letter-spacing: -7px;
	}
	.text-dark {
	color: #171717 !important;
}
.text-semibold {
	font-weight: 600;
}
.m-none {
	margin: 0 !important;
}
.body-error .error-explanation {
	font-size: 20px;
	font-size: 2rem;
	line-height: 36px;
	line-height: 3.6rem;
}
@media only screen and (min-width: 768px) and (max-width: 1150px) {
	.body-error.error-inside .error-code {
		font-size: 100px;
		font-size: 10rem;
		line-height: 100px;
		line-height: 10rem;
		letter-spacing: -7px;
	}
	.body-error.error-inside .error-explanation {
		font-size: 18px;
		font-size: 1.8rem;
		line-height: 32px;
		line-height: 3.2rem;
	}
}
@media only screen and (max-width: 767px) {
	.body-error .error-code {
		font-size: 90px;
		font-size: 9rem;
		line-height: 90px;
		line-height: 9rem;
		letter-spacing: -7px;
	}
	.body-error .error-explanation {
		font-size: 16px;
		font-size: 1.6rem;
		line-height: 28px;
		line-height: 2.8rem;
	}

	.body-error.error-outside {
		height: auto;
		padding: 20px;
	}
}
</style>
	</head>
	<body>
		<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
		</div>
		<!-- start: page -->
		<section class="body-error error-outside">
			<div class="center-error">

				<div class="row">
					<div class="col-sm-12">
						<div class="main-error mb-xlg animated rotateInDownLeft fast">
							<h2 class="error-code text-dark text-center text-semibold m-none">404 <i class="fa fa-file"></i></h2>
							<p class="error-explanation text-center">We're sorry, something went wrong.</p>
						</div>
					</div>
					<!-- <div class="col-sm-4">
						<h4 class="text">Here are some useful links</h4>
						<ul class="nav nav-list primary">
							<li><a href="#"><i class="fa fa-caret-right text-dark"></i> Dashboard</a></li>
							<li><a href="#"><i class="fa fa-caret-right text-dark"></i> User Profile</a></li>
							<li><a href="#"><i class="fa fa-caret-right text-dark"></i> FAQ's</a></li>
						</ul>
					</div> -->
				</div>
			</div>
		</section>
		<!-- end: page -->
	</body>
</html>