<?php
/**
 * Created by PhpStorm.
 * User: Donny Eko Saputro
 * Date: 10-Oct-18
 * Time: 5:48 PM
 */

include("../include/koneksi.php");

$action = $_GET['action'];
$tglposting = date('Y-m-d H:i:s');

switch ($action) {
    case 'tambah-berita':
        $judul = $_POST["judul"];
        $isi = $_POST["detail_news"];
        $query = "INSERT INTO `news`(`tglposting`, `judul`, `detailnews`) VALUES ('$tglposting','$judul','$isi')";
        //echo $query;
        $result = mysqli_query($conn, $query);
        if (!$result)
            echo mysqli_error($conn);
        header("Location: berita.php");
        break;

    case 'edit-berita':
        $id = $_POST["id"];

        $judul = $_POST["judul"];
        $detailnews = $_POST["detail_news"];

        $query = "UPDATE news SET `judul`='$judul',`detailnews`='$detailnews' WHERE id='$id'";

        $result = mysqli_query($conn, $query);
        header("Location: berita.php");
        break;

    case 'delete-berita':
        $id = $_GET["id"];

        $query = "DELETE FROM news WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        header("Location: berita.php");
        break;

    case 'tujuan':
        $tujuan = $_POST['tujuan'];
        $sasaran = $_POST['sasaran'];


        $query = "INSERT INTO teks VALUES ('','$tujuan','$sasaran','$tglposting',0)";
        $result = mysqli_query($conn, $query);
        header("Location: backend.php");
        break;

    case 'delete-tujuan':
        $id = $_GET["id"];

        $query = "DELETE FROM teks WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        //echo mysqli_error($conn);
        header("Location: backend.php");
        break;

    case 'tugaspokok':
        $tugaspokok = $_POST['tugaspokok'];
        $fungsi = $_POST['fungsi'];


        $query1 = "INSERT INTO tupoksi VALUES ('','$tugaspokok','$fungsi','$tglposting',0)";
        $result = mysqli_query($conn, $query1);
        header("Location: tugaspokok.php");
        break;
    case 'delete-tugaspokok':
        $id = $_GET["id"];

        $query = "DELETE FROM tupoksi WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        //echo mysqli_error($conn);
        header("Location: tugaspokok.php");
        break;
    case 'prestasi':
        $detail_prestasi = $_POST['prestasi'];

        $query = "INSERT INTO prestasi VALUES ('','$detail_prestasi','$tglposting',0)";
        $result = mysqli_query($conn, $query);
        header("Location: prestasi.php");
        break;
    case 'delete-prestasi':
        $id = $_GET["id"];

        $query = "DELETE FROM prestasi WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        //echo mysqli_error($conn);
        header("Location: prestasi.php");
        break;
    case 'telecenter':
        $pengertian = $_POST['pengertian'];
        $maksudtujuan = $_POST['maksudtujuan'];
        $telecenterkab = $_POST['telecenterkab'];

        $query = "INSERT INTO telecenter VALUES ('','$pengertian','$maksudtujuan','$telecenterkab','$tglposting',0)";
        $result = mysqli_query($conn, $query);
        header("Location: telecenter.php");
        break;
    case 'delete-telecenter':
        $id = $_GET["id"];

        $query = "DELETE FROM telecenter WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        //echo mysqli_error($conn);
        header("Location: telecenter.php");
        break;
    case 'pengunjung':
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        $query = "INSERT INTO tb_btamu VALUES ('','$nama','$kota','$email','$pesan','$tglposting','',1)";
        $result = mysqli_query($conn, $query);
        //echo mysqli_error($conn);
        header("Location: ../index.php");
        break;

    case 'tam-telecenter':
        if ($_GET['st'] == "sem") {
            $id = $_GET['id'];
            $sql2 = "UPDATE telecenter SET status_show=0 WHERE id=$id";
            mysqli_query($conn, $sql2);

            //echo "SQL = ".$sql2;
        } elseif ($_GET['st'] == "tam") {
            $id = $_GET['id'];
            $sql2 = "UPDATE telecenter SET status_show=1 WHERE id=$id";
            mysqli_query($conn, $sql2);
            //echo "SQL = ".$sql2;
        }
        header("Location: telecenter.php");
        break;
    case 'produkaplikasi':
        $nama_aplikasi = $_POST['nama_aplikasi'];
        $tahun_pembuatan = $_POST['tahun_pembuatan'];

        $query18 = "INSERT INTO produkaplikasi VALUES ('','$nama_aplikasi','$tahun_pembuatan','$tglposting',0)";
        $result = mysqli_query($conn, $query18);

        header("Location: produkaplikasi.php");
        break;
    case 'delete-produkaplikasi':
        $id = $_GET["id"];

        $query = "DELETE FROM produkaplikasi WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        //echo mysqli_error($conn);
        header("Location: produkaplikasi.php");
        break;
    case 'tam-produkaplikasi':
        if ($_GET['st'] == "sem") {
            $id = $_GET['id'];
            $sql2 = "UPDATE produkaplikasi SET status_show=0 WHERE id=$id";
            mysqli_query($conn, $sql2);

            //echo "SQL = ".$sql2;
        } elseif ($_GET['st'] == "tam") {
            $id = $_GET['id'];
            $sql2 = "UPDATE produkaplikasi SET status_show=1 WHERE id=$id";
            mysqli_query($conn, $sql2);
            //echo "SQL = ".$sql2;
        }
        header("Location: produkaplikasi.php");
        break;
    case 'tam-tujuan':
        if ($_GET['st'] == "sem") {
            $id = $_GET['id'];
            $sql2 = "UPDATE teks SET status_show=0 WHERE id=$id";
            mysqli_query($conn, $sql2);

            //echo "SQL = ".$sql2;
        } elseif ($_GET['st'] == "tam") {
            $id = $_GET['id'];
            $sql2 = "UPDATE teks SET status_show=1 WHERE id=$id";
            mysqli_query($conn, $sql2);
            //echo "SQL = ".$sql2;
        }
        header("Location: backend.php");
        break;
    case 'tam-pengunjung':
        $_GET['st'] == "sem";
        $id = $_GET['id'];
        $sql2 = "UPDATE tb_btamu SET status_show=0 WHERE id=$id";
        mysqli_query($conn, $sql2);
       // echo mysqli_error($conn);
        header("Location: pengunjung.php");
        break;
    case 'reply':
        $id = $_POST['id_pengunjung'];
        $balas=$_POST['balas'];

        $sql2="UPDATE tb_btamu SET `reply`='$balas' WHERE id='$id'";
        $result = mysqli_query($conn, $sql2);
        header("Location: pengunjung.php");
        break;

    case 'tam-tugaspokok':
        if ($_GET['st'] == "sem") {
            $id = $_GET['id'];
            $sql2 = "UPDATE tupoksi SET status_show=0 WHERE id=$id";
            mysqli_query($conn, $sql2);

            //echo "SQL = ".$sql2;
        } elseif ($_GET['st'] == "tam") {
            $id = $_GET['id'];
            $sql2 = "UPDATE tupoksi SET status_show=1 WHERE id=$id";
            mysqli_query($conn, $sql2);
            //echo "SQL = ".$sql2;
        }
        header("Location: tugaspokok.php");
        break;
    case 'tam-strukturorganisasi':
        if ($_GET['st'] == "sem") {
            $id = $_GET['id'];
            $sql2 = "UPDATE files SET aksi=0 WHERE id=$id";
            mysqli_query($conn, $sql2);

            //echo "SQL = ".$sql2;
        } elseif ($_GET['st'] == "tam") {
            $id = $_GET['id'];
            $sql2 = "UPDATE files SET aksi=1 WHERE id=$id";
            mysqli_query($conn, $sql2);
            //echo "SQL = ".$sql2;
        }
        header("Location: backend.php");
        break;

    case 'tam-prestasi':
        if ($_GET['st'] == "sem") {
            $id = $_GET['id'];
            $sql2 = "UPDATE prestasi SET status_show=0 WHERE id=$id";
            mysqli_query($conn, $sql2);

            //echo "SQL = ".$sql2;
        } elseif ($_GET['st'] == "tam") {
            $id = $_GET['id'];
            $sql2 = "UPDATE prestasi SET status_show=1 WHERE id=$id";
            mysqli_query($conn, $sql2);
            //echo "SQL = ".$sql2;
        }
        header("Location: prestasi.php");
        break;

    case 'upload-struktur':
        $nama_pdf = $_FILES['gambar'] ['name']; // Mendapatkan nama gambar
        $lokasi = $_FILES['gambar'] ['tmp_name'];

        // Menyiapkan tempat nemapung gambar yang diupload
        $lokasitujuan = "../assets/images";
        // Menguplaod gambar kedalam folder ./image
        $upload2 = move_uploaded_file($lokasi, $lokasitujuan . "/" . $nama_pdf);

        $query5 = mysqli_query($conn, "DELETE FROM files WHERE ket=5");
        $query6 = mysqli_query($conn, "INSERT INTO files (nama_pdf,deskripsi,ket,tgl_upload) values ('" . $nama_pdf . "','$_POST[deskripsi]','5','$tglposting')");
        //echo "Struktur Organisasi Dinas Kominfo Berhasil di Upload";
        // Merefresh halaman
        //echo "<meta http-equiv='refresh' content=3;url='upload.php'>";
        header("Location: upload.php");
        break;

    case 'upload-rencanakerja':
        // Baca lokasi file sementar dan nama file dari form (fupload)
        $lokasi_file = $_FILES['fupload']['tmp_name'];
        $nama_pdf = $_FILES['fupload']['name'];
        // Tentukan folder untuk menyimpan file
        $folder = "../assets/files/$nama_pdf";
        // Apabila file berhasil di upload
        if (move_uploaded_file($lokasi_file, "$folder")) {
            // Masukkan informasi file ke database
            $konek = mysqli_connect("localhost", "root", "", "kominfo");

            $query0 = mysqli_query($conn, "DELETE FROM files WHERE status_show=1");
            $query = "INSERT INTO files (nama_pdf, deskripsi, status_show, tgl_upload)
            VALUES('$nama_pdf', '$_POST[deskripsi]','1', '$tglposting')";

            mysqli_query($konek, $query);
            header("Location: upload.php");
        }
        break;
    case 'upload-rencanastrategis':
        // Baca lokasi file sementar dan nama file dari form (fupload)
        $lokasi_file = $_FILES['fupload']['tmp_name'];
        $nama_pdf = $_FILES['fupload']['name'];
        // Tentukan folder untuk menyimpan file
        $folder = "../assets/files/$nama_pdf";
        // Apabila file berhasil di upload
        if (move_uploaded_file($lokasi_file, "$folder")) {
            // Masukkan informasi file ke database
            $konek = mysqli_connect("localhost", "root", "", "kominfo");

            $query0 = mysqli_query($conn, "DELETE FROM files WHERE status_show=2");
            $query = "INSERT INTO files (nama_pdf, deskripsi, status_show, tgl_upload)
            VALUES('$nama_pdf', '$_POST[deskripsi]','2', '$tglposting')";

            mysqli_query($konek, $query);
            header("Location: upload.php");
        }
        break;

    case 'upload-hasilkegiatan':
        $nama_pdf = $_FILES['gambar'] ['name']; // Mendapatkan nama gambar
        $lokasi = $_FILES['gambar'] ['tmp_name'];

        // Menyiapkan tempat nemapung gambar yang diupload
        $lokasitujuan = "../assets/images";
        // Menguplaod gambar kedalam folder ./image
        $upload = move_uploaded_file($lokasi, $lokasitujuan . "/" . $nama_pdf);

        $query = mysqli_query($conn, "INSERT INTO files (nama_pdf,deskripsi,ket,tgl_upload) values ('" . $nama_pdf . "','$_POST[deskripsi]','1','$tglposting')");
        //echo "Struktur Organisasi Dinas Kominfo Berhasil di Upload";
        // Merefresh halaman
        //echo "<meta http-equiv='refresh' content=3;url='upload.php'>";
        header("Location: upload.php");
        break;

    case 'download':
        $lokasi_file = $_FILES['fupload']['tmp_name'];
        $nama_pdf = $_FILES['fupload']['name'];
        // Tentukan folder untuk menyimpan file
        $folder = "../assets/files/$nama_pdf";
        $status_show = $_POST['status'];
        // tanggal sekarang
        $tgl_upload = date("Ymd");
        // Apabila file berhasil di upload
        if (move_uploaded_file($lokasi_file, "$folder")) {
            echo "Nama File : <b>$nama_pdf</b> sukses di upload";

            // Masukkan informasi file ke database
            $konek = mysqli_connect("localhost", "root", "", "kominfo");

            $query = "INSERT INTO files (nama_pdf, deskripsi, tgl_upload,status_show)
            VALUES('$nama_pdf', '$_POST[deskripsi]','$tglposting','$status_show')";

            mysqli_query($konek, $query);
            echo mysqli_error($conn);
            //header("Location:upload.php");

        } else {
            echo "File gagal di upload";
        }
        header("Location: upload.php");

        break;
    case 'tam-download':
        if ($_GET['st'] == "sem") {
            $id = $_GET['id'];
            $sql2 = "UPDATE files SET aksi=0 WHERE id=$id";
            mysqli_query($conn, $sql2);

            //echo "SQL = ".$sql2;
        } elseif ($_GET['st'] == "tam") {
            $id = $_GET['id'];
            $sql2 = "UPDATE files SET aksi=1 WHERE id=$id";
            mysqli_query($conn, $sql2);
            //echo "SQL = ".$sql2;
        }
        header("Location: upload.php");
        break;

    case 'delete-download':
        $id = $_GET["id"];

        $query = "DELETE FROM files WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        header("Location: upload.php");
        break;
}