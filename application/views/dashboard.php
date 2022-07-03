<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $page ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"><?= $page ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Content -->
		<div class="row">
			<div class="col-3">
				<div class="card overflow-hidden">
					<img src="<?= base_url('public/img/photo1.png') ?>" alt="thumbnail" class="card-img-top">
					<div class="card-img-overlay text-right mr-n1 mt-n2">
						<small class="badge badge-info">Kolam Renang</small>
					</div>
					<div class="card-body d-flex flex-column">
						<h3 class="card-title font-weight-bold">Water Park Ceria</h3>
						<small><b class="text-warning">4.2</b> / 5.0</small>
						<span class="text-muted">Rp <span class="h3">40.000</span> / org</span>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center">
							<a href="#" style="font-size: 0.8rem;" class="text-primary stretched-link">View Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.content -->

	</section>
</div>
<!-- /.content-wrapper -->
