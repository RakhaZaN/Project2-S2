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
						<li class="breadcrumb-item"><a href="../">Users</a></li>
						<li class="breadcrumb-item active"><?= $page ?></li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">

		<?php
		if ($isEdit) {
			echo form_open('Users/update', '', ['id' => $data->id]);
		} else {
			echo form_open('Users/store');
		}
		?>
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center justify-content-between">
						<h3 class="card-title">Form Data User</h3>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inUsername" class="col-form-label">Username</label>
								<input type="text" name="inUsername" id="inUsername" class="form-control" value="<?= $isEdit ? $data->username:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inEmail" class="col-form-label">Email</label>
								<input type="email" name="inEmail" id="inEmail" class="form-control" value="<?= $isEdit ? $data->email:'' ?>" required>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inStatus" class="col-form-label">Status</label>
								<select name="inStatus" id="inStatus" class="form-control">
									<option value="1" <?= $isEdit && $data->status == 1 ? 'selected':'' ?>>Aktif</option>
									<option value="0" <?= $isEdit && $data->status == 0 ? 'selected':'' ?>>Non-Aktif</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inRole" class="col-form-label">Role</label>
								<select name="inRole" id="inRole" class="form-control">
									<option value="administrator" <?= $isEdit && $data->role == 'administrator' ? 'selected':'' ?>>Administrator</option>
									<option value="public" <?= $isEdit && $data->role == 'public' ? 'selected':'' ?>>Public</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group">
								<label for="inPassword" class="col-form-label">Password</label>
								<input type="password" name="inPassword" id="inPassword" class="form-control" <?= $isEdit ? 'placeholder="Isi jika ingin mengganti password"':'required' ?>>
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

	</section>
</div>
