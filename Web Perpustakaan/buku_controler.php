<?php

include_once 'koneksi.php';
include_once 'models/Buku.php';

//step 1 tangkap request form
// $id = $_POST['idpetugas'];
$kodebuku = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$penulis = $_POST['penulis_buku'];
$penerbit = $_POST['penerbit_buku'];
$tahun = $_POST['tahun_penerbit'];
$stok = $_POST['stok'];
$idrak = $_POST['rak_idrak'];

//step 2 simpan ke array
$databook = [
    $kodebuku,
    $judul,
    $penulis,
    $penerbit,
    $tahun,
    $stok,
    $idrak
];


//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Buku();

$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($databook);
        break;

    case 'ubah':
        //tangkap hidden field idx untuk klausa where id
        $databook[] = $_POST['idx']; //untuk ? 7 
        $model->ubah($databook);
        break;

    case 'hapus':
        unset($databook);   //hapus 6 ? diatas
        //panggil method hapusdata disertai tangkap hidden field idx di pegawai.php untuk klausa where id
        $model->hapus($_POST['idx']);  //untuk ? 7 

        break;

    default:
        header('Location:index.php?hal=buku');
        break;
}

//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya 
header('Location:index.php?hal=buku');
