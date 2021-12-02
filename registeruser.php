<?php

    if(isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['upass']) && isset($_POST['utel']) && isset($_POST['uadd'])  && !empty($_POST['uname']) && !empty($_POST['uemail']) && !empty($_POST['upass']) && !empty($_POST['utel']) ){

        $var1=$_POST['uname'];
        $var2=$_POST['uemail'];
        $var3=md5($_POST['upass']);
		$var4=$_POST['utel'];
        $var5=$_POST['uadd'];

        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query="INSERT INTO customers(Name,Email,Password,Mobile_number,Address) VALUES('$var1','$var2','$var3','$var4','$var5')";

            try{

                $dbcon->exec($query);

                ?>
                    <script>window.location.assign('loginpage.php')</script>
                <?php
            }
            catch(PDOException $ex){

                ?>
                    <script>window.location.assign('signup.php')</script>
                <?php
            }

        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('signup.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('signup.php')</script>

        <?php

    }
?>
