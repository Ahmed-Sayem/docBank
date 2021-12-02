<?php
    

    if(isset($_POST['eemail']) && isset($_POST['epass']) 
       && !empty($_POST['eemail']) && !empty($_POST['epass'])){
  
        
        $var1=$_POST['eemail'];
        $var2=md5($_POST['epass']);
        
        try{
            
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqlquery="SELECT Email FROM employee WHERE Email='$var1' and Password='$var2'";
            
            try{
                $returnval=$dbcon->query($sqlquery);
                if($returnval->rowCount()==1){
                   
                    session_start();
                    
                    $_SESSION['empemail']=$var1;
                    ?>
                        <script>
							
                            window.location.assign('emphomepage.php');
                        </script>
                    <?php
                }
                else{
                  
                    ?>
                        <script>
                            window.location.assign('emplogin.php');
                        </script>
                    <?php
                }
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('emplogin.php');
                    </script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>
                    window.location.assign('emplogin.php');
                </script>
            <?php
        }
        
    }
    else{
        ?>
            <script>
                window.location.assign('emplogin.php');
            </script>
        <?php
    }
?>