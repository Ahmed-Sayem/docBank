<?php
    $input = json_decode(file_get_contents('php://input'), true);
    if(isset($input['eid']) &&  !empty($input['eid'])){
        
        $var2=$input['eid'];
	   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="DELETE FROM employee WHERE employee_id='$var2'";

          
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