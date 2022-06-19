<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
	<img src="<?= base_url('asset/template/admin/')?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
	<!-- Sidebar user panel (optional) -->
	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
	<div class="image">
		<img src="<?= base_url('asset/template/admin/')?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
	</div>
	<div class="info d-flex align-content-between flex-wrap">
		<a href="#" class="d-block"><?= $username_session ?></a>
	</div>
	</div>

	<!-- Sidebar Menu -->
	<nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		<!-- Add icons to the links using the .nav-icon class
			with font-awesome or any other icon font library -->
		<li class="nav-item menu-open">
		<li class="nav-item">

		<!-- logout, tombol ini akan menuju function logout pada Login controller -->
			<a href="<?= site_url('admin/Login/logout')?>" class="nav-link btn-danger">
				<i class="nav-icon far fa-circle text-light"></i>
				<p class="text-light">Logout</p>
			</a>
		</li>
		<a href="<?= site_url('admin/Dashboard')?>" class="nav-link">
			<i class="nav-icon fas fa-tachometer-alt"></i>
			<p>
			Dashboard
			<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<a href="<?= site_url('admin/User')?>" class="nav-link">
			<i class="nav-icon fas fa-user"></i>
			<p>
			Master Data User
			<i class="right fas fa-angle-left"></i>
			</p>
		</a>
	</ul>
	</nav>
	<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
