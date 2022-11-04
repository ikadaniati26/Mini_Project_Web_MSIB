<?php
$model = new Rak();
$data_rak = $model->dataRak();
?>



<section id="team" class="team">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Rak</h2>
            <p>CHECK KODE RAK</p>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/rak.webp" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <!-- <h4>Kategori Buku Pemrograman</h4>
                        <span>Jadilah IT Programmer</span> -->
                    </div>
                </div>
            </div>

            <div class="col-7">
                <a class="btn btn-primary btn-sm" href="index.php?hal=rak_form" role="button" title="Tambah rak">
                    &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                </a>
                <br> <br>
            </div>


            <table class="table table-triped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Rak</th>
                        <th scope="col">Lokasi Rak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_rak as $row) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['idrak'] ?></td>
                            <td><?= $row['nama_rak'] ?></td>
                            <td><?= $row['lokasi_rak'] ?></td>




                            <form action="rak_controler.php" method="post" role="form">
                                <td>
                                    <!-- <a href="index.php?hal=pegawai_detail&idpetugas=<?= $row['idpetugas'] ?>">
                                        <button type="button" class="btn btn-info btn-sm " title="Detail Pegawai">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </a> -->

                                    <a href="index.php?hal=rak_form&idedit=<?= $row['idrak'] ?>">
                                        <button type="button" class="btn btn-warning btn-sm" title="Ubah Buku">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                    </a>

                                    <?php
                                    if ($sesi['role'] != 'Staff') {
                                    ?>
                                        <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data akan dihapus?')" title="Hapus Pegawai">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                        <input type="hidden" name="idx" value="<?= $row['idrak'] ?>">

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
               