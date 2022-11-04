
<?php
class Buku
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
    public function dataBuku()
    {
        $sql = "SELECT 	buku.idbuku, buku.kode_buku, buku.judul_buku, buku.penulis_buku, buku.penerbit_buku, buku.tahun_penerbit, rak.nama_rak, rak.lokasi_rak
        FROM `buku` 
        INNER JOIN rak ON rak.idrak = buku.rak_idrak;";
        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }


    public function getBuku($id)
    {
        $sql = "SELECT 	buku.idbuku, buku.kode_buku, buku.judul_buku, buku.penulis_buku, buku.penerbit_buku, buku.tahun_penerbit, rak.nama_rak, rak.lokasi_rak, buku.stok
        FROM buku
        INNER JOIN rak ON rak.idrak = buku.rak_idrak WHERE idbuku = ?";

        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($databook)
    {
        $sql =  "INSERT INTO buku (kode_buku, judul_buku, penulis_buku, penerbit_buku, tahun_penerbit, stok, rak_idrak ) VALUES (?,?,?,?,?,?,?)";

        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);

        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($databook);
    }

    public function ubah($databook)
    {
        $sql =  "UPDATE buku SET kode_buku=?, judul_buku=?, penulis_buku=?, penerbit_buku=?, tahun_penerbit=?, stok=?, rak_idrak=? WHERE idbuku=?";

        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);

        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($databook);
    }

    public function hapus($id){
        $sql = "DELETE FROM buku WHERE idbuku=?";
      //menggunakan mekanisme prepare statement PDO
      $ps = $this->koneksi->prepare($sql);
      $ps->execute([$id]);
    }
}
