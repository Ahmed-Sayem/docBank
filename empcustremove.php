<?php
    $input = json_decode(file_get_contents('php://input'), true);
    if(isset($input['cid']) &&  !empty($input['cid']) && isset($input['nm']) &&  !empty($input['nm'])){
        
        $var1 = $input['nm'];
        $var2=$input['cid'];
	   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query = "INSERT INTO sarequests(cust_id,cust_name) Values($var2,'$var1')";

          
            try{
              
                $dbcon->exec($query);   
                return http_response_code(200);         
            }
            catch(PDOException $ex){
               
                ?>
            
                    <script>window.location.assign('empdetails.php')</script>
                <?php
                return http_response_code(400); 
            }
        }
        catch(PDOException $ex){
            ?>
      
                <script>window.location.assign('empdetails.php')</script>
            <?php
                return http_response_code(400);    
        }
       
    }
?>