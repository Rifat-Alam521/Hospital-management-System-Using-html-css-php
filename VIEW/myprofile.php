<?php
include('../CONTROL/db.php');
session_start(); 
if(empty($_SESSION["id"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->CheckUserlogin($conobj,$_SESSION['type'],$_SESSION["id"],$_SESSION["password"]);

if ($userQuery->num_rows > 0)
 {
    while($row = $userQuery->fetch_assoc())
     {
       $id= $row['ID'];
        $name= $row["NAME"];
        $age=$row["AGE"];
        $gender=$row["GENDER"];

      }
}

?>
<!DOCTYPE html>
<html>
<body style="background-image:url(home.jpg);background-repeat:no-repeat;background-size:100% 500%;">
<center>
  <table>
      <th><big><big> YOUR PROFILE INFORMATION <br></th><br>
    <tr>
      <td><label><b>LOGIN ID: <?php echo $id ?></b></label></td>
    </tr>
    <tr>
      <td><label><b>NAME: <?php echo $name?></b></label></td>
    </tr>
    <tr>
      <td><label><b>AGE: <?php echo $age?></b></label></td>
    </tr>
    <tr>
      <td><label><b>GENDER: <?php echo $gender?></b></label></td>
    </tr>
    <tr>
      <td>
    <a href="logout.php"><b><input type="button" value="LOGOUT"></b></a>
      </td>
    </tr>
    <tr>
      <td>
    <a href="admin.php"><b><input type="button" value="PREVIOUS PAGE"></b></a>
      </td>
    </tr>
<br/>
  </table>
</center>
</body>
</html>
 


