<?php
    
    session_start();

    unset($_SESSION['saemail']);
    session_destroy();
	 

    echo "<script>window.location.assign('superadminlogin.php');</script>";
?>