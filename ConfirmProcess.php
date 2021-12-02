<?php
    $input = json_decode(file_get_contents('php://input'), true);
    if(isset($input['xid']) &&  !empty($input['xid']) && isset($input['yid']) &&  !empty($input['yid'])){
        
        $var2=$input['xid'];
        $var1=$input['yid'];
       
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
           
            $query = "UPDATE document SET confirm = true WHERE AccountAccount_id=$var2 AND Document_number='$var1'";
            $query1="DELETE FROM requests WHERE acc_id=$var2 AND doc_num='$var1'";

          
            try{
              
                $dbcon->exec($query);  
                $dbcon->exec($query1);             
            }
            catch(PDOException $ex){
               
                ?>
            
                    <script>window.location.assign('empdetails.php')</script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
      
                <script>window.location.assign('empdetails.php')</script>
            <?php
        }
       
    }
?>