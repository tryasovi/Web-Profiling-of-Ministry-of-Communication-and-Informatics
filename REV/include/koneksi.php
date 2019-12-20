<?php  
	                    $server="localhost"; //lokasi server
						$username="root";  // username mysql
						$password=""; // jika mysql anda tidak diberi password silahkan dikosongkan
						$namadb="kominfo"; // Nama database

						$conn=mysqli_connect($server,$username,$password,$namadb);
						if (!$conn) {
							die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
						}
?>