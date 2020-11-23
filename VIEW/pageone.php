<?php
session_start(); 
if(empty($_SESSION["id"])) 
{
header("Location:Login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["id"];?></h3>
<br/><h5>Welcome to home page.</h5>


<h5>Do you want to go to <a href="pagetwo.php">nextpage</a></h5>

<h5>Do you want to go to <a href="myprofile.php">My Profile</a></h5>

<h5>Do you want to go to <a href="CheckAllUsers.php">All Users</a></h5>

<br/>
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   


