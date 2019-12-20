<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script src="../assets/lib/jquery/dist/jquery.js"></script>
<script src="dist/js/sweetalert2.all.min.js"></script>
<script>
    <?php
    /**
     * Created by PhpStorm.
     * User: Donny Eko Saputro
     * Date: 10-Oct-18
     * Time: 4:20 PM
     */

    include("../include/koneksi.php");
    session_start();

    if($_POST['user'] != null && $_POST['pass'] != null)
    {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    {
    $sql = "SELECT * FROM ipg_auth WHERE username = '$user'";
    $result = mysqli_query($conn, $sql);

    if($result) {
    $row = mysqli_fetch_row($result);
    if($row[2] == $pass){
        $_SESSION['user1'] = $user;
        header("Location: backend.php");
        die();
    } else {
    ?>
    $(function () {
        swal({
            title: "Login gagal",
            text: "Username atau password salah",
            type: "warning"
        }).then((value)=>{
            window.location.href = "index.html"
        });
    });
    <?
    }
    }
    }
    }
    else {
        echo "Silahkan isi username dan password anda!<br>";
    }

    ?>
</script>

</body>
</html>

