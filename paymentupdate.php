<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Payment Details</title>
          <style>
          body {
                 background-image: url("eighteen.jpg");
                 font-family: 'Sofia'; font-size: 30px;
          }
          .container{
            height:450px;
            background-color: #d1274b;
          }
          .button{
            background-color: orangered;
            width: 220px;
          }
          .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 20%;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
            border-radius: 30px;
            }

            .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            }

            .sidenav a:hover {
            color: #f1f1f1;
            }

            .main {
            margin-left: 160px;
            font-size: 28px; 
            padding: 0px 10px;
            }

            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }
            div { 
                text-align: center;
             }
             .table1 table{
                text-align: center;
                table-layout: auto;
                background-color: gainsboro;
                width: 70%;
                padding:20px;
                margin: 1em; 
            }
            .table1 tr{
                text-align: center;
                background-color: whitesmoke;
                width: 70%;
                padding:20px;
                margin: 1em; 
            }
            input[type=search], select {
                width: 50%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
          </style>
    </head>


<?php
    session_start();
    if(isset($_SESSION['saemail']) && !empty($_SESSION['saemail'])){
?>


<body>
    <div class="sidenav">
    <br><br><br><br>
        <a href="empdetails.php"><b>Employee Details</b></a>
        <a href="custdetails.php"><b>Customer Details</b></a>
        <a href="paymentupdate.php"><b>Payment Details</b></a>
        <a href="saconf.php"><b>Confirmations</b></a>
        
        <br><br>
        <button class = "button bt" input type="button" id="logoutbtn">Logout</button>
    </div>
    <div class="main">
    <br>
        <center>
        <br>
        <h1><b><i>__Payments__</i></b></h1>
        <br>
        <dev class ="table1">
        <table>
            <thead>
                <tr>
                <th>Serial number</th>
                <th>Customer ID</th>
                <th>Account ID</th>
                <th>Amount</th>
                <th>Payment date</th>	
                </tr>
            </thead>
        <tbody>
        </center>
    </div>
</body>

<?php
    try{
        
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sqlquery="SELECT serial_number,AccountAccount_id,Payemnt_amount,Payment_date,cust_id FROM Payemnt";
        
        try{
            $returnval=$dbcon->query($sqlquery);
            
            $custtable=$returnval->fetchAll();
            
            foreach($custtable as $row){
                ?>
                    <tr>
                        <td><?php echo $row['serial_number'] ?></td>  
                        <td><?php echo $row['cust_id'] ?></td> 
                        <td><?php echo $row['AccountAccount_id'] ?></td>   
                        <td><?php echo $row['Payemnt_amount'] ?></td>   
                        <td><?php echo $row['Payment_date'] ?></td> 
                                                                    
                    </tr>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <tr>
                    <td colspan="4">Data read error ... ...</td>    
                </tr>
            <?php
        }
        
    }
    catch(PDOException $ex){
        ?>
            <tr>
                <td colspan="4">Data read error ... ...</td>    
            </tr>
        <?php
    }
?>
</tbody>
</table>
</dev>

<script>
var elm=document.getElementById('logoutbtn');
elm.addEventListener('click', processlogout);

function processlogout(){
    window.location.assign('logoutsuperadmin.php');
}

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
?>