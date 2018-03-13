<?php
$error="one or more field is empty";
if($_POST[Name]==""||$_POST[MemberNo]==""||$_POST[Email]==""||$_POST[Bgroup]==""||$_POST[Address]=="")
 {
  header("LOCATION:rainbow_registration.php?id=$error");
 }

else
  {
    $con=mysql_connect("localhost","root","");
      if(!$con)
        die('Could not connect: '.mysql_error());
      else
      {
         mysql_select_db("mysql",$con);
         mysql_query("INSERT INTO project VALUES ('$_POST[Name]','$_POST[MemberNo]','$_POST[Email]','$_POST[Bgroup]','$_POST[Address]')",$con);
         mysql_close($con);

       header("LOCATION:rainbow.php?");

      }

  }


?>
