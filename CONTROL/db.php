<?php
class db
{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUserlogin($conn,$table,$id,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE ID='". $id."' AND PassWord='". $password."'");
    return $result;
 }
 function resetPass($conn,$table,$id,$newpass)
 {
    $result =$conn->query("UPDATE ".$table." set PASSWORD='$newpass' WHERE ID='$id'");
    return $result;
 }
 function CheckUserreg($conn,$table,$id,$name,$password,$age,$blood,$exprience,$mobile,$address,$usertype)
 {
    $result = $conn->query("INSERT INTO  ".$table." (ID, NAME, PASSWORD, AGE, BLOOD, EXPRIENCE,MOBILE,ADDRESS,GENDER) VALUES('$id','$name','$password','$age','$blood','$exprience','$mobile','$address','$usertype')");
    return $result;
 }
 function searchProfile($conn,$table,$id)
 {
    $result=$conn->query("SELECT * FROM $table WHERE ID='$id'");
    return $result;
 }
 function CheckAllUser($conn,$table)
 {
    $result = $conn->query("SELECT * FROM $table");
    return $result;
 }

function CloseCon($conn)
 {
   $conn -> close();
 }
}
?>