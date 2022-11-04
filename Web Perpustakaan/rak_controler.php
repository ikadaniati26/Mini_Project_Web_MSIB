<?php

include_once 'koneksi.php';
include_once 'models/Rak.php';

//step 1 tangkap request form
// $id = $_POST['idpetugas'];

$nama = $_POST['nama_rak'];
$lokasi = $_POST['lokasi_rak'];

//step 2 simpan ke array
$datarak = [
    // $id,
    $nama, // ?2
    $lokasi, //?3
];


//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Rak();

$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($datarak);
        break;

    case 'ubah':
        //tangkap hidden field idx untuk klausa where id
        $datarak[] = $_POST['idx']; //untuk ? 7 
        $model->ubah($datarak);
        break;

    case 'hapus':
        unset($datarak);   //hapus 6 ? diatas
        //panggil method hapusdata disertai tangkap hidden field idx di pegawai.php untuk klausa where id
        $model->hapus($_POST['idx']);  //untuk ? 7 

        break;

    default:
        header('Location:index.php?hal=rak');
        break;
}

//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya 
header('Location:index.php?hal=rak');
