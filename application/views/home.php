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
    <h1><?php echo SITE_NAME ?></h1>
    <p>This Is My First Website, Please Don't Bully Me!</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="#"><img src="<?php echo base_url() ?>assets/img/background-1.jpg" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>What's GΛPTEK?</h3>
                    <p>
					GΛPTEK adalah sebuah localweb sederhana yang dibuat sebagai syarat ujian tengah semester
					Mata Kuliah Pemrograman Web. Web ini dibuat oleh Galih Aji Pambudi Mahasiswa Teknik 
					Elektro 2018 FT UNTIRTA. 
					</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="#"><img src="<?php echo base_url() ?>assets/img/background-4.jpg" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3><a href="#" style="text-decoration:none;color: black;">What's GΛPTEK?</a> </h3>
                    <p>
					Singkatan GΛPTEK sendiri adalah Galih Aji Pambudi Teknik, Singkatan ini tercipta dari
					ide aneh yang muncul saat ia masih OSPEK diKampusnya.
					</p>
                    <p><a href="#" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="#"><img src="<?php echo base_url() ?>assets/img/background-2.jpg" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>What's GΛPTEK?</h3>
                    <p>
					Kini ia mulai mendalami ilmu dibidang Android Developer dan Android Operating System
					yang berawal dari hobinya melakukan oprek terhadap android sejak SMP.
					</p>
                    <p><a href="#" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="#"><img src="<?php echo base_url() ?>assets/img/background-3.jpg"  width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>What's GΛPTEK?</h3>
                    <p>
					Dan sekarang, ia mulai mencoba belajar web programming dari awal dan cukup kesulitan
					karena web programing masih asing dimatanya, karena ia terbiasa dengan bahasa Java.
					</p>
                    <p><a href="#" class="btn btn-light btn-block " role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
	<span>Copyright  <?php echo SITE_NAME ." ". Date('Y') ?></span>
</div>
</body>
</html>