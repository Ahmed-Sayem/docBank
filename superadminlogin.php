<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <title>Super admin Log In Page</title>
        <style>
        body {
               background-image: url("eighteen.jpg");
               font-family: 'Sofia'; font-size: 30px;
        }
        .container{
          height:590px;
          background-color: #926e6f;
        }
        .button{
          background-color: #1b1a17;
        }
        </style>
    </head>

    <body>
        <br><br><br><br><br>
        <center>
        <div class="container">
        <h6><b><u><i>ADMIN</i></u></b></h6>
        <b><i>LOG-IN</i></b>
        <br><br>
        <center>
        <form action="verifysuperadmin.php" method="POST">
            Email: <br><input type="email" placeholder="Enter your email" name="semail"><br>
            Password: <br><input type="password" placeholder="Enter your password" name="spass"><br><br>
            <button class="button bt" input type="submit"> SIGN IN</button>
        </form>
		<button class="button bt" onclick="window.location.href='mainpage.php'">HOME</button>
  </center>
  </div>
  </center>
    </body>
</html>
