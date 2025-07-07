<?php

include 'conn.php';
//echo $_GET['workshopId'];die;
$Student_ID  =$_GET['Student_id'];
$sql="SELECT * FROM tbl_registration INNER JOIN tbl_student 
ON tbl_student.Student_id = tbl_registration.Student_ID 
INNER JOIN tbl_workshop ON tbl_workshop.Workshop_ID = tbl_registration.Workshop_ID
WHERE tbl_student.Student_id=$Student_ID";

//print_r($sql);die;
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
//print_r($result);die;
while($row=mysqli_fetch_array($result)){

    $Workshop_ID=$row["Workshop_ID"];
    $Title=$row["Title"];
    $Student_ID=$row["Student_ID"];

}
   echo '<script> 
          window.location.href = "addFeedback.php?Workshop_ID=' .$Workshop_ID. 
          '&Title=' .$Title. '&Student_ID=' .$Student_ID. '"
            </script>';  
?>