<?php
/*
Untuk membuat database
1. koneksi ke server mysql
2. buat sql untuk menciptakan database
    CREATE DATABASE namadb;
3. execute/jalankan instuksi pembuatan database
4. cek status
*/
include_once("koneksidb.php");
$sql = "CREATE DATABASE mahasiswa;";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan database sukses";
}else{
    echo "Pembuatan database bermasalah";
}
mysqli_close($cnn);
