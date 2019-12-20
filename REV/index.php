<?
$page = "index";
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Dinas Komunikasi dan Informatika Kabupaten Malang</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/Malang.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/Malang.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/Malang.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/Malang.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/Malang.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/Malang.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/Malang.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/Malang.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Malang.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/Malang.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/Malang.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/Malang.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Malang.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/Malang.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <? include "include/header.php"; ?>

    <section class="home-section home-full-height bg-blue" id="home" data-background="assets/images/pantai.jpg">
        <div class="video-player"
             data-property="{videoURL:'https://youtu.be/Dm_FGmce06A?t=71', containment:'.home-section', startAt:18, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        <div class="video-controls-box">
            <div class="container">
                <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#"></a></div>
            </div>
        </div>
        <div class="titan-caption">
            <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-1" style="color: #ffffff">Halo &amp; Selamat Datang</div>
                <div class="font-alt mb-40 titan-title-size-4" style="color: #ffffff">Diskominfo Kabupaten Malang</div>
                <a class="section-scroll btn btn-border-w btn-round" href="#tujuansasaran">Beranda</a>
            </div>
        </div>
    </section>
    <div class="main">
        <section class="module" id="tujuansasaran">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 >
                <h4 class=" font-alt mt-40 mb-0">TUJUAN DAN SASARAN</h4>
                    <hr class="divider-w mt-10 mb-20">
                    <div class="row multi-columns-row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-lightbulb"></span></div>
                                <h3 class="features-title font-alt">TUJUAN DINAS KOMINFO</h3>
                                <?php
                                include("include/koneksi.php");


                                $sql = "SELECT * FROM teks WHERE status_show=1";

                                $query = mysqli_query($conn, $sql);

                                if (!$query) {
                                    die ('SQL Error: ' . mysqli_error($conn));
                                }

                                $total = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    echo '<tr>
                                    <td>' . $row['tujuan'] . '</td><br>
                                    </tr><br>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-lightbulb"></span></div>
                                <h3 class="features-title font-alt">SASARAN DINAS KOMINFO</h3>
                                <?php
                                include("include/koneksi.php");


                                $sql = "SELECT * FROM teks WHERE status_show=1";

                                $query = mysqli_query($conn, $sql);

                                if (!$query) {
                                    die ('SQL Error: ' . mysqli_error($conn));
                                }

                                $total = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    echo '<tr>
						<td class="text-left">' . $row['sasaran'] . '</td><br>
						</tr><br>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <section id="strukturorganisasi">
                        <h4 class="font-alt mt-40 mb-0">STRUKTUR ORGANISASI</h4>
                        <hr class="divider-w mt-10 mb-20">
                        <div class="row multi-columns-row mb-70">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="content-box">
                                    <div style="text-align: center;">
                                        <?php
                                        include("include/koneksi.php");

                                        $sql = "SELECT * FROM files WHERE ket=5 AND aksi=1";
                                        $query = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($query) > 0) {
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                $gambar = $row ["nama_pdf"];
                                                echo "<img src='assets/images/$gambar'  >";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="sumberdayamanusia">
                        <h4 class="font-alt mt-40 mb-0">SUMBER DAYA MANUSIA</h4>
                        <hr class="divider-w mt-10 mb-20">
                        <div class="row multi-columns-row mb-70">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="content-box">
                                    <div style="text-align: center;">
                                        <?php
                                        include("include/editsdm.php");
                                        ?>
                                        <?php
                                        include("include/editsdmgol.php");
                                        ?>
                                        <?php
                                        include("include/editsdmpend.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="prestasi">
                            <h4 class="font-alt mt-40 mb-0">PRESTASI</h4>
                            <hr class="divider-w mt-10 mb-20">
                            <div class="row multi-columns-row mb-70">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="content-box">
                                        <div style="text-align: center;">
                                            <ol>
                                                <?php
                                                include("include/koneksi.php");

                                                $sql = "SELECT * FROM prestasi WHERE status_show=1 ORDER BY id ASC LIMIT 7";

                                                $query = mysqli_query($conn, $sql);

                                                if (!$query) {
                                                    die ('SQL Error: ' . mysqli_error($conn));
                                                }

                                                $total = 0;
                                                $no=1;

                                                while ($row = mysqli_fetch_array($query)) {
                                                    echo "<li>". $row['detail_prestasi']. "</li>";
                                                    $no++;
                                                }
                                                ?></ol>
                                        </div>
                                    </div>
                                </div>
                            </div>



                </div>
            </div>
        </section>
        <section class="module bg-blue" data-background="assets/images/ulp.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="video-box">
                            <div class="video-box-icon"><a class="video-pop-up"
                                                           href="https://www.youtube.com/watch?v=RzbBtF2SrpY"><span
                                            class="icon-video"></span></a></div>
                            <div class="video-title font-alt">VIDEO</div>
                            <div class="video-subtitle font-alt">Unit Layanan Pengadaan Kabupaten Malang</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module" id="tugaspokokdanfungsi">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 >
                <h4 class=" font-alt mt-40 mb-0">TUGAS POKOK DAN FUNGSI</h4>
                    <hr class="divider-w mt-10 mb-20">
                    <div class="row multi-columns-row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-lightbulb"></span></div>
                                <h3 class="features-title font-alt">TUGAS POKOK DINAS KOMINFO</h3>
                                <?php
                                include("include/koneksi.php");


                                $sql = "SELECT * FROM tupoksi WHERE status_show=1";

                                $query = mysqli_query($conn, $sql);

                                if (!$query) {
                                    die ('SQL Error: ' . mysqli_error($conn));
                                }

                                $total = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    echo '<tr>
                                    <td>' . $row['tugaspokok'] . '</td><br>
                                    </tr><br>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-lightbulb"></span></div>
                                <h3 class="features-title font-alt">FUNGSI DINAS KOMINFO</h3>
                                <?php
                                include("include/koneksi.php");


                                $sql = "SELECT * FROM tupoksi WHERE status_show=1";

                                $query = mysqli_query($conn, $sql);

                                if (!$query) {
                                    die ('SQL Error: ' . mysqli_error($conn));
                                }

                                $total = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    echo '<tr>
						<td class="text-left">' . $row['fungsi'] . '</td><br>
						</tr><br>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <section id="strukturorganisasi">
                        <h4 class="font-alt mt-40 mb-0">STRUKTUR ORGANISASI</h4>
                        <hr class="divider-w mt-10 mb-20">
                        <div class="row multi-columns-row mb-70">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="content-box">
                                    <div style="text-align: center;">
                                        <?php
                                        include("include/koneksi.php");

                                        $sql = "SELECT * FROM files WHERE ket=5 AND aksi=1";
                                        $query = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($query) > 0) {
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                $gambar = $row ["nama_pdf"];
                                                echo "<img src='assets/images/$gambar'  >";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="sumberdayamanusia">
                        <h4 class="font-alt mt-40 mb-0">SUMBER DAYA MANUSIA</h4>
                        <hr class="divider-w mt-10 mb-20">
                        <div class="row multi-columns-row mb-70">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="content-box">
                                    <div style="text-align: center;">
                                        <?php
                                        include("include/editsdm.php");
                                        ?>
                                        <?php
                                        include("include/editsdmgol.php");
                                        ?>
                                        <?php
                                        include("include/editsdmpend.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="prestasi">
                            <h4 class="font-alt mt-40 mb-0">PRESTASI</h4>
                            <hr class="divider-w mt-10 mb-20">
                            <div class="row multi-columns-row mb-70">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="content-box">
                                        <div style="text-align: center;">
                                            <ol>
                                            <?php
                                            include("include/koneksi.php");

                                            $sql = "SELECT * FROM prestasi WHERE status_show=1 ORDER BY id ASC LIMIT 7";

                                            $query = mysqli_query($conn, $sql);

                                            if (!$query) {
                                                die ('SQL Error: ' . mysqli_error($conn));
                                            }

                                            $total = 0;
                                            $no=1;

                                            while ($row = mysqli_fetch_array($query)) {
                                                echo "<li>". $row['detail_prestasi']. "</li>";
                                            $no++;
                                            }
                                            ?></ol>
                                        </div>
                                    </div>
                                </div>
                            </div>



                </div>
            </div>
        </section>
        <hr class="divider-w">

        <section class="module pb-0" id="hasilkegiatan">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Hasil Kegiatan</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
            <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">

                <?php
                include("include/koneksi.php");

                $sql = "SELECT * FROM files WHERE ket=1 AND aksi=1";
                $query = mysqli_query($conn, $sql);

                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $gambar = $row ["nama_pdf"];
                        $deskripsi = $row["deskripsi"];
                        ?>
                        <li class="work-item marketing photography" style="position: absolute; left: 477px; top: 0px;">

                                <div class="work-image "><img class="img-resize" width="400" height="400" src="assets/images/<?= $gambar ?>"
                                                             alt="<?= $deskripsi ?>"></div>
                                <div class="work-caption font-alt">
                                    <h3 class="work-title"><?= $deskripsi ?></h3>

                                </div>
                        </li>
                        <?
                    }
                }
                ?>
            </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="module" id="telecenter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">TELECENTER</h2>
                    </div>

                    <div class="row multi-columns-row">
                        <section id="pengertian">

                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="price-table font-alt1">
                                    <h4>Pengertian</h4>
                                    <div class="borderline"></div>
                                    <ul class="price-details">
                                        <?php
                                        include("include/koneksi.php");

                                        $sql = "SELECT * FROM telecenter WHERE status_show=1";

                                        $query = mysqli_query($conn, $sql);

                                        if (!$query) {
                                            die ('SQL Error: ' . mysqli_error($conn));
                                        }


                                        $total = 0;
                                        while ($row = mysqli_fetch_array($query)) {
                                            echo '<tr>
					
					<td>' . $row['pengertian'] . '</td><br>
					</tr><br>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="price-table font-alt1">
                                <h4>Maksud dan Tujuan</h4>
                                <div class="borderline"></div>
                                <ul class="price-details">
                                    <?php
                                    include("include/koneksi.php");

                                    $sql = "SELECT * FROM telecenter WHERE status_show=1";

                                    $query = mysqli_query($conn, $sql);

                                    if (!$query) {
                                        die ('SQL Error: ' . mysqli_error($conn));
                                    }


                                    $total = 0;
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo '<tr>
					
					<td>' . $row['maksudtujuan'] . '</td><br>
					</tr><br>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="price-table font-alt1">
                                <h4>Telecenter Kabupaten Malang</h4>
                                <div class="borderline"></div>
                                <ul class="price-details">
                                    <?php
                                    include("include/koneksi.php");

                                    $sql = "SELECT * FROM telecenter WHERE status_show=1";

                                    $query = mysqli_query($conn, $sql);

                                    if (!$query) {
                                        die ('SQL Error: ' . mysqli_error($conn));
                                    }


                                    $total = 0;
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo '<tr>
					
					<td>' . $row['telecenterkab'] . '</td><br>
					</tr><br>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <hr class="divider-w">



        <section class="module" id="download">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Download</h2>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-mobile"></span></div>
                            <h3 class="features-title font-alt">Multimedia</h3>
                            <p>
                                <?php
                                include("include/koneksi.php");

                                $res = "SELECT * FROM files where status_show=3 AND aksi=1";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                    $jumlah = mysqli_num_rows($query);
                                    echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal0' href=\"\">Video</span></a>";
                                    echo "&nbsp $jumlah";


                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-gears"></span></div>
                            <h3 class="features-title font-alt">Tutorial</h3>
                            <p>
                                <?php
                                include("include/koneksi.php");

                                $res = "SELECT * FROM files where status_show=4 AND aksi=1";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal' href=\"\">Video</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=5  AND aksi=1";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal1' href=\"\">E-Book</span></a>";
                                echo "   $jumlah";
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-book-open"></span></div>
                            <h3 class="features-title font-alt">Berkas</h3>
                            <p>
                                <?php
                                include("include/koneksi.php");
                                $res = "SELECT * FROM files where status_show=6";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal2' href=\"\">Rencana Kerja</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=7";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal3' href=\"sakip20172018.php\">SAKIP 2017 - 2018</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=8";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal4' href=\"pengumumanoperator.php\">Pengumuman Operator</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=9";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal5' href=\"rencanainduk.php\">Rencana Induk</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=10";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal6'  href=\"sakip2104.php\">SAKIP 2014</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=11";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal7' href=\"rekapitulasikehadiran.php\">Rekapitulasi Kehadiran</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=12";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal8' href=\"sakip2015.php\">SAKIP 2015</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=13";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal9' href=\"sakip2016.php\">SAKIP 2016</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=14";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal10' href=\"sakip2017.php\">SAKIP 2017</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";

                                $res = "SELECT * FROM files where status_show=15";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal11' href=\"lapor.php\">LAPOR!-SP4N PPID</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-tools-2"></"></span></div>
                            <h3 class="features-title font-alt">Software</h3>
                            <p>
                                <?php
                                include("include/koneksi.php");

                                $res = "SELECT * FROM files where status_show=16";
                                $query = mysqli_query($conn, $res);

                                $namapdf = $row['nama_pdf'];
                                $deskripsi = $row['deskripsi'];
                                $jumlah = mysqli_num_rows($query);
                                echo "<a class=\"bold-white\" data-toggle='modal' data-target='#video-modal11' href=\"utilities.php\">Utilities</span></a>";
                                echo "   $jumlah";
                                echo "   <br>";
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <!--<section class="module" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Meet Our Team</h2>
                        <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire
                            soul, like these sweet mornings of spring which I enjoy with my whole heart.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image"><img src="assets/images/team-1.jpg" alt="Member Photo"/>
                                <div class="team-detail">
                                    <h5 class="font-alt">Hi all</h5>
                                    <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus,
                                        a&amp;nbsp;iaculis diam.</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a
                                                href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                                    class="fa fa-dribbble"></i></a><a href="#"><i
                                                    class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Jim Stone</div>
                                <div class="team-role">Art Director</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image"><img src="assets/images/team-2.jpg" alt="Member Photo"/>
                                <div class="team-detail">
                                    <h5 class="font-alt">Good day</h5>
                                    <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus,
                                        a&amp;nbsp;iaculis diam.</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a
                                                href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                                    class="fa fa-dribbble"></i></a><a href="#"><i
                                                    class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Andy River</div>
                                <div class="team-role">Creative director</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image"><img src="assets/images/team-3.jpg" alt="Member Photo"/>
                                <div class="team-detail">
                                    <h5 class="font-alt">Hello</h5>
                                    <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus,
                                        a&amp;nbsp;iaculis diam.</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a
                                                href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                                    class="fa fa-dribbble"></i></a><a href="#"><i
                                                    class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Adele Snow</div>
                                <div class="team-role">Account manager</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image"><img src="assets/images/team-4.jpg" alt="Member Photo"/>
                                <div class="team-detail">
                                    <h5 class="font-alt">Yes, it's me</h5>
                                    <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus,
                                        a&amp;nbsp;iaculis diam.</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a
                                                href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                                    class="fa fa-dribbble"></i></a><a href="#"><i
                                                    class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Dylan Woods</div>
                                <div class="team-role">Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
     <!--   <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial"
                 data-background="assets/images/testimonial_bg.jpg">
            <div class="testimonials-slider pt-140 pb-140">
                <ul class="slides">
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="module-icon"><span class="icon-quote"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of
                                        existence in this spot, which was created for the bliss of souls like mine.
                                    </blockquote>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="testimonial-author">
                                        <div class="testimonial-caption font-alt">
                                            <div class="testimonial-title">Jack Woods</div>
                                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="module-icon"><span class="icon-quote"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <blockquote class="testimonial-text font-alt">I should be incapable of drawing a
                                        single stroke at the present moment; and yet I feel that I never was a greater
                                        artist than now.
                                    </blockquote>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="testimonial-author">
                                        <div class="testimonial-caption font-alt">
                                            <div class="testimonial-title">Jim Stone</div>
                                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="module-icon"><span class="icon-quote"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so
                                        absorbed in the exquisite sense of mere tranquil existence, that I neglect my
                                        talents.
                                    </blockquote>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="testimonial-author">
                                        <div class="testimonial-caption font-alt">
                                            <div class="testimonial-title">Adele Snow</div>
                                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
-->

        <section class="module" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Berita</h2>

                    </div>
                </div>
                <?php
                $count = 0;
                include("include/koneksi.php");

                $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";

                $query = mysqli_query($conn, $sql);

                $no = 1;
                $total = 0;
                while ($row = mysqli_fetch_array($query)) {

                    $id = $row['id'];

                    ?>
                    <div class="row multi-columns-row post-columns">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="post mb-20">
                                <div class="post-header font-alt">
                                </div>
                                <p>
                                    <tr>
                                        <b>
                                            <td><?= $row['judul'] ?></td>
                                        </b><br>
                                        <td><?= $row['tglposting'] ?></td>
                                        <br>
                                        <div class="post-entry">

                                            <td><?= $row['deskripsi'] ?></td>
                                            <br>
                                            <td><?= $row['detail'] ?></td>
                                            <br>
                                            <td><?= $row['detailnews'] ?></td>
                                            <br>
                                            <div class="post-more"><a class="more-link"
                                                                      href="berita.php?id=<?= $id ?>">Berita
                                                    Lainnya</a>
                                            </div>
                                    </tr>
                                    <br>
                            </div>
                            </p>
                        </div>
                    </div>
                    <?
                    $no++;
                }
                ?>


            </div>
    </div>
    </section>
    <hr class="divider-w">

    </div>

    <!--<div class="module-small bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
                    <div class="callout-text font-alt">
                        <h3 class="callout-title">Subscribe now</h3>
                        <p>We will not spam your email.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="callout-btn-box">
                        <form id="subscription-form" role="form" method="post" action="php/subscribe.php">
                            <div class="input-group">
                                <input class="form-control" type="email" id="semail" name="semail"
                                       placeholder="Your Email"
                                       data-validation-required-message="Please enter your email address."
                                       required="required"/><span class="input-group-btn">
                        <button class="btn btn-g btn-round" id="subscription-form-submit" type="submit">Submit</button></span>
                            </div>
                        </form>
                        <div class="text-center" id="subscription-response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <section class="module-small bg-blue" id="produkaplikasi">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                    <div class="color-text font-alt">
                        <h3 style="color: #ffffff">Produk Aplikasi</h3>
                        <br>
                        <p style="color: #ffffff">
                            <?php
                            include("include/koneksi.php");

                            $batas = 5;
                            $halaman = @$_GET['halaman'];
                            if (empty($halaman)) {
                                $posisi = 0;
                                $halaman = 1;
                            } else {
                                $posisi = ($halaman - 1) * $batas;
                            }

                            if (!$conn) {
                                die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
                            }


                            // Langkah 2. Sesuaikan query dengan posisi dan batas
                            $query = "SELECT * FROM produkaplikasi WHERE status_show=1 ORDER BY tanggal DESC LIMIT $posisi,$batas";
                            $tampil = mysqli_query($conn, $query);
                            $no = 1 + $posisi;
                            while ($data = mysqli_fetch_array($tampil)) {
                                echo '<tr>
										<td>' . $no . '.' . '&nbsp' . $data['nama_aplikasi'] . '&nbsp' . $data['tahun_pembuatan'] . '</td>
									    <br>
								
									</tr>';
                                $no++;
                            }

                            // Langkah 3: Hitung total data dan halaman serta link 1,2,3
                            $query2 = mysqli_query($conn, "select * from produkaplikasi");
                            $jmldata = mysqli_num_rows($query2);
                            $jmlhalaman = ceil($jmldata / $batas);

                            echo "<br> Halaman : ";


                            for ($i = 1; $i <= $jmlhalaman; $i++)
                                if ($i != $halaman) {
                                    echo " <a style=\"color: #ffffff\" href=\"index.php?halaman=$i\">$i</a> | ";
                                } else {
                                    echo " <b>$i</b> | ";
                                }

                            echo "<p style=\"color: #ffffff\">Total Produk Aplikasi : <b>$jmldata</b> aplikasi</p>";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="module" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Kontak</h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <form role="form" method="post" action="admin/proses.php?action=pengunjung" >
                        <div class="form-group">
                            <label class="sr-only" for="name">Nama</label>
                            <input style="border-color:rgb(60,141,188)" class="form-control" type="text" id="name" name="nama" placeholder="Nama*"
                                   required="required" data-validation-required-message="Please enter your name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <input style="border-color:rgb(60,141,188)" class="form-control" type="email" id="email" name="email" placeholder="Email*"
                                   required="required"
                                   data-validation-required-message="Please enter your email address."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="email">Kota Asal</label>
                            <input style="border-color:rgb(60,141,188)" class="form-control" type="text" id="kota" name="kota" placeholder="Kota Asal*"
                                   required="required" data-validation-required-message="Please enter your kota asal."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <textarea style="border-color:rgb(60,141,188)" class="form-control" rows="7" name="pesan" id="message" name="pesan"
                                      placeholder="Pesan*" required="required"
                                      data-validation-required-message="Please enter your message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <input class="btn btn-block btn-round bg-blue" style="color:#ffffff" id="submit12" type="submit" value="Submit">
                            <br>
                            <button class="btn btn-block btn-round bg-blue" style="color:#ffffff"
                                    onclick="location.href='datapengunjung.php';">Lihat Buku Tamu
                            </button>
                        </div>
                    </form>

                    <div class="ajax-response font-alt" id="contactFormResponse">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="alt-features-item mt-0">
                        <div class="alt-features-icon"><span class="icon-map"></span></div>
                        <h3 class="alt-features-title font-alt">Alamat</h3> Jl. A. Yani Utara No. 384 B<br>(0341) 408788<br>Purwodadi,
                        Blimbing, Kota Malang, Jawa Timur, 65126
                    </div>
                    <div class="alt-features-item mt-xs-60">
                        <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                        <h3 class="alt-features-title font-alt">Email</h3>Email ke kami: kominfo@malangkab.go.id<br>Website:
                        kominfo.malangkab.go.id
                    </div>
                </div>
            </div>
        </div>
    </section>
    <? include "include/footer.php" ?>

    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>

<div class="modal" tabindex="-1" role="dialog" id="video-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");
                    $res="SELECT * FROM files where status_show=4";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal0">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=3";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">E-Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=5";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rencana Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=6";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sakip 2017-2018</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=7";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengumuman Operator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=8";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal5">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rencana Induk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=9";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal6">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sakip 2014</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=10";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal7">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rekapitulasi Kehadiran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=11";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal8">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SAKIP 2015</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=12";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal9">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SAKIP 2016</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=13";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal10">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SAKIP 2017</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=14";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal11">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">LAPOR!-SP4N PPID</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=16";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="video-modal12">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Utilities</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    include("include/koneksi.php");

                    $res="SELECT * FROM files where status_show=16";
                    $query = mysqli_query($conn, $res);
                    while ($row=mysqli_fetch_array($query)) {
                        $namapdf = $row['nama_pdf'];
                        $deskripsi = $row['deskripsi'];
                        echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">$deskripsi  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!--
JavaScripts
=============================================
-->
<script src="assets/lib/jquery/dist/jquery.js"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/lib/wow/dist/wow.js"></script>
<script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
<script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
<script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
<script src="assets/lib/flexslider/jquery.flexslider.js"></script>
<script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/lib/smoothscroll.js"></script>
<script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>