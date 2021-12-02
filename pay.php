<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Payment</title>
          <style>
           body {
                 background-image: url("sixteen.jpg");
                 font-family: 'Sofia'; font-size: 30px;
          }
          .container{
            height:400px;
            background-color: #d1274b;
          }
          .button{
            background-color: orangered;
            width: 220px;
          }
          input[type=number] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 15px ;
            background-color: #f5f7b2;
            color: black;
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
             .bt1{
                 background: #818181;
                 border-radius: 10px;
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
            <h1 style="color:red "> <b><i>__PAYMENT__</i></b></h1>
    <div class="container">
            <br>


   
      <form action="payprocess.php" method="POST">
   
		        Account ID: <input type="number" name="aid"><br><br>
                Enter Amount:<input type="number" name="amnt"><br><br>        
            <button class="button bt1" input type="submit">PAY</button> 	
        </form>
      </div>
        </center>
    </div>
</body>


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