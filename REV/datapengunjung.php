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
    <? include "include/header.php" ?>
    <div class="main">
        <section style="margin-top: 75px" class="module bg-dark-30 about-page-header" data-background="assets/images/backpengunjung.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt mb-0">BUKU TAMU DISKOMINFO KABUPATEN MALANG</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <hr class="divider-w mt-10 mb-20">
                        <h4 class="font-alt mb-0">DATA PENGUNJUNG</h4>
                        <hr class="divider-w mt-10 mb-20">
                        <?php
                        include("include/koneksi.php");
                        $server = "localhost"; //lokasi server
                        $username = "root";  // username mysql
                        $password = ""; // jika mysql anda tidak diberi password silahkan dikosongkan
                        $namadb = "kominfo"; // Nama database

                        $conn = mysqli_connect($server, $username, $password, $namadb);
                        // Langkah 1. Tentukan batas,cek halaman & posisi data
                       /* $batas = 5;
                        $halaman = @$_GET['halaman'];
                        if (empty($halaman)) {
                            $posisi = 0;
                            $halaman = 1;
                        } else {
                            $posisi = ($halaman - 1) * $batas;
                        }*/
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        }else{
                            $page = 1;
                        }
                        $per_page = 3; // number of posts to be display per page
                        $start = ($page-1) * $per_page;
                        $pagination_length = 5; // Minimum value 3

                        if (!$conn) {
                            die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
                        }


                        // Langkah 2. Sesuaikan query dengan posisi dan batas
                        $query = "SELECT * FROM tb_btamu WHERE status_show=1 ORDER BY tanggal DESC LIMIT $start,$per_page";
                        $tampil = mysqli_query($conn, $query);
                        $count = 0;

                        while ($data = mysqli_fetch_array($tampil)) {
                            ?>
                            <div class="comments">
                                <div class="comment clearfix">
                                    <div class="comment-avatar"><img
                                                src="assets/images/avatar1.png"
                                                alt="avatar"></div>
                                    <div class="comment-content clearfix">
                                        <div class="comment-author font-alt"><a href="#"><?= $data['nama'] ?> dari kota <?=$data['kota']?></a></div>
                                        <div class="comment-body">
                                            <p><?=$data['pesan']?></p>
                                        </div>
                                        <div class="comment-meta font-alt"><?=$data['tanggal']?>
                                        </div>
                                    </div>
                                    <? if (!$data['reply'] == "") { ?>
                                        <div class="comment clearfix">
                                            <div class="comment-avatar"><img
                                                        src="assets/images/avatar.png"
                                                        alt="avatar"></div>
                                            <div class="comment-content clearfix">
                                                <div class="comment-author font-alt"><a href="#">Admin</a></div>
                                                <div class="comment-body">
                                                    <p><?=$data['reply']?></p>
                                                </div>
                                                <!--<div class="comment-meta font-alt">Today, 15:34 - <a href="#">Reply</a>
                                                </div>-->
                                            </div>
                                        </div>
                                        <hr class="divider-w mt-10 mb-20">

                                        <?
                                    }
                                    ?>
                                </div>
                            </div>
                            <?
                            $count++;
                        }
?>

                                                <div class="pagination font-alt">

                            <?
                            /*$query2 = mysqli_query($conn, "select * from tb_btamu WHERE status_show=1");
                            $jmldata = mysqli_num_rows($query2);
                            $jmlhalaman = ceil($jmldata / $batas);

                            for ($i = 1; $i <= $jmlhalaman; $i++)
                                if ($i != $halaman) {
                                    echo " <a href=\"berita.php?halaman=$i\">$i</a>";
                                } else {
                                    echo " <a href=\"#\">$i</a> ";
                                }*/
                            $sq2 = $conn->query("select * from tb_btamu where status_show=1"); // Enter your query here
                            $total_items = mysqli_num_rows($sq2); // total posts
                            $total_pages = ceil($total_items / $per_page); // number of pages
                            if ($pagination_length >= $total_pages) { $pagination_length = $total_pages-1; } // preventing the over lenght of pagination
                            // do not edit this line
                            if ($page != 1) { echo '<a href="datapengunjung.php?page='.($page-1).'">«</a>'; } else { echo '<a href="pagination-custom.php?page=1">«</a>'; }
                            if ($total_pages < 5) {
                                for ($i=1; $i<=$total_pages; $i++){
                                    echo '<a href="datapengunjung.php?page='.$i.'">['.$i.']</a>';
                                }
                            }else if($total_pages >= 5){
                                // fixed block
                                echo '<a href="datapengunjung.php?page=1">1</a>';
                                echo '<span>...</span>';
                                // fixed block
                                if ($page >= $total_pages-$pagination_length) {
                                    for ($i = $total_pages-$pagination_length; $i<$total_pages;$i++){
                                        echo '<a href="datapengunjung.php?page='.$i.'">'.$i.'</a>';
                                    }
                                }else{
                                    for ($i = $page+1; $i<$page+($pagination_length+1);$i++){
                                        echo '<a href="datapengunjung.php?page='.$i.'">'.$i.'</a>';
                                    }
                                }
                                // fixed block
                                echo '<span>...</span>';
                                echo '<a href="datapengunjung.php?page='.$total_pages.'">'.$total_pages.'</a>';
                                // fixed block
                            }
                            // do not edit this line
                            if ($page != $total_pages) { echo '<a href="datapengunjung.php?page='.($page+1).'">»</a>'; } else { echo '<a href="pagination-custom-custom.php?page='.$total_pages.'">»</a>'; }

                            ?>


                    </div>


                </div>
                </div>
            </div>
        </section>
        <? include "include/footer.php" ?>
        <hr class="divider-d">
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
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