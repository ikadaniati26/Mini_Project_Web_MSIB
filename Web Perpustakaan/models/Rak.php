
<?php
class Rak
{
    // include_once 'koneksi.php';
    //member1 variabel
    private $koneksi;
    //member2 konstruktor untuk koneksi database

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    //member3 method2 CRUD
    public function dataRak()
    {
        $sql = " SELECT idrak, nama_rak, lokasi_rak FROM rak ";
        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }


    public function getRak($id)
    {
        $sql = "SELECT * FROM rak WHERE idrak = ?";

        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($datarak)
    {
        $sql = "INSERT INTO rak (nama_rak, lokasi_rak) VALUES (?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($datarak);
    }

    public function ubah($datarak)
    {
        $sql = "UPDATE rak SET nama_rak = ?, lokasi_rak = ? WHERE idrak = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($datarak);
    }


    public function hapus($id)
    {
        $sql = "DELETE FROM rak WHERE idrak= ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
