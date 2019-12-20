<? include "../include/koneksi.php" ?>
<? include "../include/sestart.php" ?>
<?$page="pengunjung"?>


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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                Pengunjung DISKOMINFO
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
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Telecenter</h3>
                            <div class="box-tools">
                                <div class="box-tools">

                                </div>
                            </div>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table id="pengunjung" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Kota</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                include("../include/koneksi.php");


                                if (!$conn) {
                                    die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
                                }


                                // Langkah 2. Sesuaikan query dengan posisi dan batas
                                $query = "SELECT * FROM tb_btamu ORDER BY tanggal DESC";
                                $tampil = mysqli_query($conn, $query);
                                $no 	= 1;
                                $total 	= 0;
                                if (!$tampil)
                                    echo mysqli_error($conn);
                                while ($data = mysqli_fetch_array($tampil)) {
                                    ?>
                                    <tr>
                                        <input type="hidden" id="hidden-id" value="<?= $data['id']?>">
                                        <td><?= $no ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['kota'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?= $data['pesan'] ?></td>
                                        <td><?= $data['tanggal'] ?></td>

                                        <?

                                        echo '<td width="10%"><a class="btn btn-success '. ($data['status_show']==1 ? '':'disabled') .'" href="proses.php?action=tam-pengunjung&st=sem&id=' . $data['id'] . '"/> <i class="fa fa-eye"></i> </a>
                                               <a  class="btn btn-info btn-reply" href="" data-toggle=\'modal\' data-target=\'#video-modal\'><i class="fa fa-reply"></i>  </a></td>';
                                        
                                        ?>

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
<div class="modal" tabindex="-1" role="dialog" id="video-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Balasan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses.php?action=reply" method="post">
            <div class="modal-body">
                    <input type="hidden" name="id_pengunjung" id="id-pengunjung">
                    <textarea id="balas" name="balas" rows="10" cols="80">
                   </textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" >Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
        $('#pengunjung').DataTable();
        $('.btn-reply').click(function (e) {
            var pengunjung_id = $(this).closest('tr').find('#hidden-id').val();
            $('#id-pengunjung').val(pengunjung_id);

        })
    })
</script>
</body>
</html>
