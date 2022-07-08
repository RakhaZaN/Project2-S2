<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-5">
	<!-- Main content -->
	<section class="content">
		<div class="container">
			<!-- Content -->
			<a href="<?= base_url() ?>" class="btn btn-secondary btn-sm has-icon mb-3"><i class="fas fa-chevron-left mr-2"></i> Back</a>
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
										<img src="<?= base_url('uploads/tempat-wisata/' . $data->foto1) ?>" class="d-block w-100 rounded" alt="...">
									</div>
									<div class="carousel-item" data-interval="1500">
										<img src="<?= base_url('uploads/tempat-wisata/' . $data->foto2) ?>" class="d-block w-100 rounded" alt="...">
									</div>
									<div class="carousel-item" data-interval="1500">
										<img src="<?= base_url('uploads/tempat-wisata/' . $data->foto3) ?>" class="d-block w-100 rounded" alt="...">
									</div>
								</div>
							</div>
						</div>
						<div class=" col-lg-6 col-md-8 col-12">
							<p><small class="badge badge-info">Kolam Renang</small></p>

							<label class="col-form-label">Harga Tiket</label>
							<p>Rp <span class="display-4"><?= $data->harga_tiket ?></span> / org</p>

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

			<!-- komentar -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Komentar</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<?php if ($this->session->has_userdata('isLogin') && $this->session->userdata('isLogin')) { ?>
								<?= form_open('komentar/store', '', [
									'user_id' => $this->session->userdata('USER')->id,
									'wisata_id' => $data->id,
									'back_url' => current_url(),
								]) ?>
								<p class="card-text mb-3">Tinggalkan pesan dan kesanmu</p>
								<div class="form-group">
									<select name="nilai_rating" id="nilai_rating" class="form-control">
										<option disabled selected>-- Select Rating --</option>
										<?php foreach($nilai as $n) { ?>
											<option value="<?= $n->id ?>"><?= $n->nama ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<textarea name="komentar" id="komentar" rows="3" class="form-control" placeholder="Tulis komentar..."></textarea>
								</div>
								<button type="submit" class="btn btn-success">Kirim</button>
								<?= form_close() ?>
							<?php } else { ?>
								<p class="card-text">Kamu harus login untuk bisa meninggalkan komentar.</p>
								<a href="<?= base_url('users/login') ?>" class="btn btn-primary btn-sm">Login</a>
							<?php } ?>
						</div>
						<div class="col">
							<div class="overflow-auto" style="max-height: 16em;">
								<?php foreach ($komentar as $kom) { ?>
									<div class="row mb-3">
										<div class="col">
											<h6 class="mb-n1"><?= $kom->username ?></h6>
											<small class="text-muted"><?= $kom->nilai ?></small>
											<p class="card-text"><small><?= $kom->isi ?></small></p>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- /.content -->
		</div>
	</section>
</div>
<!-- /.content-wrapper -->
