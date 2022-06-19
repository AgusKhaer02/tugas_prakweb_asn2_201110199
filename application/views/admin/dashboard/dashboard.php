

<!-- Main content -->
<section class="content">

	<div class="container-fluid">
		<div class="col-md-5">
		<div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Biodata</h3>
            </div>
            <div class="card-body">
				<table class="table table-striped table-inverse">
					<tbody>
						<tr>
							<td scope="row"> NIM</td>
							<td><?= $user_data->nim?></td>
						</tr>
						<tr>
							<td scope="row"> Nama</td>
							<td><?= $user_data->name?></td>
						</tr>
						<tr>
							<td scope="row"> Kelas</td>
							<td><?= $user_data->kelas?></td>
						</tr>
						<tr>
							<td scope="row"> Foto</td>
							<td><img src="<?= base_url('images/') . $user_data->image?>" alt="<?= $user_data->image?>" width="170" height="200"></td>
						</tr>

					</tbody>
				</table>
            </div>
              <!-- /.card-body -->
            </div>
		</div>


	</div><!-- /.containera-fluid -->
</section>
<!-- /.content -->
