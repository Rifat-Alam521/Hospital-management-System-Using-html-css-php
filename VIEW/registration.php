<!DOCTYPE html>
<html>
    <head>
        <title> ADMIN REGISTRATION PAGE</title>
    </head>
<body style="background-image:url(home.jpg);background-repeat:no-repeat;background-size:100% 500%;">

<h1 align="center"border="1">WELCOME TO ADMIN REGISTRATION PAGE</h1>
<table  align="center"  width="45%">
<tbody >
    <form  action="../CONTROL/signup.php" method="POST">
   
      <tr>
        <td>ADMIN ID : <br>
        </td>
        <td><input name="id" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Full Name : <br>
        </td>
        <td><input name="name" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Password : <br>
        </td>
        <td><input name="password" type="password"><br>
        </td>
      </tr>
      <tr>
        <td>Age : <br>
        </td>
        <td><input name="age" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Blood Group : <br>
        </td>
        <td><input name="blood" type="text" placeholder="write like (A+)"><br>
        </td>
      </tr>
      <tr>
        <td>Exprience in Year : <br>
        </td>
        <td><input name="exprience" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Contact Number<br>
        </td>
        <td><input name="mobile" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Address<br>
        </td>
        <td><textarea cols="30" rows="3" name="address"></textarea> </td>
      </tr>
      <tr>
        <td>Gender : <br>
        </td>
        <td>MALE:<input type="radio" name="type" value="MALE"><br>
        <td>FEMALE:<input type="radio" name="type" value="FEMALE"><br>
        </td>
      </tr>
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
