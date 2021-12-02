<?php
    session_start();
    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
        ?>
<center>
<h1> <b>Student Documents Bank</b></h1>
</center>
<br>
<br>
<br>
<a href="pay.php"><b>Payment</b></a>
<br>
<br>
<a href="paymentdetails.php"><b>Payment Details</b></a>
      <br>
			<br>
			<br>
            <input type="button" value="Logout" id="logoutbtn">
            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);

                function processlogout(){
                    window.location.assign('logoutprocess.php');
                }
            </script>
<?php
    }
    else{
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }
?>
