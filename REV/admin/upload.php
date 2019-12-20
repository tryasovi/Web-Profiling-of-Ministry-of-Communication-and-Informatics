<? include "../include/koneksi.php" ?>
<? include "../include/sestart.php" ?>
<?$page="upload"?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | DISKOMINFO Kabupaten Malang</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <? include "layout/header.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Upload File DISKOMINFO
                <small>Kabupaten Malang</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

            <div class="row">
                <div class="col-md-6">

                    <!-- /.box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Struktur organisasi</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="proses.php?action=upload-struktur" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Struktur Organisasi</label>
                                    <input type="file" name="gambar" id="inputFile5" accept="images/*" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control"  placeholder="Masukkan Deskripsi" required>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-6">

                    <!-- /.box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Rencana Kerja</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="proses.php?action=upload-rencanakerja" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Rencana Kerja</label>
                                    <input type="file" name="fupload" id="inputFile5" accept="application/pdf*" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control"  placeholder="Masukkan Deskripsi" required>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-6">

                    <!-- /.box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Rencana Strategis</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="proses.php?action=upload-rencanastrategis" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Rencana Strategis</label>
                                    <input type="file" name="fupload" id="inputFile5" accept="application/pdf*" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control"  placeholder="Masukkan Deskripsi" required>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-6">

                    <!-- /.box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Hasil Kegiatan</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="proses.php?action=upload-hasilkegiatan" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Hasil Kegiatan</label>
                                    <input type="file" name="gambar" id="inputFile5" accept="images/*" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control"  placeholder="Masukkan Deskripsi" required>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-6">

                    <!-- /.box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Upload File</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="proses.php?action=download" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">File</label>
                                    <input type="file" name="fupload" id="inputFile5" accept="application/pdf*" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control"  placeholder="Masukkan Deskripsi" required>
                                </div>
                                <div class="form-group">
                                    <label>Pilih Status</label>
                                    <select name="status" class="form-control">
                                        <option value="3">3. Video [Multimedia]</option>
                                        <option value="4">4. Video [Tutorial]</option>
                                        <option value="5">5. E-Book [Tutorial]</option>
                                        <option value="6">6. Rencana Kerja [Berkas]</option>
                                        <option value="7">7. Sakip 2017-2018 [Berkas]</option>
                                        <option value="8">8. Pengumuman Operator [Berkas]</option>
                                        <option value="9">9. Rencana Induk [Berkas]</option>
                                        <option value="10">10. Sakip 2014 [Berkas]</option>
                                        <option value="11">11. Rekapitulasi Kehadiran [Berkas]</option>
                                        <option value="12">12. Sakip 2015 [Berkas]</option>
                                        <option value="13">13. Sakip 2016 [Berkas]</option>
                                        <option value="14">14. Sakip 2017 [Berkas]</option>
                                        <option value="15">15. LAPOR!-SP4N PPID [Software]</option>
                                        <option value="16">16. Utilities [Software]</option>

                                    </select>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>




            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Upload</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table id="table_upload" class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama File</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Input</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $sql = 'SELECT * FROM files ORDER BY tgl_upload DESC';
                        $query = mysqli_query($conn, $sql);
                        $no = 1;
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['nama_pdf'] ?></td>
                                <td><?= $row['deskripsi'] ?></td>
                                <td><?= $row['tgl_upload'] ?></td>
                                <?
                                if ($row['aksi'] == 1) {
                                    echo '<td width="10%"><a class="btn btn-success" href="proses.php?action=tam-download&st=sem&id=' . $row['id'] . '"/> <i class="fa fa-eye-slash"></i></a>
                                               <a href="proses.php?action=delete-download&id='. $row['id'] .'"
                                               class="btn btn-danger "><i class="fa fa-close"></i>  </a></td>';
                                } elseif ($row['aksi'] == 0) {
                                    echo '<td width="10%"><a class="btn btn-success" href="proses.php?action=tam-download&st=tam&id=' . $row['id'] . '"> <i class="fa fa-eye"></i></a>
                                                <a href="proses.php?action=delete-download&id='. $row['id'] .'"
                                               class="btn btn-danger "><i class="fa fa-close"></i>  </a></td>';
                                }
                                ?>
                            </tr>
                            <?
                            $no++;
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <? include "layout/footer.php" ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        $('#table_upload').DataTable();

        CKEDITOR.replace('strukturorganisasi');
        CKEDITOR.replace('rencanakerja');
        CKEDITOR.replace('rencanastrategis');
        CKEDITOR.replace('hasilkegiatan')


    })
</script>
</body>
</html>