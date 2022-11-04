
<?php
class Pegawai
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
    public function dataPegawai()
    {
        $sql = "SELECT idpetugas, nip, nama_petugas, jabatan_petugas,no_telp_petugas, alamat_petugas FROM petugas";
        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPegawai($id)
    {
        // $sql = "SELECT idpetugas, nip, nama_petugas, jabatan_petugas, no_telp_petugas,alamat_petugas, foto FROM petugas WHERE idpetugas = ?";
        $sql = "SELECT idpetugas, nip, nama_petugas, jabatan_petugas, no_telp_petugas,alamat_petugas, foto FROM petugas WHERE idpetugas = ?";
        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = " INSERT INTO  petugas (nip, nama_petugas, jabatan_petugas, no_telp_petugas, alamat_petugas, Foto) VALUES
        (?,?,?,?,?,?)";

        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);

        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = " UPDATE petugas SET nip=?, nama_petugas=?, jabatan_petugas=?, no_telp_petugas=?, alamat_petugas=?, Foto=?
        WHERE idpetugas=?";

        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);


        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM petugas WHERE idpetugas=?";
      //menggunakan mekanisme prepare statement PDO
      $ps = $this->koneksi->prepare($sql);
      $ps->execute([$id]);
    }
}
