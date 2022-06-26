<?php include "./checkSession.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Dashboard - Employee Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="./logo.jpg" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="./admin/css/<?php getTheme(); ?>" />
    <!-- EOF CSS INCLUDE -->

    <!-- alertify plugin -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css" />
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <?php include "./header.php"; ?>

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="dashboard.php">Dashboard</a></li>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <!-- START WIDGETS -->
            <div class="row">
                <div class="col-md-3">

                    <!-- START WIDGET CLOCK -->
                    <div class="widget widget-info widget-padding-sm">
                        <div class="widget-big-int plugin-clock">00:00</div>
                        <div class="widget-subtitle plugin-date">Loading...</div>

                        <div class="widget-buttons widget-c3">
                            <div class="col">
                                <a><span class="fa fa-clock-o"></span></a>
                            </div>
                            <div class="col">
                                <a><span class="fa fa-bell"></span></a>
                            </div>
                            <div class="col">
                                <a><span class="fa fa-calendar"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET CLOCK -->

                </div>

                <div class="col-md-3">

                    <!-- START WIDGET checkintime -->
                    <div class="widget widget-default widget-item-icon" style="background:#2ecc71;color:#fff;" onclick="location.href='./attendanceMark.php';">
                        <div class="widget-item-left">
                            <span class="fa fa-clock-o" style="color:#fff;"></span>
                        </div>
                        <div class="widget-data" style="color:#fff;">
                            <div class="widget-int num-count"><?php echo getLastCheckInTime($_SESSION["emp_id"]); ?></div>
                            <div class="widget-title">Terakhir Check-In</div>
                        </div>

                    </div>
                    <!-- END WIDGET checkintime -->

                </div>

                <div class="col-md-3">

                    <!-- START WIDGET checkOuttime -->
                    <div class="widget widget-default widget-item-icon" onclick="location.href='./attendanceMark.php';" style="background:#FF3E4D;color:#fff;">
                        <div class="widget-item-left">
                            <span class="fa fa-clock-o"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count"><?php echo getLastCheckOutTime($_SESSION["emp_id"]); ?></div>
                            <div class="widget-title">Terakhir Check-out</div>
                        </div>

                    </div>
                    <!-- END WIDGET checkOuttime -->

                </div>


                <!-- END WIDGET theme -->
            </div>


        </div>
        <!-- END WIDGETS -->


        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>Are you sure you want to log out?</p>
                    <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="./logout.php" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <?php include "./preload.php"; ?>
    <?php include "./mainScripts.php"; ?>
</body>

</html>