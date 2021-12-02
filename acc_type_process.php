<?php

    if(isset($_POST['aid']) && isset($_POST['cid']) && isset($_POST['exacc']) && isset($_POST['neacc'])
    && !empty($_POST['aid']) && !empty($_POST['cid'])&& !empty($_POST['exacc']) && !empty($_POST['neacc'])  ){


    $var1=$_POST['aid'];
		$var2=$_POST['cid'];
    $var3=$_POST['exacc'];
		$var4=$_POST['neacc'];

        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query="UPDATE Account
                    SET Account_type='$var4'
                    WHERE Account_type='$var3' AND Account_id = $var1 AND Customerscustomer_id=$var2";

            try{

                $dbcon->exec($query);

                ?>
                    <script>window.location.assign('accountdetails.php')</script>
                <?php
            }
            catch(PDOException $ex){

                ?>
                    <script>window.location.assign('update_acc.php')</script>
                <?php
            }

        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('update_acc.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('update_acc.php')</script>

        <?php

    }
?>
