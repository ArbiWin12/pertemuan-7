<?php

/*  1. Buka koneksi ke DBMS MySQL dan buka database mahasiswa
    2. Buat Query untuk insert data ke tabel mhs
    3. Excute query insert data 
    4. Tutup koneksi 
*/

if (isset($POST['txNIM'])){
    include_once("koneksidb.php");
    $nim=$POST['txNIM'];
    $nama=$POST['tXNAMA'];
    $jur=$POST['txJUR'];
    $passcode =$POST['txPASSSCODE'];
    $sql = "INSERT INTO mhs(NIM,NAMA,JURUSAN,PASSCODE) 
    values ('$nim','$nama','$jur','$passcode')";

    $hsl = mysqli_query ($cnn,$sql);
    if ($hsl){
        echo "Insert Data tabel mhs sukses <br>";
    
    }else{
        echo "Insert Data Gagal  <br>";
    }

}else{
    header ("location: mhsinssertabel.php");


}