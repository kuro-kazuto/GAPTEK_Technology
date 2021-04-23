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
    <h1>Faq & Help</h1>
    <p>This Page Containing Inforation About Frequently Asked Question And Help For This Site </p>
</div>

<div class="container">
	<div class="row">
        <div>
			<div>
				<h5 class="h5">
                Berikut ini adalah beberapa pertanyaan yang paling sering ditanyakan 
                oleh beberapa orang yang sebenarnya sepele, namun tidak mengerti jawabannya
                </h5>
			</div>
		</div>
		<div class="col-md-12 my-2 card">
			<div class="card-body">
                <h5 class="h5"><font color="red">Q1 = Kapan Terakhir Saya Mandi ?</font><br></h5>
				<p><font color="green">A1 = Mungkin kemarin ataupun lusa. Coba anda teliti kembali melalui bau tubuh anda</font></p>
			</div>
		</div>
		<div class="col-md-12 my-2 card">
			<div class="card-body">
                <h5 class="h5"><font color="red">Q2 = Apakah Bumi Itu Bulat ?</font><br></h5>
				<p><font color="green">A2 = Anda jangan terhasut oleh teori konspirasi bumi datar, tetaplah konsisten dengan komitmen anda</font></p>
			</div>
		</div>
		<div class="col-md-12 my-2 card">
			<div class="card-body">
                <h5 class="h5"><font color="red">Q3 = Apakah Manusia Adalah Benda ?</font><br></h5>
				<p><font color="green">A3 = Betul sekali, manusia digolongkan kedalam kategori benda hidup.</font></p>
			</div>
		</div>
		<div class="col-md-12 my-2 card">
			<div class="card-body">
                <h5 class="h5"><font color="red">Q4 = Saya Siapa ?</font><br></h5>
				<p><font color="green">A4 = Coba anda ingat kembali, jika tidak kami menyarankan anda untuk pergi ke dokter spesialis pysikologi.</font></p>
			</div>
		</div>
		<div class="col-md-12 my-2 card">
			<div class="card-body">
                <h5 class="h5"><font color="red">Q5 = Apakah Saya Manusia?</font><br></h5>
				<p><font color="green">A5 = Jika anda melihat diri anda transparan, maka sudah dipastikan anda adalah hantu.</font></p>
			</div>
		</div>
	</div>
</div>

<div class="container">
    <div class="col-md-12 my-2 card">
		<div class="card-body">
			<h5 class="h5"><font color="red">*</font> Tuliskan Keluhan Anda Disini</h5>
		</div>
	</div>
    <div class="row">
        <div class="col-md-6">
            
        <form action="" class="form">

        <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control">
        </div>

        <div class="form-group">
             <label for="email">Message</label>
             <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
            
        <div class="form-group">
            <input type="submit" value="Kirim" class="btn btn-danger w-100">
        </div>

        </form>

        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
	<span>Copyright  <?php echo SITE_NAME ." ". Date('Y') ?></span>
</div>
</body>
</html>