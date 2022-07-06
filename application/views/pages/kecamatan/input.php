<div class="content-wrapper">

<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $page ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="../">Nama Kecamatan</a></li>
						<li class="breadcrumb-item active"><?= $page ?></li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">

		<?php
		if ($isEdit) {
			form_open('kecamatan/update', '', ['id' => $data->id]);
		} else {
			form_open('kecamatan/store');
		}
		?>
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center justify-content-between">
						<h3 class="card-title">Form Data Kecamatan</h3>
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
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<a href="./" class="btn btn-secondary mr-2">Cancel</a>
						<button type="submit" name="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
			</div>
		<?php form_close() ?>

	</section>
</div>
