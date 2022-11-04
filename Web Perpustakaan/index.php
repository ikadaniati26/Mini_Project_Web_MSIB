<?php
session_start();//memulai session


include_once 'koneksi.php';

include_once 'models/Pegawai.php';
include_once 'models/Buku.php';
include_once 'models/Rak.php';
include_once 'models/Member.php';

include_once 'navigasi.php';

include_once 'body.php';

error_reporting(0);
$hal = $_REQUEST['hal'];
if (!empty($hal)) {
    include_once $hal . '.php';
} else {
    include_once 'home.php';
}


// include_once 'home.php';


// include_once 'pegawai.php';


include_once 'footer.php';