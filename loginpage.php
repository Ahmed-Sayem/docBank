<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <title>Log In Page</title>
          <style>
          body {
                 background-image: url("sixteen.jpg");
                 font-family: 'Sofia'; font-size: 30px;
          }
          .container{
            height:600px;
            background-color: #d1274b;
          }
          .button{
            background-color: #1b1a17;
          }
          </style>
    </head>

    <body>
      <br><br><br><br>
      <center>
      <div class="container">
        <h6>Customer</h6>
        <b><i>LOG-IN</i></b>
        <br><br>
        <center>
        <form action="verifyuser.php" method="POST">
            Email: <br><input type="email" placeholder="Enter your email" name="uemail"><br>
            Password: <br><input type="password" placeholder="Enter your password" name="upass"><br><br>
            <button class="button bt" input type="submit">Sign In</button>
        </form>
        <button class="button bt" onclick="window.location.href='mainpage.php';">HOME </button>
      </center>
      </div>
      </center>
    </body>
</html>
