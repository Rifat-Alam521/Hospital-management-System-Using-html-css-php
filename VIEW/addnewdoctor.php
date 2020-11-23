<!DOCTYPE html>
<html>
<body style="background-image:url(home.jpg);background-repeat:no-repeat;background-size:100% 220%;">
<br>
<br>
<center>
    <form method="post" action="../CONTROL/addDoc.php" >
    <big><big>Doctor Info :
<br>
  <br>
  </big></big>
  <table width:="50%">
    <tbody >
      <tr>
        <td>DOCTOR ID : <br>
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
    </tbody>
  </table>
  <br>
  <br>
  <input name="button" value="ADD" type="submit">
 <input name="reset" value="RESET" type="reset"> <big><big><br>
 <a href="admin.php"><b><input type="button" value="ADMIN PAGE"></b></a>
  </big></big>
</form>
</center>
</body>
</html>