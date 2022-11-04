<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Member.php';

//step 1 tangkap request form
// $id = $_POST['idpetugas'];
$username = $_POST['username'];
$password = $_POST['password'];
//step 2 simpan ke array
$data = [
    // $id,
    $username,
    $password
];


//step 3 otentikasi user

$model = new Member();
$rs = $model->cekLogin($data);

if(!empty($rs)){//sukses login
    $_SESSION['MEMBER'] = $rs;
    //diarahkan ke suatu halaman
    header('Location:index.php?hal=home');
}
else{
    echo '<script> alert("User/Password Anda Salah!!!");history.go(-1);</script>';
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya 
header('Location:index.php?hal=pegawai');

