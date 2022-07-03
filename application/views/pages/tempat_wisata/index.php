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
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center justify-content-between">
					<h3 class="card-title">List Tempat Wisata</h3>
					<a href="./create" class="btn btn-sm btn-success">Tambah</a>
				</div>
			</div>
			<div class="card-body">
				<div class="responsive-table">
					<table class="table table-striped table-borderless">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama</th>
								<th>Jenis</th>
								<th>Rating</th>
								<th>Harga Tiket</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$count = 1;
							foreach ($lists as $tw) {
							?>
							<tr>
								<td class="text-center"><?= $count ?></td>
								<td><?= $tw->nama ?></td>
								<td>Kolam Renang</td>
								<td><?= $tw->skor_rating ?></td>
								<td><?= $tw->harga_tiket ?></td>
								<td>
									<a href="./show/<?= $tw->id ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
									<a href="./edit?id=<?= $tw->id ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
									<a href="./delete/<?= $tw->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
							<?php 
							$count++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /.content -->

	</section>
</div>
<!-- /.content-wrapper -->
