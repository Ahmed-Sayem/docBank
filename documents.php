<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
        ?>


<h1> Student Documents Bank</h1>

<br>
<br>
<br>



<a href="documentsdeposited.php">Documents deposited</a>
<br>
<br>
<a href="downloadsoftcopy.php">Download SoftCopy</a>

            <br>
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
        ///session doesn't contain any valid user email
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }
?>
