<?php
    if( isset($_POST['atype']) && isset($_POST['csid'])
       && !empty($_POST['atype']) && !empty($_POST['csid'])){
        $var1=$_POST['atype'];
        $var2=date("Y-m-d");
        $var4=$_POST['csid'];
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query="INSERT INTO Account(Account_type,Date_opened,Customerscustomer_id) VALUES('$var1','$var2',$var4)";
            try{
                $dbcon->exec($query);
                ?>
                    <script>window.location.assign('homepage.php')</script>
                <?php
            }
            catch(PDOException $ex){
                ?>
                    <script>window.location.assign('create_acc.php')</script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('create_acc.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('create_acc.php')</script>
        <?php
    }
?>
