<?php
$obj_rak = new Rak();
$data_rak= $obj_rak->dataRak();

$obj_buku = new Buku();
$data_buku = $obj_buku->dataBuku();

//==================Proses edit data==================== 
// tangkap request idedit di url (setelah klik tombol edit) 
$idedit = $_REQUEST['idedit'];
$buk = !empty($idedit) ?  $obj_buku->getBuku($idedit) : array();
 ?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" >
    <div class="container" data-aos="fade-up" >
        <div class="section-title">
            <h2>Form Input</h2>
            <p>Input Buku</p>
        </div>


        <div class="row mt-5" >
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

            <div class="col-lg-8 mt-5 mt-lg-0" >
                <form action="buku_controler.php" method="post" role="form" class="php-email-form" margin="auto" >
                    <div class="row">
                        <!-- <div class="col-md-6 form-group">
              <input type="text" name="idpetugas" class="form-control" id="idpetugas" placeholder="id" required />
            </div> -->
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Kode Buku</label>
                            <input type="text" name="kode_buku" class="form-control" id="kode-buku" placeholder="Kode Buku" value="<?= $buk['kode_buku'] ?>" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="judul buku" value="<?= $buk['judul_buku'] ?>" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Penulis Buku</label>
                            <input type="text" name="penulis_buku" class="form-control" id="penulis_buku" placeholder="penulis buku"
                             value="<?= $buk['penulis_buku'] ?>" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Penerbit</label>
                            <input type="text" name="penerbit_buku" class="form-control" id="penerbit" placeholder="Penerbit" value="<?= $buk['penerbit_buku'] ?>" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Tahun Terbit</label>
                            <input type="text" name="tahun_penerbit" class="form-control" id="tahun_penerbit" placeholder="tahun_penerbit" 
                            value="<?= $buk['tahun_penerbit'] ?>" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok" placeholder="stok" 
                            value="<?= $buk['stok'] ?>" required />
                        </div>


                        <div class="form-group col-md-6">
                            <label for="name" >Nama Rak</label>
                            <select class="form-select" aria-label="Default select example" name="rak_idrak">
                                <option selected>----Pilih Rak----</option>
                                <?php
                                foreach ($data_rak as $rak) {
                                    $sel1 = $buk['idbuku'] == $rak['idrak'] ? 'selected': '';
                                ?>
                                    <option value="<?= $rak['idrak'] ?>"<?=$sel1?>><?= $rak['nama_rak'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
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