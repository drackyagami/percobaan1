<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="dashboard.php" style="background:#FF3031">ADMIN</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="images/<?php echo getAdminImage($_SESSION["admin_id"]); ?>" alt="<?php echo getAdminName($_SESSION["admin_id"]); ?>" />
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="images/<?php echo getAdminImage($_SESSION["admin_id"]); ?>" alt="<?php echo getAdminName($_SESSION["admin_id"]); ?>" />
                </div>
                <div class="profile-data">
                    <div class="profile-data-name"><?php echo getAdminName($_SESSION["admin_id"]); ?></div>
                </div>
                <div class="profile-controls">
                </div>
            </div>
        </li>



        <li class="active">
            <a href="./dashboard.php" accesskey="1"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>

        <li>
            <a href="./employee.php" accesskey="2"><span class="fa fa-user"></span> <span class="xn-text">Data Pegawai</span></a>
        </li>

        <li class="xn-openable">
            <a href="#"><span class="fa fa-list-alt"></span> <span class="xn-text">Kehadiran</span></a>
            <ul>
                <li><a href="./todayAttendance.php" accesskey="A"><span class="fa fa-calendar-o"></span>Hari Ini</a></li>
                <li><a href="./monthlyAttendance.php"><span class="fa fa-calendar-o"></span>Bulan Ini</a></li>
                <li><a href="./monthWiseAttendance.php"><span class="fa fa-calendar-o"></span>Pilih Bulan Tertentu</a></li>
                <li><a href="./attendanceBetweenPeriod.php"><span class="fa fa-calendar-o"></span>Selama Periode Tertentu</a></li>

            </ul>
        </li>

        <!-- <li>
            <a href="./theme.php" accesskey="H"><span class="fa fa-calendar"></span> <span class="xn-text">Holiday's</span></a>
        </li> -->

        <li>
            <a href="./messages.php" accesskey="M"><span class="fa fa-envelope"></span> <span class="xn-text"> Izin</span></a>
        </li>

        <li>
            <a href="./locations.php" accesskey="L"><span class="fa fa-map-marker"></span> <span class="xn-text">Lokasi</span></a>
        </li>
        <li>
            <a href="./geofencing.php" accesskey="G"><span class="fa fa-location-arrow"></span> <span class="xn-text">Titik Akses</span></a>
        </li>

        <li class="xn-openable">
            <a href="#"><span class="fa fa-user"></span> Profil</a>
            <ul>
                <li><a href="./editProfile.php" accesskey="P"><span class="fa fa-edit"></span> Ubah Profil</a></li>
                <li><a href="./changePassword.php" accesskey="C"><span class="fa fa-lock"></span> Ganti Password</a></li>
            </ul>
        </li>

        <li>
            <a><span class="fa"></span></a>
            <!-- <ul>
                <li><a href="./projects.php" accesskey="A"><span class="fa fa-file-o"></span> Projects</a></li>
                <li><a href="./assignProjects.php" accesskey="A"><span class="fa fa-file-o"></span>Assign Project</a></li>
                <li><a href="./projectGeofencing.php" accesskey="A"><span class="fa fa-file-o"></span>Project Geofencing</a></li>

            </ul> -->
        </li>



        <li>
            <a><span class="fa"></span></a>
        </li>



        <li>
            <a><span class="fa"></span></a>
            <!-- <ul>
                <li><a href="./employeeTrash.php"><span class="fa fa-archive"></span> Employee Archive</a></li>
                <li><a href="./locationTrash.php"><span class="fa fa-archive"></span> Location Archive</a></li>
                <li><a href="./geofencingTrash.php"><span class="fa fa-archive"></span> Geofencing Archive</a></li>
                <li><a href="messageTrash.php"><span class="fa fa-archive"></span> Messages Archive</a></li>
            </ul> -->
        </li>



        <!-- <li>
            <a href="./shortcut.php" accesskey="S"><span class="fa fa-road"></span> <span class="xn-text">Shortcut's</span></a>
        </li> -->

        <li>
            <a><span class="fa "></span> <span></span></a>
        </li>

        <li>
            <a><span class="fa"></span></a>
        </li>

    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->

<!-- PAGE CONTENT -->
<div class="page-content">

    <!-- START X-NAVIGATION VERTICAL -->
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- TOGGLE NAVIGATION -->
        <li class="xn-icon-button">
            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>
        <!-- END TOGGLE NAVIGATION -->

        <!-- SIGN OUT -->
        <li class="xn-icon-button pull-right">
            <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
        </li>
        <!-- END SIGN OUT -->
    </ul>
    <!-- END X-NAVIGATION VERTICAL -->
    <style>
        select {
            -webkit-appearance: menulist;
        }
    </style>


    <!-- histroy back -->
    <input type="button" style="display:none;" accesskey="b" onclick="window.history.back();">
    <!-- histroy back -->
    <!-- histroy forward -->
    <input type="button" style="display:none;" accesskey="n" onclick="window.history.forward();">
    <!-- histroy forward -->