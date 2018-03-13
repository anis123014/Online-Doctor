
<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styleblog.css">
    <link rel="stylesheet" type="text/css" href="new.css">
    <script src="js/jquery-1.3.2.min.js"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.cycle.all.min.js"></script>
    <title>doctor online</title>
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
        <div id="box">
            <div id="inner">
            <?php
            $con=@mysql_connect("localhost","root","");
                if(!$con)
            {echo('Could not connect:'.mysql_error());
                exit();
            }
            mysql_select_db("mysql",$con);
            //echo "Database connected";
            $name = $_POST['Name'];
            $sql = "SELECT * FROM project WHERE name='$name'"; 
        $result = mysql_query($sql) or die (mysql_error()); 
        while ($row = mysql_fetch_array($result)){  
        //echo '<div id="milo">';
        echo '<div id="a">Name        :'.'</div>';
        echo '<div id="aa">'.$row['Name'].'</div>';
        echo '<div id="a">Member No           :'.'</div>';   
        echo '<div id="aa">'.$row['MemberNo'].'</div>';
        echo '<div id="a">E-mail  :'.'</div>';
        echo '<div id="aa">'.$row['Email'].'</div>';
        echo '<div id="a">Blood Group     :'.'</div>';    
        echo '<div id="aa">'.$row['Bgroup'].'</div>';
        echo '<div id="a">Address     :'.'</div>';
        echo '<div id="aa">'.$row['Address'].'</div>';
        //echo '</div>';
    }
  ?></div>
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
    </div> 
</body>
</html>