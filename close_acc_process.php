<?php
    if(isset($_POST['aid']) && isset($_POST['cid']) && !empty($_POST['aid']) && !empty($_POST['cid'])  ){
    $var1=$_POST['aid'];
		$var2=$_POST['cid'];
    $var4=date("Y-m-d");
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query="UPDATE Account SET Date_closed='$var4' WHERE Account_id = $var1 AND Customerscustomer_id=$var2";
            try{
                $dbcon->exec($query);
                ?>
                    <script>window.location.assign('accountdetails.php')</script>
                <?php
            }
            catch(PDOException $ex){
                ?>
                    <script>window.location.assign('close_acc.php')</script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('close_acc.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('close_acc.php')</script>
        <?php
    }
?>
