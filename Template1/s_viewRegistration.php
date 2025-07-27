<!DOCTYPE html>
<?php include "conn.php" ?>
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
    <title>View Registration</title>
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
        <?php include "s_sidebar.php" ?>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Registration</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Registration</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                
                <!-- BEGIN: Account Menu -->
                <!-- <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-2.jpg">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary text-white">
                            <li class="p-2">
                                <div class="font-medium">Denzel Washington</div>
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
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <!-- BEGIN: Basic Table -->
                    <div class="intro-y box">
                        <div class="p-5" id="basic-table">
                            <div class="preview">
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">#</th>
                                                <th class="whitespace-nowrap">Student Name</th>
                                                <th class="whitespace-nowrap">Workshop Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count = 1;
                                            $result = mysqli_query($conn, "SELECT * FROM `tbl_registration` INNER JOIN tbl_student ON tbl_registration.Student_ID=tbl_student.Student_id INNER JOIN tbl_workshop ON tbl_registration.Workshop_ID=tbl_workshop.Workshop_ID;") or die(mysqli_error($conn));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $count++ ?></td>
                                                    <td><?php echo $row["Name"] ?></td>
                                                    <td><?php echo $row["Title"] ?></td>
                                                  
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="source-code hidden">
                                <button data-target="#copy-basic-table" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                <div class="overflow-y-auto mt-3 rounded-md">
                                    <pre class="source-preview" id="copy-basic-table"> <code class="html"> HTMLOpenTagdiv class=&quot;overflow-x-auto&quot;HTMLCloseTag HTMLOpenTagtable class=&quot;table&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;whitespace-nowrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;whitespace-nowrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;whitespace-nowrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;whitespace-nowrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtdHTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtdHTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtdHTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTagtable class=&quot;table table-dark mt-5&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;whitespace-nowrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;whitespace-nowrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;whitespace-nowrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;whitespace-nowrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtdHTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtdHTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtdHTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtdHTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Basic Table -->

                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <!-- <div data-url="side-menu-dark-regular-table.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
        <div class="dark-mode-switcher__toggle border"></div>
    </div> -->
    <!-- END: Dark Mode Switcher-->

    <!-- BEGIN: JS Assets-->
     <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>