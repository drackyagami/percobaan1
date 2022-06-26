 <!-- if employee id set -->
 <?php
    if (isset($_GET["emp_id"])) {
        $emp_id = $_GET["emp_id"];
        $sql1 = "SELECT * FROM employee WHERE emp_id='$emp_id'";
        include "../db.php";
        $result1 = $conn->query($sql1);
        //  if record exist
        if ($row = $result1->fetch_assoc()) {
    ?>

         <!-- modal start-->
         <div class="modal fade" id="myModal" role="modal">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header bg-success" style="border-radius:0;">
                         <button type="button" class="close" style="color:#f00;border-radius:50%;background:#fff;width:20px;" data-dismiss="modal">&times;</button>
                         <h4 class="modal-title" style="color:#fff;"><i class="fa fa-edit"></i> Update Image</h4>
                     </div>
                     <!---header--->

                     <div class="modal-body">
                         <form action="" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                 <label>Select New Image:</label>
                                 <input type="hidden" name="emp_id" value='<?php echo $row["emp_id"] ?>'>
                                 <input type="hidden" name="emp_email" value="<?php echo $row["emp_email"] ?>">
                                 <input type="file" name="newImage" id="newImage" class="form-control" required>
                             </div>

                             <center>
                                 <button type="submit" name="updateImage" style="color:#fff;background:#E71C23;border:0;padding:7px;border-radius:3px;font-size:14px;">
                                     <i class="fa fa-image"></i> Update Image
                                 </button>
                             </center>
                         </form>
                     </div>
                     <!---body--->
                 </div>
             </div>
         </div>
         <!-- modal end-->

         <form action="" method="post" enctype="multipart/form-data">
             <!-----------form start here------------->
             <div class="row bg-light">
                 <!---row--->
                 <div class="col-md-6">
                     <!---col--->
                     <div class="row">
                         <!---inside sub row--->
                         <div class="col-md-12">
                             <!--col1 inside row---->
                             <div class="form-group">
                                 <!--emp id -->
                                 <input type="hidden" name="emp_id" value="<?php echo $row['emp_id'] ?>">
                                 <label>Nama Lengkap:</label>
                                 <input type="text" name="emp_name" id="emp_name" value="<?php echo $row['emp_name'] ?>" class="form-control" placeholder="Nama Lengkap" required autofocus>
                             </div>
                         </div>
                         <!--col1 inside row---->

                         <div class="col-md-12">
                             <!--col2 inside row---->
                             <div class="form-group">
                                 <label>Jenis Kelamin:</label>
                                 <select name="emp_gender" id="emp_gender" class="form-control" style="-webkit-appearance:menulist;cursor:pointer;" required>
                                     <option><?php echo $row['emp_gender'] ?></option>
                                     <option value="">Pilih Jenis Kelamin</option>
                                     <option>Laki-laki</option>
                                     <option>Perempuan</option>
                                 </select>
                             </div>
                         </div>
                         <!--col2 inside row---->

                         <div class="col-md-12">
                             <!--col3 inside row---->
                             <div class="form-group">
                                 <label>Tanggal Lahir:</label>
                                 <input type="date" name="emp_dob" id="emp_dob" value="<?php echo $row['emp_dob'] ?>" class="form-control" style="cursor:pointer;" required>
                             </div>
                         </div>
                         <!--col3 inside row---->

                         <div class="col-md-12">
                             <!--col4 inside row---->
                             <div class="form-group">
                                 <label>Tempat Dinas:</label>
                                 <select name="emp_position" id="emp_position" class="form-control" style="-webkit-appearance:menulist;cursor:pointer;" required>
                                     <option> <?php echo $row['emp_position'] ?></option>
                                     <option value="">Pilih Tempat Dinas</option>
                                     <option>SEKRETARIAT DAERAH</option>
                                     <option>SEKRETARIAT DPRD</option>
                                     <option>INSPEKTORAT</option>
                                     <option>BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA</option>
                                     <option>BADAN KEUANGAN DAERAH</option>
                                     <option>BADAN PERENCANAAN PEMBANGUNAN, PENELITIAN DAN PENGEMBANGAN DAERAH</option>
                                     <option>BADAN PENANGGULANGAN BENCANA DAERAH</option>
                                     <option>DINAS KEARSIPAN DAN PERPUSTAKAAN</option>
                                     <option>DINAS KEBUDAYAAN DAN PARIWISATA</option>
                                     <option>DINAS KEPEMUDAAN DAN OLAHRAGA</option>
                                     <option>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</option>
                                     <option>DINAS KESEHATAN</option>
                                     <option>DINAS KETAHANAN PANGAN</option>
                                     <option>DINAS KOMUNIKASI DAN INFORMATIKA</option>
                                     <option>DINAS KOPERASI, UKM, PERDAGANGAN, DAN PERINDUSTRIAN</option>
                                     <option>DINAS LINGKUNGAN HIDUP</option>
                                     <option>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</option>
                                     <option>DINAS PEMBERDAYAAN MASYARAKAT DAN DESA</option>
                                     <option>DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK</option>
                                     <option>DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</option>
                                     <option>DINAS PENDIDIKAN</option>
                                     <option>DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA</option>
                                     <option>DINAS PERHUBUNGAN</option>
                                     <option>DINAS PERIKANAN DAN KELAUTAN</option>
                                     <option>DINAS PERTANIAN</option>
                                     <option>DINAS SOSIAL</option>
                                     <option>DINAS PERUMAHAN, KAWASAN PERMUKIMAN, DAN PERTANAHAN</option>
                                     <option>DINAS PETERNAKAN DAN KESEHATAN HEWAN</option>
                                     <option>DINAS TENAGA KERJA</option>
                                     <option>SATUAN POLISI PAMONG PRAJA DAN PEMADAM KEBAKARAN</option>
                                     <option>KANTOR KESATUAN BANGSA DAN POLITIK</option>
                                     <option>RSUD INDRAMAYU</option>
                                     <option>RSUD MA SENTOT</option>
                                     <option>RSUD H. MURSID IBNU SYAFIUDDIN KRANGKENG</option>
                                     <option>KECAMATAN INDRAMAYU</option>
                                     <option>KECAMATAN SINDANG</option>
                                     <option>KECAMATAN BALONGAN</option>
                                     <option>KECAMATAN JUNTINYUAT</option>
                                     <option>KECAMATAN PASEKAN</option>
                                     <option>KECAMATAN LOHBENER</option>
                                     <option>KECAMATAN CANTIGI</option>
                                     <option>KECAMATAN ARAHAN</option>
                                     <option>KECAMATAN KARANGAMPEL</option>
                                     <option>KECAMATAN LELEA</option>
                                     <option>KECAMATAN JATIBARANG</option>
                                     <option>KECAMATAN KRANGKENG</option>
                                     <option>KECAMATAN LOSARANG</option>
                                     <option>KECAMATAN SLIYEG</option>
                                     <option>KECAMATAN KEDOKANBUNDER</option>
                                     <option>KECAMATAN WIDASARI</option>
                                     <option>KECAMATAN KERTASMAYA</option>
                                     <option>KECAMATAN CIKEDUNG</option>
                                     <option>KECAMATAN KROYA</option>
                                     <option>KECAMATAN KANDANGHAUR</option>
                                     <option>KECAMATAN SUKRA</option>
                                     <option>KECAMATAN BONGAS</option>
                                     <option>KECAMATAN SUKAGUMIWANG</option>
                                     <option>KECAMATAN TERISI</option>
                                     <option>KECAMATAN TUKDANA</option>
                                     <option>KECAMATAN PATROL</option>
                                     <option>KECAMATAN HAURGEULIS</option>
                                     <option>KECAMATAN GANTAR</option>
                                     <option>KECAMATAN ANJATAN</option>
                                     <option>KECAMATAN GABUSWETAN</option>
                                     <option>KECAMATAN BANGODUA</option>
                                 </select>
                             </div>
                         </div>
                         <!--col4 inside row---->

                         <div class="col-md-12">
                             <!--col3 inside row---->
                             <div class="form-group">
                                 <label>Alamat:</label>
                                 <textarea name="emp_address" id="emp_address" class="form-control" placeholder="Alamat Lengkap Pegawai" style="cursor:pointer;" required><?php echo $row['emp_address'] ?></textarea>
                             </div>
                         </div>
                         <!--col3 inside row---->

                     </div>
                     <!---inside sub row--->

                 </div>
                 <!---main col1--->


                 <div class="col-md-6">
                     <!---main col2--->

                     <div class="row">
                         <!---inside sub row--->
                         <div class="col-md-12">
                             <!--col6 inside row---->
                             <div class="form-group">
                                 <label>Nomor HP Pegawai:</label>
                                 <input type="tel" name="emp_mobile" id="emp_mobile" value="<?php echo $row['emp_mobile'] ?>" class="form-control" placeholder="Nomor HP Pegawai" required>
                             </div>
                         </div>
                         <!--col6 inside row---->

                         <div class="col-md-12">
                             <!--col7 inside row---->
                             <div class="form-group">
                                 <label>NIK:</label>
                                 <input type="tel" name="emp_email" id="emp_email" value="<?php echo $row['emp_email'] ?>" class="form-control" placeholder="Nomor Induk Kepegawaian" required>
                             </div>
                         </div>
                         <!--col7 inside row---->

                         <div class="col-md-12">
                             <!--col8 inside row---->
                             <div class="form-group">
                                 <label>Password:</label>
                                 <input type="password" name="emp_password" value="<?php echo $row['emp_password'] ?>" id="emp_password" class="form-control" placeholder="Password" required>
                             </div>
                         </div>
                         <!--col8 inside row---->

                         <div class="col-md-12">
                             <!--col9 inside row---->
                             <div class="form-group">
                                 <label>Tahun Bergabung:</label>
                                 <input type="date" name="emp_joining_date" id="emp_joining_date" value="<?php echo $row['emp_joining_date'] ?>" class="form-control" required>
                             </div>
                         </div>
                         <!--col9 inside row---->
                         <div class="col-md-6" style="margin-top:2px;">
                             <img src="./employee/<?php echo $row['image']; ?>" class="img-fluid" style="max-width:70px;" alt="<?php ?>">
                         </div>

                     </div>
                     <!---inside sub row--->
                 </div>
                 <!---main col2--->
             </div>
             <!---row end--->
             <center>
                 <div class="btns">
                     <button type="submit" name="edit" style="background:#000066"> <span class="fa fa-save"></span> Save</button>
                     <button type="reset" style="background:#45CE30"><span class="fa fa-refresh"></span> Reset</button>
                 </div>
             </center>
         </form>
         <!---form end here---------->
         <!-- END PAGE CONTENT WRAPPER -->

         </div>
         <!-- END PAGE CONTENT -->

 <?php
        } else {
            echo "<center><h1>Sorry No Record Found!!!</h1></center>";
        }
    }
    ?>