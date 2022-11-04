<?php
// $model = new pegawai();
// $data = $model->dataPegawai();
// include_once 'koneksi.php';
$model = new Buku();
$data_buku = $model->dataBuku();

// beri session
$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){
?>


<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Team</h2>
            <p>Check Book Categori</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/buku1.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Kategori Buku Pemrograman</h4>
                        <span>Jadilah IT Programmer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="assets/img/buku2.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Kategori Buku Psikologi</h4>
                        <span>ilmu tentang manusia</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="assets/img/buku3.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Kategori Buku Ensiklopedia</h4>
                        <span>Sejarah Ensiklopedia</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="assets/img/buku4.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Kategori Buku Kesehatan </h4>
                        <span>Kesehatan & kecantikan</span>
                    </div>
                </div>
            </div>


            <div class="col-7">
                <a class="btn btn-primary btn-sm" href="index.php?hal=buku_form" role="button" title="Tambah Buku">
                    &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                </a>
                <br> <br>
            </div>

            <table class="table table-triped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis Buku</th>
                        <th scope="col">Penerbit Buku</th>
                        <th scope="col">Tahun Penerbit</th>
                        <th scope="col">Nama Rak</th>
                        <th scope="col">Lokasi Rak</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_buku as $row) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['kode_buku'] ?></td>
                            <td><?= $row['judul_buku'] ?></td>
                            <td><?= $row['penulis_buku'] ?></td>
                            <td><?= $row['penerbit_buku'] ?></td>
                            <td><?= $row['tahun_penerbit'] ?></td>
                            <td><?= $row['nama_rak'] ?></td>
                            <td><?= $row['lokasi_rak'] ?></td>



                            <form action="buku_controler.php" method="post" role="form">
                                <td>
                                
                                    <a href="index.php?hal=buku_form&idedit=<?= $row['idbuku'] ?>">
                                        <button type="button" class="btn btn-warning btn-sm" title="Ubah Buku">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                    </a>

                                    <?php
                                    if ($sesi['role'] != 'Staff') {
                                    ?>
                                        <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data akan dihapus?')" title="Hapus Buku">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                        <input type="hidden" name="idx" value="<?= $row['idbuku'] ?>">

                                    <?php }  ?>
                                </td>
                            </form>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>

            </table>
        </div>
</section>


<?php 
}
else{
  echo 'Anda Tidak mempunyai akses ';
  ?>
   
<?php }?>
<!-- End Team Section -->