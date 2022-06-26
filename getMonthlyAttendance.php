<?php
include "./dataTableCSS.php";
?>

<div class="table-responsive table-striped table-hoverable" style="padding-bottom: 60px;">
    <!---table-responsive--->
    <!--table -->
    <table id="myTable" class=" table table-bordered">
        <thead>
            <th>Waktu Masuk</th>
            <th>Waktu Pulang</th>
            <th>Perbedaan Menit</th>
            <th>Perbedaan Jam</th>
        </thead>
        <tbody>
            <?php
            include "./db.php";
            $emp_id = $_GET["emp_id"];
            $month = date("m");
            $sql = "SELECT checkin.address As checkin_address,checkin.distance As checkin_distance,checkout.address As
                checkout_address,checkout.distance As checkout_distance,checkin.time As checkin_time,checkout.time as 
                checkout_time,TIMESTAMPDIFF(Hour,checkin.time,checkout.time) AS diff_hour,
                TIMESTAMPDIFF(minute,checkin.time,checkout.time) AS diff_minute FROM 
                checkin left join checkout on checkin.id=checkout.check_in_id 
                WHERE checkin.userId='$emp_id' AND MONTH(checkin.time)='$month'  AND  MONTH(checkout.time)='$month'  ORDER BY checkin.time DESC
                ,checkout.time DESC;";
            $result = $conn->query($sql);
            $total_work_time_minute = 0;
            $total_work_time_hour = 0;
            while ($row = $result->fetch_assoc()) {
                $lastCheckInDate = date("Y-m-d", strtotime($row["checkin_time"]));
            ?>
                <tr>
                    <td><?php echo date("h:i:s A", strtotime($row["checkin_time"])); ?><br><?php echo date("d-m-Y", strtotime($row["checkin_time"])); ?></td>
                    <td>
                        <?php
                        if (isset($row["checkout_time"])) {
                            echo date("h:i:s A", strtotime($row["checkout_time"]));
                        } else {
                            echo "-";
                        }
                        ?>
                    </td>
                    <!-- diff_Minute -->
                    <td>
                        <?php
                        if (isset($row["checkout_time"])) {
                            echo $row["diff_minute"];
                            $total_work_time_minute += $row["diff_minute"];
                        } else {
                            echo "-";
                        }
                        ?>
                    </td>
                    <!-- diffrance Hour -->
                    <td>
                        <?php
                        echo $row["diff_hour"];
                        $total_work_time_hour += $row["diff_hour"];
                        ?>
                    </td>
                    <!-- diffrance -->

                </tr>
            <?php
            }
            ?>
            <div class="alert alert-info">
                <p> <b>Waktu Bekerja Dalam Menit: </b> <?php echo $total_work_time_minute . " Menit"; ?></p>
                <p> <b>Waktu Bekerja Dalam Jam: </b> <?php echo round($total_work_time_minute / 60, 2); ?> Jam</p>
            </div>
        </tbody>
    </table>
    <!--table end-->
</div>

<?php
include "./dataTableScript.php";
?>


<style>
    .alertify .ajs-footer .ajs-buttons.ajs-primary .ajs-button {
        margin: 4px;
        border: none;
        border-radius: 4px;
        color: #fff;
        box-shadow: 0px 1px 3px #666;
    }

    button.ajs-button.ajs-ok {
        background: #E71C23;
    }

    button.ajs-button.ajs-cancel {
        background: #2ecc72;
    }
</style>