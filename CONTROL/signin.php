<?php
include('db.php');
session_start();
$error="";

if(isset($_POST['button']))
{
    if(empty($_POST['id']) || empty($_POST['password']))
    {
        $error ="FILL ALL MUST";
        echo $error;
    }
    else
    {
        $id=$_POST['id'];
        $password=$_POST['password'];
        $usertype=$_POST['type'];

        $connection = new db();

        $conobj = $connection->OpenCon();

        $userCheck=$connection->CheckUserlogin($conobj,$usertype,$id,$password);

        if($userCheck->num_rows>0)
        {
            $_SESSION['id']=$id;
            $_SESSION['password']=$password;
            $_SESSION['type']=$usertype;
        }
        else
        {
            $error="ID and password invalid";
        }
        $connection->CloseCon($conobj);
    }
}
?>