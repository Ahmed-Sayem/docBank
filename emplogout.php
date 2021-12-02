<?php
    
    session_start();

    unset($_SESSION['empemail']);
    session_destroy();
	 

    echo "<script>window.location.assign('emplogin.php');</script>";
?>