<nav class="navbar navbar-custom navbar-fixed-top <? ($page=="index" ? 'navbar-transparent':'') ?> " role="navigation">
    <div class="container" >

        <div class="navbar-header" >
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
            <img src="assets/images/Malang.png" alt="kominfo.com" width="100" height="75"><a href="index.php" class="navbar-brand">DISKOMINFO</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown" id="profil"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php#tujuansasaran" class="action-scroll">Tujuan dan Sasaran</a></li>
                        <li><a href="index.php#tugaspokokdanfungsi" class="action-scroll">Tugas Pokok dan Fungsi</a></li>
                        <li><a href="index.php#strukturorganisasi" class="action-scroll">Struktur Organisasi</a></li>
                        <li><a href="index.php#sumberdayamanusia" class="action-scroll">Sumber Daya Manusia</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Program</a>
                    <ul class="dropdown-menu">
                        <?php
                        include("include/koneksi.php");

                        $res = "SELECT * FROM files where aksi=1 AND status_show=1";
                        $query = mysqli_query($conn, $res);
                        while ($row = mysqli_fetch_array($query)) {
                            $namapdf = $row['nama_pdf'];
                            $deskripsi = $row['deskripsi'];
                            echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">Rencana Kerja  <i class=\"fa fa-file-pdf-o\" ></i></span></a></li>";
                        }
                        $res = "SELECT * FROM files where status_show=2 AND aksi=1";
                        $query = mysqli_query($conn, $res);
                        while ($row = mysqli_fetch_array($query)) {
                            $namapdf = $row['nama_pdf'];
                            $deskripsi = $row['deskripsi'];
                            echo "<li><a href=\"assets/files/$namapdf\"><span data-hover=\"$deskripsi\">Rencana Strategis <i class=\"fa fa-file-archive-o\" ></i></span></a></li>";
                        }
                        ?>
                        <li><a href="index.php#prestasi" class="action-scroll">Prestasi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Produk dan Layanan</a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php#telecenter" class="action-scroll">Telecenter</a></li>
                        <li><a href="index.php#produkaplikasi" class="action-scroll">Produk Aplikasi</a></li>
                        <li><a href="index.php#hasilkegiatan" class="action-scroll">Hasil Kegiatan</a></li>
                        <li><a href="index.php#download" class="action-scroll">Download</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Interaksi</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php#contact" class="action-scroll">Kontak</a></li>
                    </ul>
                </li>
                <li><a href="index.php#news" class="action-scroll">Berita</a>
                   
                </li>
                <!--li.dropdown.navbar-cart-->
                <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
                <!--        span.icon-basket-->
                <!--        |-->
                <!--        span.cart-item-number 2-->
                <!--    ul.dropdown-menu.cart-list(role='menu')-->
                <!--        li-->
                <!--            .navbar-cart-item.clearfix-->
                <!--                .navbar-cart-img-->
                <!--                    a(href='#')-->
                <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
                <!--                .navbar-cart-title-->
                <!--                    a(href='#') Short striped sweater-->
                <!--                    |-->
                <!--                    span.cart-amount 2 &times; $119.00-->
                <!--                    br-->
                <!--                    |-->
                <!--                    strong.cart-amount $238.00-->
                <!--        li-->
                <!--            .navbar-cart-item.clearfix-->
                <!--                .navbar-cart-img-->
                <!--                    a(href='#')-->
                <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
                <!--                .navbar-cart-title-->
                <!--                    a(href='#') Colored jewel rings-->
                <!--                    |-->
                <!--                    span.cart-amount 2 &times; $119.00-->
                <!--                    br-->
                <!--                    |-->
                <!--                    strong.cart-amount $238.00-->
                <!--        li-->
                <!--            .clearfix-->
                <!--                .cart-sub-totle-->
                <!--                    strong Total: $476.00-->
                <!--        li-->
                <!--            .clearfix-->
                <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
                <!--li.dropdown-->
                <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
                <!--    ul.dropdown-menu(role='menu')-->
                <!--        li-->
                <!--            .dropdown-search-->
                <!--                form(role='form')-->
                <!--                    input.form-control(type='text', placeholder='Search...')-->
                <!--                    |-->
                <!--                    button.search-btn(type='submit')-->
                <!--                        i.fa.fa-search-->
            </ul>
        </div>
    </div>
</nav>