<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body>
<!-- TOPBAR -->
<?php $this->load->view("admin/_partials/topbar.php") ?>

<div class="jumbotron text-center">
	<img src="<?php echo base_url() ?>assets/icon.png" alt="logo" style="width:50px;">
    <h1>About Me</h1>
    <p>This Page Containing Inforation About CEO !</p>
</div>

<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">NAMA : GALIH AJI PAMBUDI</h5>
					<p>Mahasiswa Teknik Elektro Fakultas Teknik Universitas Sultan Ageng Tirtayasa</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">NIM : 3332180058</h5>
					<p>Mahasiswa Teknik Elektro Angkatan 2018 yang memilih Konsentrasi Telekomunikasi dan Komputer</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Semester : 6</h5>
					<p>Sudah 3 tahun sejak ia diterima menjadi mahasiswa aktif di Universitas Sultan Ageng Tirtayasa</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Mata Kuliah : Pemrograman Web</h5>
					<p>Mata Kuliah ini adalah salah satu Mata kuliah Wajib KTK</p>
				</div>
			</div>
		</div>
	</div>

<div class="jumbotron text-center" style="margin-bottom:0">
	<span>Copyright  <?php echo SITE_NAME ." ". Date('Y') ?></span>
</div>
</body>
</html>