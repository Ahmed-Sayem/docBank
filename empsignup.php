<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <title>empsignup Page</title>

    <style>
    body {
           background-image: url("fifteen.png");
           font-family: 'Sofia'; font-size: 20px;
           color: white;
    }
    .container{
      height:1000px;
      background: #333456;
    }
    .bt1 {
      width: 30%;
      border-radius: 10px ;
      color: white;
      background: #87431d;
    }

    
    </style>
  </head>
    <body>
      <br><br><br><br><br><br>
      <center>
      <button class="button bt1" onclick="window.location.href='mainpage.php';"><b>Return Home </b></button><br>
      <div class = "container">
        <h4>Already have an account?</h4>
        <h4>Then go!!</h4>
        <button class="button bt" onclick="window.location.href='emplogin.php';"><b>LOGIN </b></button><br>
        <h4>Not Yet!!</h4>
        <form action="registeremp.php" method="POST">
          <hr><br>
          <b><i>Create A New Account</i></b>
            <hr><hr><br>
            Name:<br> <input type="text"name="ename"><br>
            Email:<br> <input type="email"name="eemail"><br>
			      Password: <br><input type="password" name="epass"><br>
			      Mobile no:<br><input type="text"name="etel"><br><br>
            <button class= "button bt" input type="submit"><b>REGISTER</b></button>
        </form>
		   </center>
    </div>
  </body>
</html>
