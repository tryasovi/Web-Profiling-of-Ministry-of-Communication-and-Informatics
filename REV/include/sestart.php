<?php
/**
 * Created by PhpStorm.
 * User: Donny Eko Saputro
 * Date: 17-Oct-18
 * Time: 7:57 PM
 */
    include "koneksi.php";
    session_start();
    if(!isset($_SESSION["user1"])){
        header("Location: index.html");
    }
    $user=$_SESSION["user1"];
?>