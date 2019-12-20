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
        <section style="margin-top: 75px" class="module bg-dark-60 blog-page-header" data-background="assets/images/backberita.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Berita Terbaru</h2>
                        <div class="module-subtitle font-serif">Dinas Komunikasi dan Informatika Kabupaten Malang
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <?php
                        include("include/koneksi.php");

                        /*$batas = 3;
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
                        // $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 2 ";
                        @$s = $_GET['s'];

                        if (empty($s)){

                            $query = "SELECT * FROM news ORDER BY id DESC LIMIT $start,$per_page";
                        }else{

                            $query = "SELECT * FROM news WHERE `judul` LIKE '%".$s."%' ORDER BY id DESC LIMIT $start,$per_page";

                        }

                        $tampil = mysqli_query($conn, $query);
                        //$no = 1 + $posisi;
                        while ($data = mysqli_fetch_array($tampil)) { ?>
                            <div class="post">

                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="#"><?= $data['judul'] ?></a></h2>
                                    <div class="post-meta"> <?= $data['tglposting'] ?>
                                    </div>
                                </div>
                                <div class="post-entry">
                                    <p>
                                        <?= $data['detailnews'] ?>
                                    </p>
                                </div>
                                <!--<div class="post-more"><a class="more-link" href="#">Read more</a></div>-->
                            </div>
                        <?
                        }

                        // Langkah 3: Hitung total data dan halaman serta link 1,2,3




                        ?>
                        <div class="pagination font-alt">
                            
                            <?
                            /*$query2 = mysqli_query($conn, "select * from news");
                            $jmldata = mysqli_num_rows($query2);
                            $jmlhalaman = ceil($jmldata / $batas);

                            for ($i = 1; $i <= $jmlhalaman; $i++)
                                if ($i != $halaman) {
                                    echo " <a href=\"berita.php?halaman=$i\">$i</a>";
                                } else {
                                    echo " <a href=\"#\">$i</a> ";
                                }*/
                            $sq2 = $conn->query("select * from news"); // Enter your query here
                            $total_items = mysqli_num_rows($sq2); // total posts
                            $total_pages = ceil($total_items / $per_page); // number of pages
                            if ($pagination_length >= $total_pages) { $pagination_length = $total_pages-1; } // preventing the over lenght of pagination
                            // do not edit this line
                            if ($page != 1) { echo '<a href="berita.php?page='.($page-1).'">«</a>'; } else { echo '<a href="pagination-custom.php?page=1">«</a>'; }
                            if ($total_pages < 5) {
                                for ($i=1; $i<=$total_pages; $i++){
                                    echo '<a href="berita.php?page='.$i.'">['.$i.']</a>';
                                }
                            }else if($total_pages >= 5){
                                // fixed block
                                echo '<a href="berita.php?page=1">1</a>';
                                echo '<span>...</span>';
                                // fixed block
                                if ($page >= $total_pages-$pagination_length) {
                                    for ($i = $total_pages-$pagination_length; $i<$total_pages;$i++){
                                        echo '<a href="berita.php?page='.$i.'">'.$i.'</a>';
                                    }
                                }else{
                                    for ($i = $page+1; $i<$page+($pagination_length+1);$i++){
                                        echo '<a href="berita.php?page='.$i.'">'.$i.'</a>';
                                    }
                                }
                                // fixed block
                                echo '<span>...</span>';
                                echo '<a href="berita.php?page='.$total_pages.'">'.$total_pages.'</a>';
                                // fixed block
                            }
                            // do not edit this line
                            if ($page != $total_pages) { echo '<a href="berita.php?page='.($page+1).'">»</a>'; } else { echo '<a href="pagination-custom.php?page='.$total_pages.'">»</a>'; }

                            ?>


                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                        <div class="widget">
                            <form role="form" method="get" action="">
                                <div class="search-box">
                                    <input class="form-control" type="text" name="s" placeholder="Search..."/>
                                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="widget">
                            <h5 class="widget-title font-alt">Berita Lainya</h5>
                            <ul class="widget-posts">
                                <?php
                                $count = 0;
                                include("include/koneksi.php");

                                $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 25";

                                $query = mysqli_query($conn, $sql);

                                $no = 1;
                                $total = 0;
                                while ($row = mysqli_fetch_array($query)) {

                                    $id = $row['id'];
                                    ?>
                                    <li class="clearfix">

                                        <div class="widget-posts-body">
                                            <div class="widget-posts-title"><b><?= $row['judul'] ?><b>
                                            </div>
                                            <div class="widget-posts-meta"><?= $row['tglposting'] ?></div>
                                            <div class="post-more"><a class="more-link"
                                                                      href="berita-single.php?id=<?= $row['id'] ?>">Selanjutnya</a>
                                            </div>
                                        </div>
                                    </li>
                                    <?
                                    $no++;
                                }
                                ?>
                                <!--<li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg"
                                                                                     alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a>
                                        </div>
                                        <div class="widget-posts-meta">15 February</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-3.jpg"
                                                                                     alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Eco bag Mockup</a></div>
                                        <div class="widget-posts-meta">21 February</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-4.jpg"
                                                                                     alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Bottle Mockup</a></div>
                                        <div class="widget-posts-meta">2 March</div>
                                    </div>
                                </li>-->
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <? include "include/footer.php" ?>

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