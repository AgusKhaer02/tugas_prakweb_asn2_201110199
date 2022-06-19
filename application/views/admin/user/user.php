

<!-- Main content -->
<section class="content">

	<div class="container-fluid">
		<div class="col-md-12">
		<div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Biodata</h3>
            </div>
            <div class="card-body">

				<h4><a href="<?= site_url('admin/user/add_form')?>" class="badge badge-success"><i class="fa fa-plus"></i> Tambah user baru</a></h4>
				<table class="table table-striped table-inverse">
					<thead class="thead-inverse">
						<tr>
							<th>#</th>
							<th>nim</th>
							<th>name</th>
							<th>username</th>
							<th>kelas</th>
							<th>email</th>
							<th>level</th>
							<th>image</th>
							<th>actions</th>
						</tr>
						</thead>
						<tbody>

							<?php 
								$num = 1;
								foreach ($data as $value) :
							?>	
							<tr>
								<td scope="row"><?= $num++ ;?></td>
								<td><?= $value['nim'] ;?></td>
								<td><?= $value['name'] ;?></td>
								<td><?= $value['username'] ;?></td>
								<td><?= $value['kelas'] ;?></td>
								<td><?= $value['email'] ;?></td>
								<td><?= $value['level'] ;?></td>
								<td><img src="<?= base_url('images/') . $value['image'] ;?>" alt="<?= $value['image'] ;?>" width="100" height="100"></td>
								<td>
									<h4><a href="<?= site_url('admin/user/edit_form?id_user=' . $value['id_user'])?>" class="badge badge-warning badge-lg"><i class="fa fa-edit"></i> Edit</a></h4>

									<h4><a href="<?= site_url('admin/user/delete?id_user=' . $value['id_user'] . '&image=' . $value['image'])?>" class="badge badge-danger badge-lg" onclick="return confirm('Apakah anda yakin ingin menghapus file ini?')"><i class="fa fa-trash"></i> Delete</a></h4>
								</td>
							</tr>
							<?php 
								endforeach;
							?>
						</tbody>
				</table>
				
            </div>
              <!-- /.card-body -->
            </div>
		</div>
	</div>


	</div><!-- /.containera-fluid -->
</section>
<!-- /.content -->
