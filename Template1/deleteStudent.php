<?php 
    include 'conn.php';
    $id=$_GET["Student_id"];
    $result = mysqli_query($conn, "DELETE from tbl_student WHERE Student_id='$id';") or die(mysqli_error($conn));
    //echo $result;
    echo '<script> 

        window.location.href="viewStudent.php";
    </script>'
?>