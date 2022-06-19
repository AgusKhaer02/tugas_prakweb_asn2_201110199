<?php

	class User extends CI_Controller
	{
		public $username;
		public $idUser;
		public $title;
		public $breadcrumbs;

		function __construct()
		{
			parent::__construct();
			$checkSession = $this->Etc_m->checkSession();
			if ($checkSession == false) {
				$this->Etc_m->showMessage(400, "Anda harus login terlebih dahulu");
				redirect(site_url('admin/Login'));
			}
			$user_sess = $this->session->userdata('user_session');
			$this->idUser = $user_sess['id_user'];
			$this->username = $user_sess['username'];
			$this->title = "User";
			$this->breadcrumbs = [
				$this->title
			];
		}

		public function index()
		{
			$data['breadcrumbs'] = $this->breadcrumbs;
			$data['username_session'] = $this->username;
			$data['username'] =	$this->username;
			$data['title'] = $this->title;
			$user['data'] = $this->User_model->selectAll();
			$data['contents'] = $this->load->view('admin/user/user', $user, TRUE);
			$this->load->view('admin/layout/template', $data);
		}

		public function add_form()
		{
			array_push($this->breadcrumbs, "Add new user");
			$data['breadcrumbs'] = $this->breadcrumbs;
			$data['username_session'] = $this->username;
			$data['username'] =	$this->username;
			$data['title'] = $this->title;
			$user['data'] = $this->User_model->selectAll();
			$data['contents'] = $this->load->view('admin/user/pages/add', $user, TRUE);
			$this->load->view('admin/layout/template', $data);
		}

		public function edit_form()
		{
			$input = $this->input->get();
			array_push($this->breadcrumbs, "Edit new user");
			$data['breadcrumbs'] = $this->breadcrumbs;
			$data['username_session'] = $this->username;
			$data['username'] =	$this->username;
			$data['title'] = $this->title;
			$where = [
				"id_user" => $input['id_user'],
			];
			$user['data_user'] = $this->User_model->selectBy($where);
			$data['contents'] = $this->load->view('admin/user/pages/edit', $user, TRUE);
			$this->load->view('admin/layout/template', $data);
		}

		public function edit_user()
		{
			$input = $this->input->post();

			$nm_file = "";
			if ($input['recent_image'] != null && $input['recent_image'] != '') {
				$nm_file = $input['recent_image'];
			}else{
				$nm_file = $input['nim'] . '.png';
			}

			$input['image'] = $nm_file;
			unset($input['recent_image']);
			
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = $nm_file;
			$config['overwrite'] = TRUE;
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('image')) {
				$image = $this->upload->data();
				
	
				$where = [
					'id_user' => $input['id_user'],
				];

				$result = $this->User_model->update($where, $input);

				if ($result) {
					$this->Etc_m->showMessage(200, "Edit data user berhasil!");
					redirect(site_url('admin/User'));
				}else {
					$this->Etc_m->showMessage(400, "Edit data user gagal!");
					redirect(site_url('admin/User'));
				}
			}

			$errMessage = $this->upload->display_errors();
			if ($errMessage == "<p>You did not select a file to upload.</p>") {
				// tetap lanjutkan proses input ke database
				// karna ada opsi ketika tidak upload gambar

				$where = [
					'id_user' => $input['id_user'],
				];

				$result = $this->User_model->update($where, $input);
				
				if ($result) {
					$this->Etc_m->showMessage(200, "Tambah data user berhasil!");
					redirect(site_url('admin/User'));
				}else {
					$this->Etc_m->showMessage(400, "Tambah data user gagal!");
					redirect(site_url('admin/User'));
				}
			}

			$this->Etc_m->showMessage(400, "Error Upload Image :" . $errMessage);
			redirect(site_url('admin/User'));
		}

		public function add_user()
		{
			$input = $this->input->post();
			$input['password'] = md5($input['password']);

			$nm_file = $input['nim'] . '.png';
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = $nm_file;
			$config['overwrite'] = TRUE;
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('image')) {
				$image = $this->upload->data();
				$input['image'] = $image['file_name'];
	
				$result = $this->User_model->add_user($input);

				if ($result) {
					$this->Etc_m->showMessage(200, "Tambah data user berhasil!");
					redirect(site_url('admin/User'));
				}else {
					$this->Etc_m->showMessage(400, "Tambah data user gagal!");
					redirect(site_url('admin/User'));
				}
			}

			$errMessage = $this->upload->display_errors();
			if ($errMessage == "<p>You did not select a file to upload.</p>") {
				// tetap lanjutkan proses input ke database
				// karna ada opsi ketika tidak upload gambar
				$result = $this->User_model->add_user($input);
				if ($result) {
					$this->Etc_m->showMessage(200, "Tambah data user berhasil!");
					redirect(site_url('admin/User'));
				}else {
					$this->Etc_m->showMessage(400, "Tambah data user gagal!");
					redirect(site_url('admin/User'));
				}
			}

			$this->Etc_m->showMessage(400, "Error Upload Image :" . $errMessage);
			redirect(site_url('admin/User'));

		}

		public function delete()
		{
			$idUser = $this->input->get('id_user');
			$image = $this->input->get('image');

			$where = [
				"id_user" => $idUser,
			];

			$result = $this->User_model->delete($where);
			$removeImage = unlink('./images/' . $image);
			if ($removeImage) {
				if ($result) {
					$this->Etc_m->showMessage(200, "Hapus data user berhasil!");
					redirect(site_url('admin/User'));
				}
	
				$this->Etc_m->showMessage(400, "Hapus data user gagal!");
				redirect(site_url('admin/User'));
			}

			$this->Etc_m->showMessage(400, "Gagal untuk menghapus file gambar");
			redirect(site_url('admin/User'));

		}

	
	}
	

?>
