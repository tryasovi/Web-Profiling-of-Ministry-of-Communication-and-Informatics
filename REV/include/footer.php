<div class="module-small bg-blue">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt"  style="color: #ffffff">Tentang Kominfo</h5>
                  <p class="text-justify"  style="color: #ffffff">Malang adalah kabupaten terluas kedua di Jawa Timur setelah Kabupaten Banyuwangi dan merupakan kabupaten dengan populasi terbesar di Jawa Timur. Merupakan kantor dinas Kominfo Kabupaten Malang, provinsi Jawa Timur. Kominfo Kabupaten Malang memiliki tugas sebagai penyelenggaraan urusan pemerintah bidang komunikasi dan informatika untuk daerah Kabupaten Malang, Jawa Timur.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt" style="color: #ffffff">Kontak</h5>
                  <ul class="icon-list">
                      <li  style="color: #ffffff"> <i class="fa fa-phone"></i> Telepon <a href="#"></a>
                          <?
                        $sql = mysqli_connect("localhost", "root", '', "kominfo") or die('gagal terkoneksi.');
                        $query = "SELECT * FROM tsitus";
                        $result = mysqli_query($sql, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_object($result)) {
                                echo $row->telepon.'<br>';
                            }
                        }?>
                      </li>
                      <li  style="color: #ffffff"><i class="fa fa-fax"></i> Fax <a href="#"></a>
                          <?
                          $sql = mysqli_connect("localhost", "root", '', "kominfo") or die('gagal terkoneksi.');
                          $query = "SELECT * FROM tsitus";
                          $result = mysqli_query($sql, $query);
                          if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_object($result)) {
                                  echo $row->fax.'<br>';
                              }
                          }?>
                      </li>
                    <li  style="color: #ffffff"><i class="fa fa-map-marker"></i> Alamat <a href="#"></a>
                        <?
                        $sql = mysqli_connect("localhost", "root", '', "kominfo") or die('gagal terkoneksi.');
                        $query = "SELECT * FROM tsitus";
                        $result = mysqli_query($sql, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_object($result)) {
                                echo $row->alamat.'<br>';
                            }
                        }?>
                    </li>
                    <li  style="color: #ffffff"><i class="fa fa-envelope-o"></i> Email <a href="#"></a>
                        <?
                        $sql = mysqli_connect("localhost", "root", '', "kominfo") or die('gagal terkoneksi.');
                        $query = "SELECT * FROM tsitus";
                        $result = mysqli_query($sql, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_object($result)) {
                                echo $row->email.'<br>';
                            }
                        }?>
                    </li>
                      <li  style="color: #ffffff"><i class="fa fa-globe"></i> Website <a  style="color: #ffffff" href="http://www.malangkab.go.id/site/read/detail/1184/dinas-komunikasi-dan-informatika.html">www.malangkab.go.id</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt"  style="color: #ffffff">Pintasan</h5>
                  <ul class="icon-list">
                    <li><a  style="color: #ffffff" href="index.php#tujuansasaran">Profil</a></li>
                    <li><a  style="color: #ffffff" href="index.php#prestasi">Program</a></li>
                    <li><a  style="color: #ffffff" href="index.php#telecenter">Produk dan Layanan</a></li>
                    <li><a  style="color: #ffffff" href="index.php#contact">Kontak</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
		<hr class="divider-w">
		<footer class="footer bg-blue1">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p  style="color: #ffffff" class="copyright font-alt">© 2018&nbsp;<a  style="color: #ffffff" href="index.html">Dinas Komunikasi dan Informatika</a>, Kabupaten Malang</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a  style="color: #ffffff" href="https://www.facebook.com/Kabupaten-Malang-1759962554261513/">In Partnership With Ma Chung University <i class="fa fa-facebook"></i></a><a style="color: #ffffff" href="https://twitter.com/kominfokabmlg?lang=en"><i class="fa fa-twitter"></i></a><a style="color: #ffffff" href="https://www.instagram.com/kominfomalangkab/"><i class="fa fa-instagram"></i></a><a style="color: #ffffff" href="https://plus.google.com/s/diskominfo/top"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>