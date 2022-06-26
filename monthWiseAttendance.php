<?php include "./checkSession.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Kehadiran Bulan Tertentu - Panel Pegawai</title>
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
            <li class="active">Kehadiran Bulan Tertentu</li>
        </ul>
        <!-- END BREADCRUMB -->
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <form action="viewMonthWiseAttendanceRecord.php" method="post">
                <div class="row">
                    <!--row-->
                    <div class="col-md-3">
                        <!--col-->
                        <div class="form-group">
                            <label>Pilih Bulan:</label>
                            <select name="month_id" id="month_id" class="form-control" style="cursor:pointer;-webkit-appearance: menulist;" required>
                                <option value="">Pilih Bulan</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>

                            <br>
                            <button type="submit" name="go" style="margin-top:4px;padding:6px;border:none;color:#fff;background:#000099;border-radius:4px;">

                                <i class="fa fa-search"></i> Dapatkan Data Kehadiran
                            </button>
                        </div>
                        <!---form-group--->
                    </div>
                    <!--col--->
                </div>
                <!--row-->
            </form>
        </div>

        <?php include "./preload.php"; ?>
        <?php include "./mainScripts.php"; ?>
</body>

</html>