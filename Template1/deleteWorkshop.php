<?php

include 'conn.php';

$id=$_GET['Workshop_ID'];

// First, get the old image name (before deleting the record)
$query = mysqli_query($conn, "SELECT Workshop_img FROM tbl_workshop WHERE Workshop_ID = '$id'");
$row = mysqli_fetch_assoc($query);

$old_image = $row['Workshop_img'];


  unlink("./uploads/" . $old_image);




$result = mysqli_query($conn,"DELETE FROM tbl_workshop WHERE Workshop_ID ='$id'") or die(mysqli_error($conn));
   //echo $result;die;
   echo '<script> 
             window.location.href = "viewworkshop.php";
        </script>';                                          


?>
