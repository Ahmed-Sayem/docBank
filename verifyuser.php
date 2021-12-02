<?php


    if(isset($_POST['uemail']) && isset($_POST['upass'])
       && !empty($_POST['uemail']) && !empty($_POST['upass'])){


        $var1=$_POST['uemail'];
        $var2=md5($_POST['upass']);

        try{

            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqlquery="SELECT Email FROM customers WHERE Email='$var1' and Password='$var2'";

            try{
                $returnval=$dbcon->query($sqlquery);
                if($returnval->rowCount()==1){

                    session_start();

                    $_SESSION['useremail']=$var1;
                    ?>
                        <script>
                            window.location.assign('homepage.php');
                        </script>
                    <?php
                }
                else{

                    ?>
                        <script>
                            window.location.assign('loginpage.php');
                        </script>
                    <?php
                }
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('loginpage.php');
                    </script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>
                    window.location.assign('loginpage.php');
                </script>
            <?php
        }

    }
    else{
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }
?>
