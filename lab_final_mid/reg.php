<?php
include('db.php');
$error="";
if(isset($_POST['button']))
{
   if(empty($_POST['id']) || empty($_POST['name']) || empty($_POST['dob']) || empty($_POST['address']))
   {
       $error="MUST FILL I ALL INFORMATION";
       echo $error;
   }
   else
   {   
       $id=$_POST['id'];
       $name= $_POST['name'];
       $dob =$_POST['dob'];
       $address =$_POST['address'];
       $country =$_POST['country'];
       $state =$_POST['state'];
       $city=$_POST['state'];
       $doj=$_POST['doj'];
       $bolb=$_FILES['fileUpload']['name'];
      
       $connection = new db();
       
       $conobj=$connection->OpenCon();
       $userQuery=$connection->CheckUserreg($conobj,"employee",$id,$name,$dob,$address,$country,$state,$city,$doj,$bolb);
       if ($conobj->query($userQuery) === TRUE)
        {
            echo "New record created successfully";
        } 
      else
        {
            echo "Error: " . $userQuery . "<br>" . $conobj->error;
        }

        $connection->CloseCon($conobj);
    }
    
     
}
?>