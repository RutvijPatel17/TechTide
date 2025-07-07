<?php 
    include 'conn.php';
    $id=$_GET["Registration_ID"];
    $result = mysqli_query($conn, "DELETE from tbl_registration WHERE Registration_ID='$id';") or die(mysqli_error($conn));
    //echo $result;
    echo '<script> 

        window.location.href="viewRegistration.php";
    </script>'
?>