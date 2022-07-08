<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-5">
	<!-- Main content -->
	<section class="content">

		<div class="container">
			<!-- Content -->
			<div class="card">
				<div class="card-body">
					<?= form_open('Users/updateProfile', '', ['id' => $this->session->userdata('USER')->id]) ?>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label for="inUsername" class="col-form-label">Username</label>
									<input type="text" name="inUsername" id="inUsername" class="form-control" value="<?= $user_login->username ?>" required>
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label for="inEmail" class="col-form-label">Email</label>
									<input type="email" name="inEmail" id="inEmail" class="form-control" value="<?= $user_login->email ?>" required>
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label for="inPassword" class="col-form-label">Password</label>
									<input type="password" name="inPassword" id="inPassword" class="form-control" placeholder="Isi jika ingin mengubah">
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<a href="./" class="btn btn-secondary mr-2">Cancel</a>
						<button type="submit" name="submit" class="btn btn-success">Simpan</button>
					</div>
					<?= form_close() ?>
				</div>
			</div>
			<!-- /.content -->
		</div>

	</section>
</div>
<!-- /.content-wrapper -->
