<?php 
    include 'conn.php';
    $id=$_GET["ID"];
    $result = mysqli_query($conn, "DELETE from tbl_feedback WHERE ID='$id';") or die(mysqli_error($conn));
    //echo $result;
    echo '<script> 

        window.location.href="viewFeedback.php";
    </script>'
?>