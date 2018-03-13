<!DOCTYPE HTML>
	<html>
		<body>
		<?php 
		$con=@mysql_connect("localhost","root","");
		if(!$con)
		{echo('Could not connect:'.mysql_error());
		exit();
		}
		echo"Connected";
		//create table
		mysql_select_db("mysql",$con);
		$sql="CREATE TABLE student(
		Name varchar(30),Id int,Department varchar(30),Email varchar(30),Phone int,Series int,Bgroup varchar(10),Address varchar(50), primary key(Id))";
		//Exequte query
		echo"table created";
		mysql_query($sql,$con);
		mysql_close($con);
		?>
		</body>
		</html>
