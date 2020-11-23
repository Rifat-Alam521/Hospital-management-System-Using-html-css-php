<?php
include('db.php');
session_start();
$error="";

if(isset($_POST['button']))
{
    if(empty($_POST['id']) || empty($_POST['oldpass']) || empty($_POST['newpass']) || empty($_POST['type']))
    {
        $error ="FILL ALL MUST";
        echo $error;
    }
    else
    {
        $id=$_POST['id'];
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        $cpass=$_POST['cpass'];
        $usertype=$_POST['type'];

        $connection = new db();

        $conobj = $connection->OpenCon();

        $userCheck=$connection->CheckUserlogin($conobj,$usertype,$id,$oldpass);
        $num=mysqli_fetch_array($userCheck);
        if($num>0)
        {
            if( $newpass===$cpass)
            {
                $pass=$connection->resetPass($conobj,$usertype,$id,$newpass);
                if($pass===TRUE )
                {
                    $_SESSION['msg1']="password change successfully!";
                    echo $_SESSION['msg1'];
                }
            }
            else
            {
                
                
                    $_SESSION['msg2']="password doesnot match";
                    echo $_SESSION['msg2'];
                
            }
        }
        $connection->CloseCon($conobj);
    }
}
?>