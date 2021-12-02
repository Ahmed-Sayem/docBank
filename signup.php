<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Signup Page</title>
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <style>
        body {
               background-image: url("sixteen.jpg");
               font-family: 'Sofia'; font-size: 20px;
        }
        .container{
          height:1000px;
          background-color: #3282b8;
        }
        .button {
              background-color: black;
            }
            .bt1 {
                width: 30%;
                border-radius: 10px ;
                background: #28b5b5;
            }
        </style>
    </head>

    <body>
      <br><br><br><br><br><br>
	  <center>
    <button class="button bt1" onclick="window.location.href='mainpage.php';"><b>Return Home </b></button><br>
	       <div class="container">
           <h4>Already have an account?</h4>
           <h4>Then go!!</h4>
           <button class="button bt" onclick="window.location.href='loginpage.php';"><b>LOGIN </b></button><br>
           <h4>Not Yet!!</h4>

          <form action="registeruser.php" method="POST">
            <hr>
            <b><i>Create A New Account</i></b>
            <hr><hr>
            Name:<br> <input type="text" placeholder="Enter your name" name="uname"><br>
            Email:<br> <input type="email" placeholder="Enter your name"   name="uemail"><br>
			      Password: <br><input type="password" placeholder="Enter a secured password"  name="upass"><br>
			      Mobile no:<br><input type="text" placeholder="Enter your mobile number"  name="utel"><br>
            Address:<br><input type="text" placeholder="Enter your address" name="uadd"><br><br>
            <button class="button bt" input type="submit">REGISTER</button>
        </form>
		</center>
  </div>

    </body>
</html>
