<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
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
        <div class="content">
            <div class="row text-center">
                <div class="col">
                    <h1 class="mb-3"><?= $page ?></h1>
                </div>
            </div>
             <div class="row justify-content-center">
            
            <div class="image">
				<img src="<?php echo base_url("public/img/user2-160x160.jpg")?>" class="img-circle elevation-2" alt="User Image">
			</div>
            
        </div>
        </div>
       
		<!-- Content -->
		<div class="row justify-content-center">
			<div class="col-6">
				<div class="card overflow-hidden mt-4">
                    <?php echo form_open('Users/update')?>
					<table class="table table-striped">
                        <tr>
                            <td style="width: 30%">Username</td>
                            <td>: 
                                <?php
                                if($this->session->has_userdata('USERNAME')){
                                    echo $this->session->userdata('USERNAME');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: 
                                <?php
                                if($this->session->has_userdata('USER')){
                                    echo $this->session->userdata('USER')->email;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Role</td>
                            <td>: 
                                <?php
                                if($this->session->has_userdata('ROLE')){
                                    echo $this->session->userdata('ROLE');
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <div class="row justify-content-center">
                        <a href="<?=base_url('Users/edit')?>" class="btn btn-primary mb-2">Edit</a>
                    </div>
                </div>
			</div>
		</div>
		<!-- /.content -->

	</section>
</div>
<!-- /.content-wrapper -->