<!DOCTYPE html>
<html>
    <head>
        <title> RESET PASSWORD</title>
    </head>
<body style="background-image:url(home.jpg);background-repeat:no-repeat;background-size:100% 500%;">

<h1 align="center"border="1"> RESET PASSWORD</h1>
<table  align="center"  width="45%">
<tbody >
    <form  action="../CONTROL/newpass.php" method="POST">
   
      <tr>
        <td> ID : <br>
        </td>
        <td><input name="id" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Old Password : <br>
        </td>
        <td><input name="oldpass" type="password"><br>
        </td>
      </tr>
      <tr>
        <td> New Password : <br>
        </td>
        <td><input name="newpass" type="password"><br>
        </td>
      </tr>
      <tr>
        <td> Confirm Password : <br>
        </td>
        <td><input name="cpass" type="password"><br>
        </td>
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
            <input type="submit" name="button" value="SUBMIT">
           <input type="reset" name="button" value="RESET">
           <a href="Login.php"><b><input type="button" value="LOGIN"></b></a>
           <a href="mainHome.php"><b><input type="button" value="HOME"></b></a>
        </td>
    </tr>
    </form>
    </tbody>
</table>
</body>
</html>
