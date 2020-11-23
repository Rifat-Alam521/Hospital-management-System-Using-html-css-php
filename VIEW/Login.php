<?php 
include('../CONTROL/signin.php');
if(isset($_SESSION['id']))
{ if(isset($_POST['id']))
    {
        if($_POST['type']=="patienttable")
        {
            header("Location: pageone.php"); 
        }
       else if($_POST['type']=="admintable")
        {
            header("Location: admin.php"); 
        }
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>  LOGIN PAGE</title>
    </head>
<body style="background-image:url(home.jpg);background-repeat:no-repeat;background-size:100% 280%;">
<h1 align="center"border="1">WELCOME TO LOGIN PAGE</h1>
<table  align="center"  width="45%">
    <form  action="" method="POST">
    <td><b>Email:</b></td>
    <td><input type="text" placeholder="ID" size="30" name="id" required  ></td>
    </tr>
    <tr>
        <td><b>PassWord:</b></td>
        <td><input type="password" placeholder="PASSWORD" name=" password" size="30" required></td>
    </tr>
    <tr>
        <td>
            <label><h3>select one user type:</h3></label><br>
             PATIENT:<input type="radio" name="type" value="patienttable" required>
            DOCTOR:<input type="radio" name="type" value="doctortable" required >
            ADMIN:<input type="radio" name="type" value="admintable" required>
        </td>
    </tr>
    <tr>
        <td>
            <br>
            <input type="submit" name ='button' value="LOGIN">
           <input type="reset" name="button" value="RESET">
           <span><? php echo $error; ?></span>
           <a href="mainHome.php"><b><input type="button" value="HOME"> </b></a>
           <a href="changepass.php"><b><input type="button" value=ResetPassword></b></a>
        </td>
    </tr>
    </form>
   
</table>
</body>
</html>
