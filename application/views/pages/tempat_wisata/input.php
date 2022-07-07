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
						<li class="breadcrumb-item"><a href="../">Tempat Wisata</a></li>
						<li class="breadcrumb-item active"><?= $page ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Content -->
		<?php
		if ($isEdit) {
			echo form_open_multipart('tempatwisata/update', '', ['id' => $data->id]);
		} else {
			echo form_open_multipart('tempatwisata/store');
		}
		?>
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center justify-content-between">
						<h3 class="card-title">Form Data Tempat Wisata</h3>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inNama" class="col-form-label">Nama</label>
								<input type="text" name="inNama" id="inNama" class="form-control" value="<?= $isEdit ? $data->nama:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inJenis" class="col-form-label">Jenis</label>
								<select name="inJenis" id="inJenis" class="form-control" required>
									<option value="" disabled selected>-- Select Jenis Wisata --</option>
									<?php foreach($list_jenis_wisata as $jw) { ?>
										<option value="<?= $jw->id ?>"><?= $jw->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inKecamatan" class="col-form-label">Kecamatan</label>
								<select name="inKecamatan" id="inKecamatan" class="form-control">
								<option value="" disabled selected>-- Select Kecamatan --</option>
									<?php foreach($list_kecamatan as $k) { ?>
										<option value="<?= $k->id ?>"><?= $k->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inAlamat" class="col-form-label">Alamat data</label>
								<input type="text" name="inAlamat" id="inAlamat" class="form-control" value="<?= $isEdit ? $data->alamat:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inFasilitas" class="col-form-label">Fasilitas</label>
								<input type="text" name="inFasilitas" id="inFasilitas" class="form-control" value="<?= $isEdit ? $data->fasilitas:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inHarga" class="col-form-label">Harga Tiket</label>
								<input type="text" name="inHarga" id="inHarga" class="form-control" value="<?= $isEdit ? $data->harga_tiket:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inRating" class="col-form-label">Rating</label>
								<input type="text" name="inRating" id="inRating" class="form-control" value="<?= $isEdit ? $data->skor_rating:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inFoto1" class="col-form-label">Foto 1</label>
								<input type="file" name="inFoto[]" id="inFoto1" class="form-control" value="<?= $isEdit ? $data->foto1:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inFoto2" class="col-form-label">Foto 2</label>
								<input type="file" name="inFoto[]" id="inFoto2" class="form-control" value="<?= $isEdit ? $data->foto2:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inFoto3" class="col-form-label">Foto 3</label>
								<input type="file" name="inFoto[]" id="inFoto3" class="form-control" value="<?= $isEdit ? $data->foto3:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inWebsite" class="col-form-label">Website</label>
								<input type="text" name="inWebsite" id="inWebsite" class="form-control" value="<?= $isEdit ? $data->website:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inLatlong" class="col-form-label">Latitude Longitude</label>
								<input type="text" name="inLatlong" id="inLatlong" class="form-control" value="<?= $isEdit ? $data->latlong:'' ?>" required>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<a href="./" class="btn btn-secondary mr-2">Cancel</a>
						<button type="submit" name="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
			</div>
		<?= form_close() ?>
		<!-- /.content -->

	</section>
</div>
<!-- /.content-wrapper -->
