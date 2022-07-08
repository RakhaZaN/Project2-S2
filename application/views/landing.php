<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-5">

	<!-- Main content -->
	<div class="content">
		<div class="container">
			<!-- Content -->
			<div class="row">
				<?php foreach ($list_tempat_wisata as $tw) { ?>
					<div class="col-md-3 col-sm-12">
						<div class="card overflow-hidden">
							<img src="<?= base_url('uploads/tempat-wisata/'.$tw->foto1) ?>" alt="thumbnail" class="card-img-top">
							<div class="card-img-overlay text-right mr-n1 mt-n2">
								<small class="badge badge-info"><?= $tw->jenis ?></small>
							</div>
							<div class="card-body d-flex flex-column">
								<h3 class="card-title font-weight-bold"><?= $tw->nama ?></h3>
								<small class="mb-2"><?= $tw->kecamatan ?></small>
								<small class="mb-2"><b class="text-warning"><?= $tw->skor_rating ?></b> / 5.0</small>
								<span class="text-muted">Rp <span class="h3"><?= $tw->harga_tiket ?></span> / org</span>
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center">
									<a href="<?= base_url('TempatWisata/show/' . $tw->id) ?>" style="font-size: 0.8rem;" class="text-primary stretched-link">View Detail</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<!-- /.content -->
		</div>
	</div>
</div>
<!-- /.content-wrapper -->
