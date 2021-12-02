<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update</title>
          <style>
          body {
                 background-image: url("fifteen.png");
                 font-family: 'Sofia'; font-size: 30px;
                 color: white;
          }
          .container{
            height:450px;
            width: 300px;
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
             .bt1{
                border-radius: 10px ;
                background-color: grey;
                color: white;
                padding-top: 10px;
                padding-left: 15px;
                padding-right: 15px;
                padding-bottom:10px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                transition-duration: 0.4s;
             }
             .bt1:hover{
                background-color:#00ff80;
                color: Black;
             }
             table{
                border-collapse: separate;
                 border-spacing: 50px 0;
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
    <a href="custtotaldoc.php"><b>Documents by Account</b></a>
    <a href="Confirmations.php"><b>Confirmations</b></a>
  
    <br>
    <button class = "button bt" input type="button" id="logoutbtn">Logout</button>
</div>
<div class="main">
<br><br><br>
<center><h1>Update Page</h1></center>
<br><br>
   <center>
        <table>
            <thead>
                <tr>
                    <td>
                            <div class="container">
                            <b><i>Update E-mail</i></b>
                            <br><br>
                            <form action="empupemailprocess.php" method="POST">
                            Existing Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>           
                            New Email:<br> <input type="email" placeholder="Enter your new email"   name="nemail"><br><br>			         
                            <button class = "Button bt1"input type="submit">Apply changes</button>
                            </form>
                            </div>
                    </td>
                    <td>
                            <div class="container">
                            <b><i>Update Phone</i></b>
                            <br><br>
                            <form action="empupmobileprocess.php" method="POST">
                            Existing Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>           					
                            New Mobile no:<br><input type="text" placeholder="Enter your new mobile number"  name="ntel"><br><br>
                            <button class = "Button bt1"input type="submit">Apply changes</button>
                            </form>
                            </div>
                    </td>
                    <td>
                            <div class="container">
                            <b><i>Update Password</i></b>
                            <br><br>
                            <form action="empuppassprocess.php" method="POST">
                            Existing Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>           					
                            New password: <br><input type="password" placeholder="Enter your new password"  name="npass"><br><br>
                            <button class = "Button bt1"input type="submit">Apply changes</button>
                        </form>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
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