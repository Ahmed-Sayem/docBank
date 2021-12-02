<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doc Remove</title>
          <style>
          body {
                 background-image: url("fifteen.png");
                 font-family: 'Sofia'; font-size: 30px;
                 color: white;
          }
          .container{
            height:520px;
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
             input[type=number] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border-radius: 15px ;
                background-color: #f5f7b2;
                color: black;
            }
          </style>
    </head>

<body>
<div class="sidenav">
    <br>
    <a href="emppersonaldetails.php"><b>Employee Details</b></a>
    <a href="empupdate.php"><b>Update Details</b></a>
    <a href="empcustdetails.php"><b>Customer Details</b></a>
    <a href="showdoc.php"><b>All Document</b></a>
    <a href="empuploaddoc.php"><b>Document Upload</b></a>
    <a href="docdetelepage.php"><b>Document Remove</b></a>
    <a href="custtotaldoc.php"><b>Documents by Account</b></a>
    <a href="Confirmations.php"><b>Confirmations</b></a>
  
    <br>
    <button class = "button bt" input type="button" id="logoutbtn">Logout</button>
</div>
<div class="main">
<br>
    <center>
    <h1><b><i>Remove Document</i></b></h1>
    <br><br><br>
    <div class="container">
    <form action="docdeletepro.php" method="POST">
    <br>
    <h3><b><i><u>Fill Carefully</u></i></b></h3>
    <br>
        Account ID: <input type="number" name="dela"><br><br>
        Document Number: <input type="number" name="deln"><br><br>
        <button class = "button bt" input type="submit">OK</button>
    </form>
    </div>
    </center>
</body>

<script>
    var elm=document.getElementById('logoutbtn');
    elm.addEventListener('click', processlogout);

    function processlogout(){
        window.location.assign('emplogout.php');
    }

</script>
</html>