<!DOCTYPE html>
<html>
    <head>
        <title>  REGISTRATION PAGE</title>
    </head>
<body>
<table  align="center"  width="45%">
    <form  action="reg.php" method="POST" enctype="multipart/form-data">
    <tr>
        <td><b>EMP id:</b></td>
        <td><input type="text" placeholder="ID" size="30" name="id" ></td>
    </tr>
    <tr>
    <td><b>Name:</b></td>
    <td><input type="text" placeholder="Name" size="30" name="name"   ></td>
    </tr>
    <tr>
    <td><b>Date of Birth:</b></td>
    <td><input type="date" placeholder="Date of Birth" size="30" name="dob"></td>
    </tr>
    <tr>
        <td><b>Address:</b></td>
        <td><input type="text" placeholder="Address" size="30" name="address" ></td>
    </tr>
    <tr>
        <td><b>Country:</b></td>
        <td>
            <select name="country">
                <option value="BANGLADESH">BANGLADESH</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="canada">CANADA</option>
            </select>
        </td>
    </tr>
    <tr>
    <td><b>State:</b></td>
        <td>
            <select name="state">
                <option value="DHAKA">DHAKA</option>
                <option value="BARISHAL">BARISHAL</option>
                <option value="NEWYORK">NEWYORK</option>
                <option value="FLORIDA">FLORIDA</option>
                <option value="MANCHESTER">MANCHESTER</option>
                <option value="LIVERPOOL">LIVERPOOL</option>
                <option value="MANITOBA">MANITOBA</option>
                <option value="BRITISH COLOMBO">BRITSH COLMBO</option>
            </select>
        </td>
    </tr>
    </tr>
    <tr>
    <td><b>city:</b></td>
        <td>
            <select name="state">
                <option value="DHAKA">DHAKA</option>
                <option value="BARISHAL">BARISHAL</option>
                <option value="NEWYORK">NEWYORK</option>
                <option value="FLORIDA">FLORIDA</option>
                <option value="MANCHESTER">MANCHESTER</option>
                <option value="LIVERPOOL">LIVERPOOL</option>
                <option value="MANITOBA">MANITOBA</option>
                <option value="BRITISH COLOMBO">BRITSH COLMBO</option>
            </select>
        </td>
    </tr>
    <tr>
    <td><b>Date of Joining:</b></td>
    <td><input type="date" placeholder="Date of Joining" size="30" name="doj"></td>
    </tr>
    <tr>
    <td><b>Profile Pic:</b></td>
    <td>
        <input type="file" name="fileToUpload" id="fileToUpload ">
    </td>
    </tr>
    <tr>
        <td>
            <br>
            <input type="submit" name="button" value="SUBMIT">
        </td>
    </tr>
    </tr>
    </form>
</table>
</body>
</html>
