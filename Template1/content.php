<div class="content">
    <!-- BEGIN: Top Bar -->
    <?php include "topbar.php" ?>
    <!-- END: Top Bar -->
    <?php include "container.php" ?>
    <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 2xl:-mt-8 -mb-10 z-40 2xl:z-10">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 xl:col-span-8 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Official Store
                        </h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-lucide="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="form-control sm:w-56 box pl-10" placeholder="Filter by city">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                        <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Weekly Best Sellers
                        </h2>
                    </div>
                    <div class="mt-5">
                        <div class="intro-y">
                            <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-9.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Christian Bale</div>
                                    <div class="text-slate-500 text-xs mt-0.5">23 June 2020</div>
                                </div>
                                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-10.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Leonardo DiCaprio</div>
                                    <div class="text-slate-500 text-xs mt-0.5">26 February 2022</div>
                                </div>
                                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-14.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Sylvester Stallone</div>
                                    <div class="text-slate-500 text-xs mt-0.5">17 May 2022</div>
                                </div>
                                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-14.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Sylvester Stallone</div>
                                    <div class="text-slate-500 text-xs mt-0.5">12 February 2021</div>
                                </div>
                                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                            </div>
                        </div>
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Weekly Top Products
                        </h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 23 June 2020">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 1 August 2022">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-9.jpg" title="Uploaded at 9 November 2022">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">Samsung Q90 QLED TV</a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                                    </td>
                                    <td class="text-center">200</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                            <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-15.jpg" title="Uploaded at 26 February 2022">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-11.jpg" title="Uploaded at 27 December 2021">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 5 October 2020">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                                    </td>
                                    <td class="text-center">100</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                            <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-15.jpg" title="Uploaded at 17 May 2022">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="Uploaded at 23 November 2022">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-1.jpg" title="Uploaded at 27 July 2020">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                                    </td>
                                    <td class="text-center">118</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                            <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-5.jpg" title="Uploaded at 12 February 2021">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="Uploaded at 29 October 2022">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 15 August 2021">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">Oppo Find X2 Pro</a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet</div>
                                    </td>
                                    <td class="text-center">142</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                            <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                                </li>
                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3 relative z-10">
            <div class="2xl:border-l pb-10 intro-y">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 2xl:col-span-12 mt-3 2xl:mt-6">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Recent Activities
                            </h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-12.jpg">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">Johnny Depp</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-4.jpg">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">Johnny Depp</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Samsung Q90 QLED TV">
                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-15.jpg">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Dell XPS 13">
                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-7.jpg">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Sony Master Series A9G">
                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-4.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-13.jpg">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">Robert De Niro</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">Apple MacBook Pro 13</a> price and description</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-7.jpg">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">Christian Bale</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">Samsung Galaxy S20 Ultra</a> description</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Transactions
                            </h2>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-9.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Christian Bale</div>
                                        <div class="text-slate-500 text-xs mt-0.5">23 June 2020</div>
                                    </div>
                                    <div class="text-success">+$181</div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-10.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Leonardo DiCaprio</div>
                                        <div class="text-slate-500 text-xs mt-0.5">26 February 2022</div>
                                    </div>
                                    <div class="text-danger">-$84</div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-14.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Sylvester Stallone</div>
                                        <div class="text-slate-500 text-xs mt-0.5">17 May 2022</div>
                                    </div>
                                    <div class="text-danger">-$81</div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-14.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Sylvester Stallone</div>
                                        <div class="text-slate-500 text-xs mt-0.5">12 February 2021</div>
                                    </div>
                                    <div class="text-success">+$49</div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-15.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Kevin Spacey</div>
                                        <div class="text-slate-500 text-xs mt-0.5">17 December 2021</div>
                                    </div>
                                    <div class="text-danger">-$29</div>
                                </div>
                            </div>
                            <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                </div>
            </div>
        </div>
    </div>
</div>