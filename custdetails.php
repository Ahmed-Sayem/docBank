<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Customer Account Details</title>
          <style>
          body {
                 background-image: url("eighteen.jpg");
                 font-family: 'Sofia'; font-size: 30px;
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
            
          </style>
    </head>


<?php
    session_start();
    if(isset($_SESSION['saemail']) && !empty($_SESSION['saemail'])){
?>
<body>
    <div class="sidenav">
        <br><br><br><br>
        <a href="empdetails.php"><b>Employee Details</b></a>
        <a href="custdetails.php"><b>Customer Details</b></a>
        <a href="paymentupdate.php"><b>Payment Details</b></a>
        <a href="saconf.php"><b>Confirmations</b></a>
        
        <br><br>
        <button class = "button bt" input type="button" id="logoutbtn">Logout</button>
    </div>
    <div class="main">
    <br><br>
    <center>
        <h1><b><i>__CUSTOMER DETAILS__</i></b></h1>
        <input type="search" id="searchbox">
        <button class = "button bt" input type="button" id="searchbtn">Search</button>
        <dev class ="table1">
        <table>
            <thead>
                <tr>
                <th>Customer_id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile_number</th>
                <th>Customer Address</th>
                </tr>
            </thead>
        <tbody>
    </center>
    </div>
</body>          

    <script>
        var srcbtn=document.getElementById('searchbtn');
        srcbtn.addEventListener('click', searchprocess);
        function searchprocess()
        {
            var searchvalue=document.getElementById('searchbox').value;
            window.location.assign("sacustsearch.php?param1="+searchvalue);
        } 
    </script>

<?php
    try{
        
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sqlquery="SELECT customer_id,Name,Email,Mobile_number,Address FROM customers";
        
        try{
            $returnval=$dbcon->query($sqlquery);
            
            $custtable=$returnval->fetchAll();
            
            foreach($custtable as $row){
                ?>
                    <tr>
                        <td><?php echo $row['customer_id'] ?></td>   
                        <td><?php echo $row['Name'] ?></td>   
                        <td><?php echo $row['Email'] ?></td>   
                        <td><?php echo $row['Mobile_number'] ?></td> 
                        <td><?php echo $row['Address'] ?></td> 
                        <td><button class = "button bt" input type="button" id="btn" onclick="myfunc(<?php echo $row['customer_id'] ?>)">REMOVE</button><td> 	 											
                    </tr>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <tr>
                    <td colspan="5">Data read error ... ...</td>    
                </tr>
            <?php
        }
        
    }
    catch(PDOException $ex){
        ?>
            <tr>
                <td colspan="5">Data read error ... ...</td>    
            </tr>
        <?php
    }
?>
</tbody>
</table>
</dev> 
<script>
        function myfunc(id) 
        {
            var r = confirm("Are you sure you want to Remove?");
            if (r == true) {
               window.location.assign('saCnfrmPrcs.php?cid='+id);
            } 
        }
</script>
            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                function processlogout()
                {
                    window.location.assign('logoutsuperadmin.php');
                }
            </script>
        <?php
    }
    else{
        ?>
            <script>
                window.location.assign('superadminlogin.php');
            </script>
        <?php
    }
?>