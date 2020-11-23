<?php
session_start(); 
if(empty($_SESSION["id"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<body style="background-image:url(home.jpg);background-repeat:no-repeat;background-size:100% 220%;">
<center>
<br><br><br>
<h2><big><big>WELCOME TO ADMIN PAGE <br></big></big></h2>
<br>
<h3><?php  echo "LOGIN ID: "; echo $_SESSION["id"];?></h3>
<br>
<a href="myprofile.php"><b><input type="button" value="YOUR PROFILE"></b></a>
<br>
<br>
<br>
<form method="post" action="addnewdoctor.php" name="addnewdoctor">
  <input name="addnewdoctor" value="ADD NEW DOCTOR" type="submit">
</form>
<br>
<br>
<form method="post" action="searchdoctor.php" name="viewdoctor">
  <input name="searchdoctor" value="SEARCH DOCTOR PROFILE" type="submit">
</form>
<br>
<br>
  <a href="logout.php"><b><input type="button" value="LOGOUT"></b></a>
</center>

</body></html>
