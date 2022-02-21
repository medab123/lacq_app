<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/dashboard/css/morris.css">
<link href="assets/dashboard/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/dashboard/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="assets/dashboard/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/dashboard/css/style.css" rel="stylesheet" type="text/css">
<!-- jQuery  -->
<script src="assets/dashboard/js/jquery.min.js"></script>
<script src="assets/dashboard/js/bootstrap.bundle.min.js"></script>
<script src="assets/dashboard/js/metismenu.min.js"></script>
<script src="assets/dashboard/js/jquery.slimscroll.js"></script>
<script src="assets/dashboard/js/waves.min.js"></script>
<!--Morris Chart-->
<script src="assets/dashboard/js/morris.min.js"></script>
<script src="assets/dashboard/js/raphael.min.js"></script>
<script src="assets/dashboard/js/dashboard.init.js"></script>
<script src="assets/dashboard/js/chartsConfig.js"></script>

<script src="assets/dashboard/js/chart.js"></script>

<!-- App js -->
<script src="assets/dashboard/js/app.js"></script>

<script src="assets/dashboard/js/chartjs-plugin-labels.min.js"></script>



<body>
    @extends('layouts.master')
    @section('content')
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->

            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->

            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title" style="color:bisque">Dashboard Vente</h4>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>



                        <a href=""></a>
                        <!-- end page-title -->
                        <!--<div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Active Sessions</h5>
                                        </div>
                                        <h3 class="mt-4">43,225</h3>
                                        <div class="progress mt-4" style="height: 4px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Total Revenue</h5>
                                        </div>
                                        <h3 class="mt-4">$73,265</h3>
                                        <div class="progress mt-4" style="height: 4px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Average Price</h5>
                                        </div>
                                        <h3 class="mt-4">447</h3>
                                        <div class="progress mt-4" style="height: 4px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-buffer bg-danger text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Add to Card</h5>
                                        </div>
                                        <h3 class="mt-4">86%</h3>
                                        <div class="progress mt-4" style="height: 4px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="row">
                            <div class="col-xl-6 ">
                                <div class="card m-b-30 " style="background-color:white !important">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4" style="color:rgb(100, 69, 30)">Réceptions {{ date("Y") }} par moi</h4>
                                        <canvas id="echontionParZone" ></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card m-b-30 " style="background-color: white !important">
                                    <div class="card-body " >
                                        <h4 class="mt-0 header-title mb-4" style="color:rgb(100, 69, 30)">Réceptions année {{ date("Y") }}  par zone</h4>
                                        <canvas style="background-color: white;" id="statistiqueLabo"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card m-b-30 " style="background-color: white !important">
                                    <h4 class="mt-0 header-title mb-4" style="color:rgb(100, 69, 30)">Réceptions année {{ date("Y") }}  par zone</h4>

                                    <div class="card-body ">
                                        <canvas style="background-color: white;height:600px"  id="CAbyZone"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card m-b-30 " style="background-color: white !important">
                                    <div class="card-body ">
                                        <canvas style="background-color: white;" id="matricesRadar"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card m-b-30 " style="background-color: white !important">
                                    <div class="card-body ">
                                        <canvas style="background-color: white;" class="m-5" id="matricesPie"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <div class="row">
                            <!--<div class="col-xl-8">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Area Chart</h4>
                                        <div id="morris-area-example" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- end col -->
                            <div class="col-xl-6 ">
                                <div class="card m-b-30 "
                                    style="padding-bottom: 22px;background-color: rgb(5, 11, 54) !important">
                                    <div class="card-body ">
                                        <h4 class="mt-0 header-title mb-4" style="color:bisque">Les analyses par matrice
                                        </h4>
                                        <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 ">
                                <div class="card m-b-30 " style="background-color: rgb(5, 11, 54) !important">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4" style="color:bisque">Top 5 Commercials</h4>
                                        <div id="top5commercial" class="friends-suggestions">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end col -->
                        </div>
                        <div class="row">
                            <!--<div class="col-xl-8">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Area Chart</h4>
                                        <div id="morris-area-example" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- end col -->

                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">

                            <!---<div class="col-xl-4">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                                        <div id="morris-line-example" class="morris-chart" style="height: 360px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                                        <ol class="activity-feed mb-0">
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <p class="text-muted mb-1">Now</p>
                                                    <p class="font-15 mt-0 mb-0">Jassa magna Jassa, risus posted a new article: <b class="text-primary">Forget UX Rowland</b></p>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <p class="text-muted mb-1">Yesterday</p>
                                                <p class="font-15 mt-0 mb-0">Jassa posted a new article: <b class="text-primary">Designer Alex</b></p>
                                            </li>
                                            <li class="feed-item">
                                                <p class="text-muted mb-1">2:30PM</p>
                                                <p class="font-15 mt-0 mb-0">Jassa, Jassa, Jassa Commented <b class="text-primary"> Developer Moreno</b></p>
                                            </li>
                                            <li class="feed-item pb-1">
                                                <p class="text-muted mb-1">12:48 PM</p>
                                                <p class="font-15 mt-0 mb-2">Jassa, Jassa Commented <b class="text-primary">UX Murphy</b></p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>--->
                        </div>
                        <!-- START ROW -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card m-b-30" style="background-color: rgb(5, 11, 54) !important">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4" style="color:bisque">CA par Commercials</h4>
                                        <div id="tableCommercial" class="table-responsive">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
    </body>

    </html>
@endsection
