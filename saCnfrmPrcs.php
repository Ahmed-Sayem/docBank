<?php
    if(isset($_GET['cid']) &&  !empty($_GET['cid'])){
        
        $var2=$_GET['cid'];
       
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
           
            $query = "DELETE FROM customers WHERE customer_id=$var2";
        
          
            try{
                $dbcon->exec($query);  
                ?>
                    <script>window.history.back();</script>
                <?php           
            }
            catch(PDOException $ex){
                ?>
            
                    <script>window.location.assign('saconf.php')</script>
                <?php
              
            }
        }
        catch(PDOException $ex){
            ?>
            
                    <script>window.location.assign('saconf.php')</script>
                <?php
        }
       
    }
?>