<?php
$obj_rak = new Rak();
$data_rak = $obj_rak->dataRak();
$obj_buku = new Buku();


//==================Proses edit data==================== 
// tangkap request idedit di url (setelah klik tombol edit) 
$idedit = $_REQUEST['idedit'];
$rak = !empty($idedit) ?  $obj_rak->getRak($idedit) : array();
// 
?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Form Input</h2>
            <p>Input Rak</p>
        </div>


        <div class="row mt-5">
            <!-- <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>
                </div>
            </div> -->

            <div class="col-lg-8 mt-5 mt-lg-0">
                <form action="rak_controler.php" method="post" role="form" class="php-email-form" margin="auto">
                    <div class="row">
                   
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Nama Rak</label>
                            <input type="text" name="nama_rak" class="form-control" id="id" placeholder="Nama Rak" value="<?= $rak['nama_rak'] ?>" required />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Lokasi Rak</label>
                            <input type="text" name="lokasi_rak" class="form-control" id="id" placeholder="Lokasi Rak" value="<?= $rak['lokasi_rak'] ?>" required />
                        </div>
                    </div>


                    <div class="text-center">
                        <?php
                        //---------modus entri data baru, form dalam keadaan kosong-------
                        if (empty($idedit)) {
                        ?>
                            <button type="submit" name='proses' value='simpan'>Simpan</button>

                        <?php
                        }
                        //---------modus entri data lama, form terisi data lama-------
                        else {
                        ?>
                            <button type="submit" name='proses' value='ubah'>Ubah</button>
                            <!-- hidden field untuk klausa where id=? -->
                            <input type="hidden" name="idx" value="<?= $idedit ?>">
                        <?php } ?>
                        <button type="submit" name='proses' value='batal'>Batal</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->