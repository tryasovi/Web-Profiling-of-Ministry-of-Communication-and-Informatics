<?php
/**
 * Created by PhpStorm.
 * User: Donny Eko Saputro
 * Date: 10-Oct-18
 * Time: 4:20 PM
 */

include("../include/koneksi.php");


?>
<header class="main-header">

    <!-- Logo -->
    <a href="backend.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">Admin</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>DISKOMINFO</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">WELCOME, <? echo"".$_SESSION['user1'].""; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href= "sedestroy.php"class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <p style="color: white"><? echo"".$_SESSION['user1'].""; ?></p>
                <!-- Status -->
                <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
            <div class="pull-left info">

            </div>
        </div>



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HALAMAN UTAMA</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="<?php if ($page=="tujuan") {echo "active"; } else  {echo "noactive";}?>"><a href="backend.php"><i class="fa fa-link"></i>
                <span>Tujuan dan Sasaran</span></a></li>
            <li class="<?php if ($page=="prestasi") {echo "active"; } else  {echo "noactive";}?>"><a href="prestasi.php"><i class="fa fa-link"></i>
                    <span>Prestasi</span></a></li>
            <li class="<?php if ($page=="telecenter") {echo "active"; } else  {echo "noactive";}?>"><a href="telecenter.php"><i class="fa fa-link"></i>
                    <span>Telecenter</span></a></li>
            <li class="<?php if ($page=="produkaplikasi") {echo "active"; } else  {echo "noactive";}?>"><a href="produkaplikasi.php"><i class="fa fa-link"></i>
                    <span>Produk Aplikasi</span></a></li>
            <li class="<?php if ($page=="tugaspokok") {echo "active"; } else  {echo "noactive";}?>"><a href="tugaspokok.php"><i class="fa fa-link"></i>
                    <span>Tugas Pokok</span></a></li>
            <li class="<?php if ($page=="upload") {echo "active"; } else  {echo "noactive";}?>"><a href="upload.php"><i class="fa fa-link"></i>
                    <span>Upload Data</span></a></li>
            <li class="<?php if ($page=="berita") {echo "active"; } else  {echo "noactive";}?>"><a href="berita.php"><i class="fa fa-link"></i>
                    <span>Berita</span></a></li>
            <li class="<?php if ($page=="pengunjung") {echo "active"; } else  {echo "noactive";}?>"><a href="pengunjung.php"><i class="fa fa-link"></i>
                    <span>Pengunjung</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>