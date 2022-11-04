<?php
//tangkap request id dari klik tombol aksi
$id = $_REQUEST['idpetugas'];
//ciptakan object dari class Pegawai
$model = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai
$pegawai = $model->getPegawai($id);
?>


<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Petugas Details</h3>
				</div>
				<ol class="breadcrumb justify-content-center p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
				  <li class="breadcrumb-item active">Pegawai Details</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<section class="section single-speaker">
	<div class="container">
		<div class="block">
			<div class="row">
				<div class="col-lg-3 col-md-6 align-self-md-center">
					<div class="image-block">
						<img src="assets/img/pegawai/<?= $pegawai['foto']?>" class="img-fluid" alt="speaker">
					</div>
				</div>
				<div class="col-lg-7 col-md-6 align-self-center">
					<div class="content-block">
						<div class="name">
							<h3><?= $pegawai['nama_petugas']?></h3>
						</div>
						<div class="profession">
							<p><?= $pegawai['jabatan_petugas']?></p>
						</div>
						<div class="alert alert-primary" role="alert">
						<ul class="m-0 p-0">
							<li>No Telp: <?= $pegawai['no_telp_petugas']?></li>
							<li>Alamat : <?= $pegawai['alamat_petugas']?></li>
							
						</ul>
						</div>
						<p align="right">
								<a href="index.php?hal=pegawai" type="button" class="btn btn-primary btn-lg" title="kembali">
								<i class="fa-solid fa-reply-all"></i>
								</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	
	</div>

	
</section>
