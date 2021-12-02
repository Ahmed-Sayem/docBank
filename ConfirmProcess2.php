<?php
    $input = json_decode(file_get_contents('php://input'), true);
    if(isset($input['xxid']) &&  !empty($input['xxid']) && isset($input['yyid']) &&  !empty($input['yyid'])){
        
        $var2=$input['xxid'];
        $var1=$input['yyid'];
       
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="DELETE FROM requests WHERE acc_id=$var2 AND doc_num='$var1'";

            try{
              
                $dbcon->exec($query);            
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