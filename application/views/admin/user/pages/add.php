<section class="content">

	<div class="container-fluid">
	<div class="card card-success">
	<div class="card-header">
	<h3 class="card-title">Form tambah user</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
	<form action="<?= site_url('admin/user/add_user')?>" enctype="multipart/form-data" method="post">
		<div class="row">
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>NIM</label>
					<input type="text" name="nim" class="form-control" placeholder="nim ..." required>
				</div>

			</div>
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="username ..." required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="name" class="form-control" placeholder="nama lengkap ..." required>
				</div>
			</div>
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Kelas</label>
					<input type="text" name="kelas" class="form-control" placeholder="kelas ..." required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="email ..." required>
				</div>
			</div>
			<div class="col-sm-6">
				<!-- text input -->
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="password ..." required>
				</div>
			</div>
		</div>

		<div class="row">
		
			<div class="col-sm-6">
				<!-- radio -->
				<div class="form-group">
					<label>Level</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="level" value="admin">
						<label class="form-check-label">Admin</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="level" value="staff">
						<label class="form-check-label">Staff</label>
					</div>
				</div>
				
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputFile">Image</label>
					<div class="input-group">
						<div class="custom-file">
						<input type="file" class="custom-file-input" name="image" id="exampleInputFile">
						<label class="custom-file-label" for="exampleInputFile">Pilih File</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
		</div>
	</form>
	</div>
	<!-- /.card-body -->
</div>
	</div>
</section>

