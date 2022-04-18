<?php

/*  1. Buka koneksi ke DBMS MySQL dan buka database mahasiswa
    2. Buat Query untuk insert data ke tabel mhs
    3. Excute query insert data 
    4. Tutup koneksi 
*/

    include_once ("koneksidb.php");
    $nim ="21104095";
    $nama = "Arbi";
    $jur = "TI_DGM";
    $pascode = "1005003";

    $sql = "INSERT INTO mhs(NIM,NAMA,JURUSAN,JENISKELAMIN,TANGGALLAHIR,PASCODE) VALUES ('$nim','$nama','$jur');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }