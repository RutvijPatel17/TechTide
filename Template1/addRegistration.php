<?php
    include 'conn.php';
    if (isset($_POST["btnsubmit"])){
        $stdname=$_POST["stdname"];
        $wsname=$_POST["wsname"];
        $result = mysqli_query($conn,"insert into tbl_registration(Student_ID,Workshop_ID) 
        values('$stdname','$wsname')") or die (mysqli_error($conn));
        //echo $result;die;
        if($result){
        echo "<script>
            window.location.href='viewRegistration.php';
        </script>";


        }
    }
?>
<!DOCTYPE html>
<!--
Template Name: Tinker - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tinker admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Tinker Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Add Registration</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
        <!-- BEGIN: Mobile Menu -->
        <?php include "mobileMenu.php" ?>
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">
            <!-- BEGIN: Side Menu -->
            <?php include "sidebar.php" ?>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Registration</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Registration</li>
        </ol>
          </nav>
    <!-- END: Breadcrumb -->
    
    <!-- BEGIN: Account Menu -->
    <!-- <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="Midone - HTML Admin Template" src="dist/images/profile-5.jpg">
        </div>
        <div class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium">Keanu Reeves</div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                </li>
            </ul>
        </div>
    </div> -->
    <!-- END: Account Menu -->
</div>
                <!-- END: Top Bar -->
                <!-- <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Regular Form
                    </h2>
                </div> -->
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-12">
                        <!-- BEGIN: Input -->
                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Add Registration
                                </h2>
                            </div>
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <div class="mt-3">
                                        <form method="post">
                                        <label for="regular-form-2" class="form-label">Student Name</label>
                                        <div class="flex flex-col sm:flex-row items-center" name=stdname>
                                        <select class="form-control form-control-rounded" aria-label="Default select example" name=stdname>
                                        <?php
        
                                            $result = mysqli_query($conn, "SELECT * FROM `tbl_student` ") or die(mysqli_error($conn));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                
                                                <option value=<?php echo $row["Student_id"];?>><?php echo $row["Name"] ?></option>;
                                                
                                            <?php
                                            }
                                        ?>
                                        </select>
                                        </div><br><br>
                                        <label for="regular-form-2" class="form-label">Workshop Name</label>
                                        <div class="flex flex-col sm:flex-row items-center" name=wsname> 
                                        <select class="form-control form-control-rounded" aria-label="Default select example" name=wsname>
                                                <?php
        
                                            $result = mysqli_query($conn, "SELECT * FROM `tbl_workshop` ") or die(mysqli_error($conn));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                
                                                <option value=<?php echo $row["Workshop_ID"];?>><?php echo $row["Title"] ?></option>;
                                                
                                            <?php
                                            }
                                        ?>
                                        </select>
                                        </div><br><br>
                                        <div class="flex justify-center items-center v-screen">
                                            <div class="bg-gray-200 p-0">
                                                <button type="submit" class="btn btn-primary w-100" name=btnsubmit>Submit</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <pre id="copy-input" class="source-preview"> <code class="html"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-2&quot; type=&quot;text&quot; class=&quot;form-control form-control-rounded&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-3&quot; class=&quot;form-label&quot;HTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-3&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;form-help&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-4&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-4&quot; type=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-5&quot; class=&quot;form-label&quot;HTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-5&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>