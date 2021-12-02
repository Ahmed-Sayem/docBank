<?php
   
    if(isset($_POST['eemail']) && isset($_POST['ntel']) && !empty($_POST['eemail']) && !empty($_POST['ntel'])  ){
        
        
        $var1=$_POST['eemail'];      
		$var2=$_POST['ntel'];
        
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="UPDATE employee
                    SET Mobile_number='$var2'
                    WHERE Email='$var1'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('emplogin.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('empupdatemobile.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('empupdatemobile.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('empupdatemobile.php')</script>
    
        <?php
        
    }
?>