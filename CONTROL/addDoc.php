<?php
include('db.php');
$error="";
if(isset($_POST['button']))
{
   if(empty($_POST['id']) || empty($_POST['name']) || empty($_POST['password']) || empty($_POST['age']) || empty($_POST['blood']) || empty($_POST['exprience']) || empty($_POST['mobile']) ||empty($_POST['address']) || empty($_POST['type']))
   {
       $error="MUST FILL I ALL INFORMATION";
       echo $error;
       
   }
   else
   {   
       $id=$_POST['id'];
       $name= $_POST['name'];
       $password =$_POST['password'];
       $age =$_POST['age'];
       $blood =$_POST['blood'];
       $exprience =$_POST['exprience'];
       $mobile =$_POST['mobile'];
       $address =$_POST['address'];
       $usertype=$_POST['type'];
       
      
       $connection=new db();

       $conobj=$connection->OpenCon();
            $userQuery=$connection->CheckUserreg($conobj,"doctortable",$id,$name,$password,$age,$blood,$exprience,$mobile,$address,$usertype);
            if ($userQuery === TRUE)
                {
                    echo "New record created successfully value=";
                    echo $userQuery;
                } 
            else
                {
                    echo "Error: " . $userQuery . "<br>" . $conobj->error;
                }
                $connection->CloseCon($conobj);
        }
       
    }  
     
?>