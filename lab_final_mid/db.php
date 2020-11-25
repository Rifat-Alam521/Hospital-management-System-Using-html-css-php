<?php
class db
{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "company";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }
 function CheckUserreg($conn,$table,$id,$name,$dob,$address,$country,$state,$city,$doj,$bolb)
 {
    $result = $conn->query("INSERT Into  $table (id, name, dob, address,country,state,city,profile) VALUES('$id','$name','$dob','$address','$country','$state','$city','$doj','$bolb')");
    return $result;
 }
function CloseCon($conn)
 {
   $conn -> close();
 }
}
?>