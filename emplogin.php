<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <title>Log In Page</title>
        <style>
        body {
               background-image: url("fifteen.png");
               font-family: 'Sofia'; font-size: 30px;
               color: white;
        }
        .container{
          height:650px;
          background: #333456;
        }
        .bt{
          background: #1f6f8b;
        }
        </style>
    </head>

    <body>
      <br><br><br><br>
      <center>
      <div class="container">
        <h6>Employee</h6>
        <b><i>LOG-IN</i></b>
        <br><br>
        <center>
        <form action="verifyemp.php" method="POST">
            Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>
            Password: <br><input type="password" placeholder="Enter your password" name="epass"><br><br>
            <button class="button bt"input type="submit">SIGN IN</button><br><br>
          </form>
          <button class="button bt" onclick="window.location.href='mainpage.php';">HOME </button>
        </center>
        </div>
        </center>
    </body>
</html>
