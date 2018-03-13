<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleblog.css">
	<link rel="stylesheet" type="text/css" href="page.css">
	<link rel="stylesheet" type="text/css" href="newblog.css">
	<link rel="stylesheet" type="text/css" href="stylehomepage.css">
	
	<script src="js/jquery-1.3.2.min.js"></script>
    <script src="js/jquery.nivo.slider.js"></script> 
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.cycle.all.min.js"></script>
	<title>about us doctor</title>
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

 <h2> <b>About Us </b><h2>
<p>

Our site is your destination for online medical consultations. 
We provide safe, affordable online medical consultations, complete with diagnoses and treatment 
options to anyone looking for access to quality medical professionals.
This is something we believe is making medical care more accessible to patients throughout the country.<p> <br> <br>

<p> We have based our business model on telemedicine, which means we use technology and 
telecommunications in order to provide our customers with remote health care. 
The manner in which we deliver our services allows our clients to benefit in a variety of ways.
 Firstly, utilizing our services, patients have access to medical professionals from 
just about anywhere. This means patients don’t have to be in the same area as their consultation in order to receive this service.</p> <br>

<p>What we offer is the chance for our clients to manage their chronic conditions in a way that is convenient for them, 
without actually having to schedule an appointment with a local doctor and going through the difficulties associated with that sort of option. </p> <br>
<p>
We work entirely with doctors licensed within Bangladesh. 
These professionals are the ones who deliver the online medical consultations, as well as provide patients with treatment options. </p> <br>
<b> What Conditions Do We Treat? </b> <br><br> <p> 
Our online medical consultants treat a range of conditions, including; <br>

 
    Blood Pressure <br>
    Cold Sores<br>
    Digestive Problems<br>
    Erectile Dysfunction<br>
    Flu<br>
    Herpes<br>
    Male Pattern Baldness<br>
    Motion Sickness<br>
    Seasonal Allergies<br>
    Shingles<br>
    Smoking Cessation<br>
    Thyroid Problems<br>
    Urinary Tract Infections<br><br> 
	We provide you with affordable, safe and quick online medical consultations 
	that give you the opportunity to effectively manage your chronic medical condition, without having to leave your home or office. 
	Our consultations are delivered at the destination of your choice, via your computer, so you don’t have to visit a doctor’s office.
 </p> <br> <br>
 <b>Our Team </b> <br><br>  <p> 

All of our BD licensed medical professionals are experienced, friendly and professional. 
These professionals all want the very best for their patients. Not only do
 these professionals know what to look for when it comes to seeing their patients,
 but they also have a thorough knowledge of the treatment options currently available. 
 In those unlikely instances where a patient’s needs are beyond the capabilities of the 
 online medical consultant, they will refer the patient to a land-based doctor. This is rare and it is always in the best interests of the patient. </p> <br>

<p>If this is not necessary, 
the medical consultant will provide you with information about your condition, 
as well as the treatment options that are available. You can rest assured that when you turn to our website, 
you will receive the best possible treatment in the most affordable and convenient manner possible. </p> <br> <br>


  
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