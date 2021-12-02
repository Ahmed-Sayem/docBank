<?php
include"documentdeposited.php";
if (isset($_GET['an']) && isset($_GET['dn']) && isset($_GET['dp'])) {
    
    $id = $_GET['an'];
    $id1 = $_GET['dn'];

    // fetch file to download from database
    $sql = "SELECT * FROM document WHERE Document_number=$id1 AND AccountAccount_id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = $_GET['dp'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='. basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '. filesize( $file['Document_details']));
        readfile( $file['Document_details']);
        exit;
    }

}
?>