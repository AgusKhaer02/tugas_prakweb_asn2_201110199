<section class="content">

	<div class="container-fluid">
	<div class="card card-warning">
	<div class="card-header">
	<h3 class="card-title">Form ubah user</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">

	
	<form action="<?= site_url('admin/user/edit_user')?>" method="post" enctype="multipart/form-data">
		<input type="text" name="id_user" value="<?= $data_user->id_user?>" hidden>
		<input type="text" name="recent_image" value="<?= $data_user->image?>" hidden>

		<div class="row">
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>NIM</label>
					<input type="text" name="nim" class="form-control" placeholder="nim ..." value="<?= $data_user->nim?>" required>
				</div>

			</div>
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="username ..." value="<?= $data_user->username?>" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="name" class="form-control" placeholder="nama lengkap ..." value="<?= $data_user->name?>" required>
				</div>
			</div>
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Kelas</label>
					<input type="text" name="kelas" class="form-control" placeholder="kelas ..." value="<?= $data_user->kelas?>" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="email ..." value="<?= $data_user->email?>" required>
				</div>

			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputFile">Image</label>
					<input class="form-control" type="file" name="image" id="formFile">
				</div>
			</div>

		</div>

		<div class="row">
		
			<div class="col-sm-6">
				<!-- radio -->
				<div class="form-group">
					<label>Level</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="level" value="admin" <?= ($data_user->level == 'admin') ? 'checked' : ''?> >
						<label class="form-check-label">Admin</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="level" value="staff" <?= ($data_user->level == 'staff') ? 'checked' : ''?> >
						<label class="form-check-label">Staff</label>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
		</div>
	</form>
	</div>
	<!-- /.card-body -->
</div>
	</div>
</section>

