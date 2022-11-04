<?php

include_once 'koneksi.php';
include_once 'models/Pegawai.php';

//step 1 tangkap request form
// $id = $_POST['idpetugas'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan= $_POST['jabatan'];
$no_telp = $_POST['notelp'];
$alamat_petugas = $_POST['alamat'];
$foto = $_POST['foto'];

//step 2 simpan ke array
$data = [
    // $id,
    $nip, // ? 1
    $nama, // ?2
    $jabatan, //?3
    $no_telp, //?4
    $alamat_petugas, //?5
    $foto //?6
];


//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Pegawai();

$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;

    case 'ubah':
        //tangkap hidden field idx untuk klausa where id
        $data[] = $_POST['idx']; //untuk ? 7 
        $model->ubah($data);
        break;

    case 'hapus':
        unset($data);   //hapus 6 ? diatas
        //panggil method hapusdata disertai tangkap hidden field idx di pegawai.php untuk klausa where id
        $model->hapus($_POST['idx']);  //untuk ? 7 
        
        break;

    default:
        header('Location:index.php?hal=pegawai');
        break;
}

//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya 
header('Location:index.php?hal=pegawai');

