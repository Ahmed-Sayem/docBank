<?php
   
    if(isset($_POST['ename']) && isset($_POST['eemail']) && isset($_POST['epass']) && isset($_POST['etel'])  && !empty($_POST['ename']) && !empty($_POST['eemail']) && !empty($_POST['epass']) && !empty($_POST['etel']) ){
        
        $var1=$_POST['ename'];
        $var2=$_POST['eemail'];
        $var3=md5($_POST['epass']);
		$var4=$_POST['etel'];
        
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="INSERT INTO employee(Name,Email,Password,Mobile_number) VALUES('$var1','$var2','$var3','$var4')";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('emplogin.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('empsignup.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('empsignup.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('empsignup.php')</script>
    
        <?php
        
    }
?>