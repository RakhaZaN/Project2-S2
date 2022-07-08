<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
	<div class="container">
		<a href="" class="navbar-brand">
			<img src="<?= base_url('public/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
			<span class="brand-text font-weight-light">Wisata Depok</span>
		</a>

		<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse order-3" id="navbarCollapse">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?= base_url('index.php') ?>" class="nav-link">Home</a>
				</li>
				<?php if ($this->session->userdata('isLogin') && $this->session->userdata('ROLE') == 'administrator') { ?>
					<li class="nav-item">
						<a href="<?= base_url('index.php/home/admin/') ?>" class="nav-link">CMS</a>
					</li>
				<?php } ?>
			</ul>
			<ul class="navbar-nav ml-auto">
				<?php if ($this->session->userdata('isLogin')) { ?>
					<li class="nav-item dropdown user-menu">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
							<span class="d-none d-md-inline"><?= $this->session->userdata('USERNAME') ?></span>
							<small class="badge badge-secondary" style="font-size: 0.5rem;"><?= $this->session->userdata('ROLE') ?></small>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-divider"></div>
							<a href="<?= base_url('index.php/users/profile/') ?>" class="dropdown-item">
								<i class="fas fa-user mr-2"></i> Profile
							</a>
							<div class="dropdown-divider"></div>
							<a href="<?= base_url('index.php/users/logout') ?>" class="dropdown-item text-danger">
								<i class="fas fa-sign-out-alt mr-2"></i> Logout
							</a>
							<span class="dropdown-footer"></span>
						</div>
					</li>
				<?php } else { ?>
					<li>
						<a href="<?= base_url('index.php/users/login/') ?>" class="btn btn-primary">Login</a>
					</li>
				<?php } ?>
			</ul>

		</div>
	</div>
</nav>
<!-- /.navbar -->
