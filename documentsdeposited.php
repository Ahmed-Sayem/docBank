<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Documents</title>
          <style>
          body {
                 background-image: url("sixteen.jpg");
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
          </style>
    </head>
   
<?php
    session_start();
    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
?>
<body>
    <div class="sidenav">
        <br><br>
        <a href="personaldetails.php"><b>Personal Details</b></a>
        <a href="create_acc.php"><b>Create Account</b></a>
        <a href="update_acc.php"><b>Update Account </b></a>
        <a href="close_acc.php"><b>Close Account</b></a>
        <a href="accountdetails.php"><b>Account Details</b></a>
        <a href="documentsdeposited.php"><b>Documents</b></a>
        <a href="empuploaddoc.php"><b>Document Upload</b></a>
   
        <a href="pay.php"><b>Pay Now</b></a>
        <a href="paymentdetails.php"><b>Payment Details</b></a>
        <br>
        <button class = "button bt" input type="button" id="logoutbtn">Logout</button>
    </div>

    <div class="main">
    <br>
        <center>
            <br><br>
            <h1 style="color:red "> <b><i>Documents Deposited</i></b></h1>
            <dev class ="table1">
            <table>
                <thead>
                    <tr>
                        <th>Document Number</th>
                        <th>Document Details</th>
                        <th>Document Image</th>
                </thead>
                <tbody>
        </center>
    </div>
</body>

<?php
try{

$dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$searchval=$_SESSION['useremail'];
$sqlquery="";
if(!empty($searchval)){
    $sqlquery="SELECT * FROM document AS d JOIN account AS a ON d.AccountAccount_id=a.Account_id JOIN customers AS c ON a.Customerscustomer_id=c.customer_id  where Email='$searchval'";
}

try{
    $returnval=$dbcon->query($sqlquery);
    $productstable=$returnval->fetchAll();
    foreach($productstable as $row){
        ?>
            <tr>
                <td><?php echo $row['Document_number'] ?></td>
                <td><?php echo $row['Document_details'] ?></td>
                <td>
                    <img width="150" height="150" alt="Not Uploaded Yet" src="<?php echo $row['Document_image_path'] ?>">
                </td>
                <td>
                   <a href = '<?php echo $row['Document_image_path'] ?>' download='true' > DOWNLOAD </a>
                </td>
            </tr>
        <?php
    }
}
catch(PDOException $ex){
    ?>
        <tr>
            <td colspan="3">Data read error ... ...</td>
        </tr>
    <?php
}
}
catch(PDOException $ex){
?>
    <tr>
        <td colspan="3">Data read error ... ...</td>
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
        window.location.assign('logoutprocess.php');
    }
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
?>
