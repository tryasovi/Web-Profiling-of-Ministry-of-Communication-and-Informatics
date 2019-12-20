<? include "../include/koneksi.php" ?>
<? include "../include/sestart.php" ?>
<?$page="berita"?>



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
                Berita Terbaru
                <small>Kabupaten Malang</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

            <div class="row">
                <div class="col-md-12">

                    <!-- /.box -->
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Tambah Tujuan Sasaran
                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <form action="proses.php?action=tambah-berita" method="post">
                            <div class="box-body pad">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" rows="10"
                                           cols="80" required/>
                                </div>
                                <h3>Berita</h3>
                                <textarea id="detail_news" name="detail_news" rows="10" cols="80"
                                          style="visibility: hidden; display: none;" required>
                                </textarea>
                            </div>
                            <div class="box-footer">

                                <button type="submit" class="btn btn-info pull-right">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Berita</h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table id="table_berita" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Tanggal Posting</th>
                                    <th>Judul</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                include("../include/koneksi.php");

                                $query = "SELECT * FROM news ORDER BY tglposting DESC";
                                $tampil = mysqli_query($conn, $query);
                                if (!$tampil)
                                    echo mysqli_error($conn);
                                $no = 1;
                                while ($data = mysqli_fetch_array($tampil)) {
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['tglposting'] ?></td>
                                        <td><?= $data['judul'] ?></td>
                                        <td><a href="editberita.php?id=<?= $data['id'] ?>" class="btn btn-warning "><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="proses.php?action=delete-berita&id=<?= $data['id'] ?>"
                                               class="btn btn-danger "><i class="fa fa-close"></i> Delete </a></td>


                                    </tr>
                                    <?
                                    $no++;
                                }

                                // Langkah 3: Hitung total data dan halaman serta link 1,2,3
                                ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col-->
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
        $('#table_berita').DataTable();

        var inputberita = CKEDITOR.replace('detail_news');

        inputberita.on('required', function (evt) {
            alert('Detail harus di isi');
            evt.cancel();
        });

    })
</script>
</body>
</html>