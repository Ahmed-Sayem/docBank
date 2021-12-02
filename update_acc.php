<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="design/reg.css">
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Update Account</title>
        <style>
        body {
                background-image: url("sixteen.jpg");
                font-family: 'Sofia'; font-size: 30px;
        }
        .container{
          height:650px;
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
            .table1 table{
              text-align: center;
              table-layout: auto;
              background-color: gainsboro;
              width: 70%;
              padding:20px;
              margin: 1em; 
          }
          .table1 tr{
              text-align: center;
              background-color: whitesmoke;
              width: 70%;
              padding:20px;
              margin: 1em; 
          }
          input[type=search], select {
              width: 50%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
          }
          input[type=number], select {
              width: 50%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
          }
        </style>
  </head>

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
      <br><br><br><br><br>
      <center>
      <div class="container">
        <b><i>Update Account</i></b>
        <br><br>
        <center>
        <form action="acc_type_process.php" method="POST">
          Account ID:<br> <input type="number" placeholder="Account ID" name="aid"><br>
          Customer ID:<br> <input type="number" placeholder="Customer ID" name="cid"><br>
          Existing Account Type:<br> <select name="exacc">
            <option>-----Packages-----</option>
            <option value="Yearly" >Yearly</option>
            <option value="Monthly" >Monthly</option>
            <option value="Weekly" >Weekly</option>
            </select><br>
         New Account Type:<br> <select name="neacc">
              <option>-----Packages-----</option>
              <option value="Yearly" >Yearly</option>
              <option value="Monthly" >Monthly</option>
              <option value="Weekly" >Weekly</option>
              </select><br><br>
            <button class="button bt"input type="submit">Apply changes</button>
        </form>
      </center>
      </div>
      </center>
    </body>
    <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('logoutprocess.php');
                } 
            </script>
</html>
