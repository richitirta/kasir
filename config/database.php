<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="u773954289_isco";

    $kon = mysqli_connect($host,$user,$password,$db);
    if (!$kon){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>