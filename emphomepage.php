<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Employee Homepage</title>
          <style>
          body {
                 background-image: url("fifteen.png");
                 font-family: 'Sofia'; font-size: 30px;
                 color: white;
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
          </style>
    </head>

<?php
    session_start();

    if(isset($_SESSION['empemail']) && !empty($_SESSION['empemail'])){
        ?>

<body>
    <div class="sidenav">
        <br>
        <a href="emppersonaldetails.php"><b>Employee Details</b></a>
        <a href="empupdate.php"><b>Update Details</b></a>
        <a href="empcustdetails.php"><b>Customer Details</b></a>
        <a href="showdoc.php"><b>All Document</b></a>
        <a href="custtotaldoc.php"><b>Documents by Account</b></a>
        <a href="Confirmations.php"><b>Confirmations</b></a>
      
        <br>
        <button class = "button bt" input type="button" id="logoutbtn">Logout</button>
    </div>
    <div class="main">
    <br>
        <center>
            <br><br>
            <h1> <b><i>__Employee Home Page__</i></b></h1>
        </center>
    </div>
</body>            
    <input type="button" value="Logout" id="logoutbtn">
    <script>
        var elm=document.getElementById('logoutbtn');
        elm.addEventListener('click', processlogout);
        function processlogout(){
            window.location.assign('emplogout.php');
        } 
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
?>