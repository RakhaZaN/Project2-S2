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
		<a href="../" class="btn btn-secondary btn-sm has-icon mb-3"><i class="fas fa-chevron-left mr-2"></i> Back</a>
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center justify-content-between">
					<h3 class="card-title"><?= $data->nama ?></h3>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 col-md-4 col-12">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active" data-interval="1500">
									<img src="<?= base_url('public/img/photo1.png') ?>" class="d-block w-100 rounded" alt="...">
								</div>
								<div class="carousel-item" data-interval="1500">
									<img src="<?= base_url('public/img/photo2.png') ?>" class="d-block w-100 rounded" alt="...">
								</div>
								<div class="carousel-item" data-interval="1500">
									<img src="<?= base_url('public/img/photo3.jpg') ?>" class="d-block w-100 rounded" alt="...">
								</div>
							</div>
						</div>
					</div>
					<div class=" col-lg-6 col-md-8 col-12">
						<p><small class="badge badge-info">Kolam Renang</small></p>

						<label class="col-form-label">Harga Tiket</label>
						<p>Rp  <span class="display-4"><?= $data->harga_tiket ?></span> / org</p>
						
						<label class="col-form-label">Rating</label>
						<p class=""><b class="text-warning"><?= $data->skor_rating ?></b> / 5</p>

						<label class="col-form-label">Fasilitas</label>
						<p class=""><?= $data->fasilitas ?></p>

						<label class="col-form-label">Kecamatan</label>
						<p class="">Depok</p>
						
						<label class="col-form-label">Alamat</label>
						<p class=""><?= $data->alamat ?></p>
						
						<label class="col-form-label">Website</label>
						<a href="<?= $data->website ?>" class="d-block"><?= $data->website ?></a>
						
					</div>
					<div class="col-12">
						<label class="col-form-label mt-2">Maps</label>
						<iframe class="d-block w-100" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?= $data->latlong ?>&hl=id&z=14&amp;output=embed" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- /.content -->

	</section>
</div>
<!-- /.content-wrapper -->
