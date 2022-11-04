<?php
$model = new Pegawai();
$data_pegawai = $model->dataPegawai();


//==================Proses edit data==================== 
// tangkap request idedit di url (setelah klik tombol edit) 
$idedit = $_REQUEST['idedit'];
$peg = !empty($idedit) ?  $model->getPegawai($idedit) : array();
?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Form Input</h2>
      <p>Input Pegawai</p>
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
        <form action="pegawai_controler.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <!-- <div class="col-md-6 form-group">
              <input type="text" name="idpetugas" class="form-control" id="idpetugas" placeholder="id" required />
            </div> -->
            <div class="col-md-6 form-group">
                <label for="exampleFormControlTextarea1" class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" id="nip" placeholder="Nip" 
                value ="<?= $peg['nip']?>" required />
            </div>
            <div class="col-md-6 form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama_petugas" placeholder="Nama" 
                value ="<?= $peg['nama_petugas']?>" required />
            </div>
            <div class="col-md-6 form-group">
              <label for="exampleFormControlTextarea1" class="form-label">Jabatan</label>
              <input type="text" name="jabatan" class="form-control" id="jabatan_petugas" placeholder="Jabatan" 
              value ="<?= $peg['jabatan_petugas']?>" required />
            </div>
            <div class="col-md-6 form-group">
              <label for="exampleFormControlTextarea1" class="form-label">No.Telp</label>
              <input type="text" name="notelp" class="form-control" id="no_telp__petugas" placeholder="No.Telp"
              value ="<?= $peg['no_telp_petugas']?>"  required />
            </div>
            <div class="col-md-6 form-group">
              <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" 
              value ="<?= $peg['alamat_petugas']?>" required />
            </div>
            <div class="col-md-6 form-group">
              <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
              <input type="text" name="foto" class="form-control" id="foto" placeholder="Foto" 
              value ="<?= $peg['foto']?>" required />
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