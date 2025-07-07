<?php
include 'conn.php';
$ID=$_GET['ID'];
    $result = mysqli_query($conn, "select * from tbl_feedback where ID=".$ID) or die(mysqli_error($conn));
    $row=mysqli_fetch_assoc($result);
    $name_value=$row["Student_ID"];
    $title_value=$row["Workshop_ID"];
    $feedback_value=$row["Feedback"];
    $selectedStd = isset($_GET['Student_ID']) ? intval($_GET['Student_ID']) : 0;
    if (isset($_POST["btnsubmit"])){
        $feedback=$_POST["feedback"];
        $result = mysqli_query($conn,"UPDATE tbl_feedback SET Feedback='$feedback' WHERE ID='$ID';");
        //echo $result;die;
        if($result){
        echo "<script>
            window.location.href='viewFeedback.php';
        </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Feedback</title>
    <link rel="stylesheet" href="dist/css/app.css" />
</head>
<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
<?php include "mobileMenu.php" ?>
<div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">
    <?php include "sidebar.php" ?>
    <div class="content">
        <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">View Feedback</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Feedback</li>
                </ol>
            </nav>
        </div>

        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Edit Feedback</h2>
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <form method="post">
                                <!-- Student Dropdown -->
                                <label for="regular-form-2" class="form-label">Student Name</label>
                                <div class="flex flex-col sm:flex-row items-center" name="stdname">
                                    <select class="form-control form-control-rounded" name="stdname" onchange="handleChange(this.value)" disabled>
                                        <?php
        
                                            $result = mysqli_query($conn, "SELECT * FROM `tbl_student` ") or die(mysqli_error($conn));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                
                                                <option value="<?php echo $row["Student_id"]; ?>" <?php echo ($name_value == $row["Student_id"]) ? 'selected' : ''; ?>>
                                                    <?php echo $row["Name"]; ?>
                                                </option>
                                                
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </div><br>

                                <!-- Workshop Dropdown filtered by registration -->
                                <label for="regular-form-2" class="form-label">Workshop Name</label>
                                <div class="flex flex-col sm:flex-row items-center" name="wsname">
                                    <select class="form-control form-control-rounded" name="wsname" disabled>
                                        <?php
        
                                            $result = mysqli_query($conn, "SELECT * FROM `tbl_registration` r inner join tbl_workshop w on r.Workshop_ID=w.Workshop_ID") or die(mysqli_error($conn));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                
                                                <option value="<?php echo $row["Workshop_ID"]; ?>" <?php echo ($title_value == $row["Workshop_ID"]) ? 'selected' : ''; ?>>
                                                    <?php echo $row["Title"]; ?>
                                                </option>
                                                
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </div><br>

                                <!-- Feedback -->
                                <label for="regular-form-2" class="form-label">Feedback</label>
                                <input id="regular-form-2" type="text" class="form-control form-control-rounded" placeholder="Enter Feedback" name="feedback" value=<?php echo $feedback_value;?>><br><br>

                                <div class="flex justify-center items-center v-screen">
                                    <div class="bg-gray-200 p-0">
                                        <button type="submit" class="btn btn-primary w-100" name="btnsubmit">Submit</button>
                                    </div>
                                </div><br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
    function handleChange(id) {
        window.location.href = 'editFeedback.php?Student_ID=' + id;
    }
</script>
<script src="dist/js/app.js"></script>
</body>
</html>
