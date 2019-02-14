<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/pemilihan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/pemilihan/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $pemilihan->id?>" />

							<div class="form-group">
								<label for="nama">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Pemilihan nama" value="<?php echo $pemilihan->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

                        	<div class="form-group">
								<label for="gender">Gender*</label>
								<input class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>"
								 type="text" name="gender" placeholder="Pemilihan gender" value="<?php echo $pemilihan->gender ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gender') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="jurusan">jurusan*</label>
								<input class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>"
								 type="text" name="jurusan" placeholder="Pemilihan jurusan" value="<?php echo $pemilihan->jurusan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jurusan') ?>
								</div>
							</div>

                    

							</div>
                            <div class="form-group">
								<label for="angkatan">Angkatan</label>
								<input class="form-control <?php echo form_error('angkatan') ? 'is-invalid':'' ?>"
								 type="number" name="angkatan" min="0" placeholder="Pemilihan angkatan" value="<?php echo $pemilihan->angkatan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('angkatan') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="nama">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" nama="image" />
								<input type="hidden" nama="old_image" value="<?php echo $pemilihan->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

						
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>