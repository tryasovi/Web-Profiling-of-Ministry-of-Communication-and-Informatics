<? include("include/koneksi.php"); ?>
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
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
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
        <section class="module-small">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="post">
                            <?
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM news WHERE id=$id";

                            $query = mysqli_query($conn, $sql);

                            if (!$query) {
                                die ('SQL Error: ' . mysqli_error($conn));
                            }

                            $row = mysqli_fetch_assoc($query)
                            ?>
                            <div class="post-header font-alt">
                                <h1 class="post-title"><a href="#"><?= $row['judul'] ?></a></h1>
                                <div class="post-meta"><?= $row['tglposting'] ?>
                                </div>
                            </div>
                            <div class="post-entry">
                                <p><?= $row['detailnews'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                        <div class="widget">
                            <form role="form">
                                <div class="search-box">
                                    <input class="form-control" type="text" placeholder="Search..."/>
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
                                            <div class="widget-posts-title"><?= $row['judul'] ?>
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