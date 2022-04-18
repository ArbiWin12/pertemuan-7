<?php
/*
1. buat koneksi ke server
2. buat skript sql untuk menciptakan tabel
    tabel : mhs
    feild : NIM Char, NAMA STRING, JURUSAN STRING, PASSCODE STRING
3. execute script
4. cek status
*/
include_once("koneksidb.php");
$sql = "CREATE TABLE mhs(
    NIM VARCHAR (8) PRIMARY KEY,
    NAMA VARCHAR (50),
    JURUSAN VARCHAR (20),
    PASSCODE VARCHAR (10)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Tabel Berhasil";
}else{
    echo "Tabel Gagal";
}