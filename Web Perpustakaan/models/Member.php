
<?php
class Member
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
    public function dataMember()
    {
        $sql = "SELECT * FROM member ORDER BY id DESC";
        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getMember($id)
    {
        // $sql = "SELECT idpetugas, nip, nama_petugas, jabatan_petugas, no_telp_petugas,alamat_petugas, foto FROM petugas WHERE idpetugas = ?";
        $sql = "SELECT *  FROM member WHERE id= ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = " INSERT INTO  member (fullname, email, username, password, role, foto) VALUES
        (?,?,?,SHA1(MD5(SHA1(?))),?,?)";

        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);

        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = " UPDATE member SET fullname=?, email=?, username=?, password=SHA1(MD5(SHA1(?))), role=?, foto=?
        WHERE id=?";

        //pakai query
        //$pegawaiku = $dbh->query($sql);
        //$data_pegawai = $dbh->query($sql);


        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM member WHERE idpetugas=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

    public function cekLogin($data)
    {
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(SHA1(?)))";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}
