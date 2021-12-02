<?php
    

    if(isset($_POST['semail']) && isset($_POST['spass']) 
       && !empty($_POST['semail']) && !empty($_POST['spass'])){
  
        
        $var1=$_POST['semail'];
        $var2=$_POST['spass'];
        
        try{
            
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqlquery="SELECT Email FROM superadmin WHERE Email='$var1' and Password='$var2'";
            
            try{
                $returnval=$dbcon->query($sqlquery);
                if($returnval->rowCount()==1){
                   
                    session_start();
                    
                    $_SESSION['saemail']=$var1;
                    ?>
                        <script>
							
                            window.location.assign('superadminhomepage.php');
                        </script>
                    <?php
                }
                else{
                  
                    ?>
                        <script>
                            window.location.assign('superadminlogin.php');
                        </script>
                    <?php
                }
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('superadminlogin.php');
                    </script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>
                    window.location.assign('superadminlogin.php');
                </script>
            <?php
        }
        
    }
    else{
        ?>
            <script>
                window.location.assign('superadminlogin.php');
            </script>
        <?php
    }
?>