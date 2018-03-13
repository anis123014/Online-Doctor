<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleblog.css">
	<link rel="stylesheet" type="text/css" href="new.css">
	<link rel="stylesheet" type="text/css" href="newblog.css">
	
	<script src="js/jquery-1.3.2.min.js"></script>
    <script src="js/jquery.nivo.slider.js"></script> 
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.cycle.all.min.js"></script>
	
</head>
<body> 
	<div id="main">
		<div id="top">
			<ul> 
			    <li><a href="links.php">Important link</a></li>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="index.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>
			</div>
		<div id="atop">
		<ul>
				<li><a>
					<form action="showdata.php"  method="post" enctype="multipart/form-data">
						<input type="text" name="Name" size="25"/>
						<button type="reset" class="button" size="25">Clear All</button>
						<button type="submit" class="button" size="35">Search</button>
					</form>
					</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="agreement.php">Campaign</a></li>
				<li><a href="privacy.php">Privacy & Policy</a></li>
				<li><a href="staff.php">Staff</a></li>
				
			</ul>
		</div>
		<div id="logo">
			<img src="images/logo.jpg" height="97" width="270">

		</div>

		<div id="middle">
		<ul>
			    <li><a href="blog.php">Home</a></li>
				<li><a href="about us.php">About Us</a></li>
				<li><a href="all services.html">Services</a></li>
				<li><a href="diseases.html">Diseases</a></li>
				<li><a href="articles.php">Articles</a></li>
			    <li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
		<div id="speech">
			<div id="subspeech">
		
		<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>Welcome to our website </label>
    </div>
    <div id="right">
     <div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp &nbsp  <a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
</body>
</html>
		
		</div>
		</div>
		
		</div>
		<div id="sign">
			<form action="#"  method="post" enctype="multipart/form-data">
				Signup for Email updates : <input type="text" name="Name" size="25"/>
				<button type="submit" class="button">Signup</button>
					</form>
		</div>
		<div id="foot">
			&copy;All Right Reserved, Anisur Rahman Anis 
		</div>
		<script type="text/javascript">
    	//<!--  Load the slider  --> 
   		/* $(window).load(function() {
        $('#banner').nivoSlider()
    		});*/
		$("#banner > div:gt(0)").hide();
		setInterval(function() { 
  		$('#banner > div:first')
    	.fadeOut(8000)
    	.next()
    	.fadeIn(8000)
    	.end()
    	.appendTo('#banner');
		},  8000);
</script>
	</div>
</body>
</html>