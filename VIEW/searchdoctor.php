<html>
    <head>
        <title>doctor profile search</title>
    </head>
    <body style="background-image:url(home.jpg);background-repeat:no-repeat;background-size:100% 220%;">
        <center>
            <br>
            <br>
            <br>
            <h1><b>DOCTOR PROFILE SEARCH</b></h1>
            <form action ="" method="post">
                <input type="text" name="id" placeholder="Enter the id to search"></br>
                <input type="submit" name="search" value="SEARCH">
            </form>
            <?php
                 include('../CONTROL/db.php');
                 if(isset($_POST['search']))
                 {
                     if(empty($_POST['id']))
                     {
                          echo $error ="ENTER THE ID";
                     }
                     else
                     {
                        $id=$_POST['id'];
                        $connection = new db();

                        $conobj = $connection->OpenCon();
                
                        $search=$connection->searchProfile($conobj,"doctortable",$id);
                        while($row = mysqli_fetch_array($search))
                        {
                            ?>
                            <form  action="" method="POST">
                            ID:<input type="text" name="ID"  value="<?php echo  $row['ID'] ?>" readonly/>
                            NAME:<input type="text" name="NAME" value="<?php echo $row['NAME'] ?>"readonly/>
                            AGE:<input type="text" name="AGE" value="<?php echo $row['AGE'] ?>"readonly/>
                            MOBILE:<input type="text" name="MOBILE"value="<?php echo $row['MOBILE'] ?>"readonly />
                            ADDRESS:<input type="text" name="ADDRESS" value="<?php echo $row['ADDRESS'] ?>"readonly/>
                            GENDER:<input type="text" name="GENDER" value="<?php echo $row['GENDER'] ?>"readonly/>
                            </form>
                            <?php
                        }
                     }
                 }
            ?>
        </center>
    </body>
</html>