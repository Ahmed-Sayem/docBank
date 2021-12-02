<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>

body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {
  font-size:16px;
  background-image: url("bg.jpg");
  margin-top:10px;
  margin-left:100px;
}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

.button {
  background-color:  #fe346e;
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
.button:hover {
  background-color:#00ff80;
  color: Black;
}
.button4 {
  border-radius: 100px ;
}
k.ex1 {
  color: black;
  font-family: 'Asset';font-size: 40px;
}
.bx {
  border-radius: 30px ;
  background-color: #e8f044;
  box-shadow:  7px 9px 12px black;
  width:350px;
  height: 600px;
  padding: 50px;
  margin: 20px;
  opacity: 0.9;
}
#typing {
            width:100%;
            color: #ff005c;
            float: left;
            font-family: sans-serif;
            font-weight:bold;
            font-size: 90px;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 5s steps(22) 1s infinite alternate;
}
#typing span{
        color:#fddb3a;
}
#crow {
      float: left;
      color: black;
      font-family: consolas;
      font-weight:bold;
      font-size: 90px;
      animation: crow 0.3s linear 0s infinite;
}
@keyframes typing {
      from {
          width: 0ch;
      }
      to {
          width: 25ch;
      }
}
@keyframes crow {
      from {
          opacity: 0;
      }
      to {
          opacity: 1;
      }
}

</style>
<body>
  <div id="typing">STUDENT <span>DOC</span> BANK</div>
  <div id="crow">|</div>
  <br><br><br><br><br><br><br><br><br>


  <center>
  <div class="bx">
    <br><br><br>
    <k class="ex1"><b><u> LOGIN AS </u></b></k>
    <br><br><br>
     <button class="button button4" onclick="window.location.href='superadminlogin.php'"><b>Super Admin </b></button>
     <br>
     <br>
     <button class="button button4" onclick="window.location.href='signup.php'"><b>Customer </b></button>
     <br>
     <br>
     <button class="button button4" onclick="window.location.href='empsignup.php'"><b>Employee </b></button>
  </div>
  </center>
</body>
</html>
