<?php
   
    if(isset($_GET['dela']) && isset($_GET['deln']) && !empty($_GET['dela']) && !empty($_GET['deln'])){
        
        $var1=$_GET['dela'];
        $var2=$_GET['deln'];
      
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
            $query="INSERT INTO requests(acc_id,doc_num,details) VALUES($var1,'$var2','remove')";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('showdoc.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('docdetelepage.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('docdetelepage.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('docdetelepage.php')</script>
    
        <?php
        
    }
?>