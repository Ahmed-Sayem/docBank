<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="design/reg.css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Employee Personal Info</title>
          <style>
          body {
                 background-image: url("fifteen.png");
                 font-family: 'Sofia'; font-size: 30px;
                 color: white;
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
                color: black;
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
          </style>
    </head>

<?php
    session_start();
    if(isset($_SESSION['empemail']) && !empty($_SESSION['empemail'])){	
?>
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
    <br>
        <center>
        <h1><b><i>Personal Details</i></b></h1>
        <dev class ="table1">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                </tr>
            </thead>
        <tbody>
        </center>
    </div>
</body>  

<?php
    try{
        
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $searchval=$_SESSION['empemail'];
        $sqlquery="";
        if(!empty($searchval)){
            $sqlquery="SELECT employee_id,Name,Email,Mobile_number FROM employee where Email='$searchval'";
        }
    
        try{
            $returnval=$dbcon->query($sqlquery);
            
            $emptable=$returnval->fetchAll();
            
            foreach($emptable as $row){
                ?>
                    <tr>
                        <td><?php echo $row['employee_id'] ?></td>   
                        <td><?php echo $row['Name'] ?></td>  
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['Mobile_number'] ?></td>   
                        
                        
                    </tr>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <tr>
                    <td colspan="4">Data read error ... ...</td>    
                </tr>
            <?php
        }
        
    }
    catch(PDOException $ex){
        ?>
            <tr>
                <td colspan="4">Data read error ... ...</td>    
            </tr>
        <?php
    }
?>
</tbody>
</table>
</dev>
<br>

<script>
    var elm=document.getElementById('logoutbtn');
    elm.addEventListener('click', processlogout);
    function processlogout(){
        window.location.assign('emplogout.php');
    }
</script>			  
<?php
}
else{
?>	  
<script>
        window.location.assign('emplogin.php');
    </script>
<?php
}
?>	
