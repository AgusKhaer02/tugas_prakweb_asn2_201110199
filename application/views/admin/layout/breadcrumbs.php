<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0"><?= $title ;?></h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<?php
					
					foreach ($breadcrumbs as $key => $value) :
					?>
						<?php if ($key === count($breadcrumbs) -1 ) {?>
							<li class="breadcrumb-item active"><?= $value ;?></li>
							<?php continue ?>
						<?php }	?>

						<li class="breadcrumb-item"><a href="#"><?= $value ;?></a></li>
					<?php 
					endforeach;
					?>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
