<nav class="navbar navbar-expand-md bg-danger navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="<?php echo site_url('home') ?>">
        <img src="<?php echo base_url() ?>assets/icon.png" alt="logo" style="width:50px;">
    </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
			<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
				<a class="nav-link" href="<?php echo site_url('admin') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
            <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
				<a class="nav-link" href="<?php echo site_url('help') ?>">
					<i class="fas fa-fw fa-question-circle"></i>
					<span>Faq & Help</span>
				</a>
			</li>
			<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
				<a class="nav-link" href="<?php echo site_url('about') ?>">
					<i class="fas fa-fw fa-info-circle"></i>
					<span>About Me</span>
				</a>
			</li>
        </ul>
    </div>
</nav>