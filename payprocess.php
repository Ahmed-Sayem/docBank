<?php
session_start();
if (isset($_POST['aid']) && isset($_POST['amnt']) && !empty($_POST['aid']) && !empty($_POST['amnt'])) {

    $var1 = $_POST['aid'];
    $var2 = $_POST['amnt'];
    $var3 = date("Y-m-d");

    $var6 = $_SESSION['useremail'];

    $var4 = "SELECT customer_id FROM customers WHERE Email='$var6'";

    $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;", "root", "");
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {

        $obj = $dbcon->query($var4);
        $table_data = $obj->fetchAll();
        $id = $table_data[0]['customer_id'];
        //   echo $id;

        $query = "INSERT INTO payemnt (Payemnt_amount,Payment_date,AccountAccount_id,cust_id) VALUES ('$var2','$var3','$var1','$id')";
        //echo $query;
        try {
            $dbcon->exec($query);
?>
            <script>
                window.location.assign('paymentdetails.php');
            </script>
        <?php
        } catch (PDOException $ex) {
        ?>
            <script>
                window.location.assign('pay.php');
            </script>
        <?php

        }
    } catch (PDOException $ex) {
        ?>
        <script>
            window.location.assign('pay.php');
        </script>
    <?php
    }
} else {
    ?>
    <script>
        window.location.assign('pay.php');
    </script>

<?php

}
?>