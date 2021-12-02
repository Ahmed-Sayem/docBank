<?php
    session_start();
    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){

        if(isset($_POST['da']) && isset($_POST['dn']) && isset($_POST['dd']) && !empty($_POST['da']) && !empty($_POST['dn']) && !empty($_POST['dd'])){

            $var1=$_POST['da'];
            $var2=$_POST['dn'];
            $var3=$_POST['dd'];

            if(isset($_FILES['dimage'])){
                $var4=$_FILES['dimage'];

                move_uploaded_file($var4['tmp_name'],"Credentials/$var3.jpg");
            }

            try{

                $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sqlquery="INSERT INTO document(AccountAccount_id,Document_number,Document_details,Document_image_path,confirm) VALUES($var1,$var2,'$var3','Credentials/$var3.jpg',false)";
                
                $sqlquery2 = "INSERT INTO requests(acc_id,doc_num,details) VALUES($var1,$var2,'Upload')";

                try{
                    $dbcon->exec($sqlquery);
                    $dbcon->exec($sqlquery2);
                    ?>
                        <script>
                            window.location.assign('homepage.php');
                        </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                            window.location.assign('empuploaddoc.php');
                        </script>
                    <?php
                }

            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('empuploaddoc.php');
                    </script>
                <?php
            }
        }
        else{
            ?>
                <script>
                    window.location.assign('empuploaddoc.php');
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
