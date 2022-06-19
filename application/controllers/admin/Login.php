<?php


	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

		}

		public function index()
		{
			$checkSession = $this->Etc_m->checkSession();
			if ($checkSession) {
				$this->Etc_m->showMessage(200, "Selamat datang!");
				redirect(site_url('admin/Dashboard'));
			}
			$data['title'] = "Login";
			$this->load->view("admin/login", $data);
		}

		public function auth()
		{
			$postInput = $this->input->post();

			// cek apakah isi inputan username dan pass kosong?
			if ($postInput['ip-username'] == "" && $postInput['ip-pass'] == "") {
				// jika kosong, maka munculkan pesan error inputan tidak boleh kosong
				$this->Etc_m->showMessage(400, "Inputan tidak boleh kosong!");
				// kemudian pindah ke halaman login
				redirect(site_url('admin/login'), "refresh");
				return;
			}

			// rules
			$this->form_validation->set_rules('ip-username', 'username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ip-pass', 'password', 'trim|required|xss_clean');
			// disini terdapat callback : callback_check_database()
			// digunakan untuk memanggil function check_database() di bawah

			// jika validasi gagal maka akan langsung dikembalikan ke login
			if ($this->form_validation->run() == false) {
				$this->Etc_m->showMessage(400, "username / password anda tidak valid");
				redirect(site_url('admin/login'), "refresh");
				return;
			}

			$hashed_pass = md5($postInput['ip-pass']);

			// mengecek kedua dengan acara mengecek database
			$username = $postInput['ip-username'];
			$password = $hashed_pass;

			$result = $this->Login_model->login($username, $password);

			// jika hasilnya ada maka masukan ke session field nama dan username dengan nama session login 
			if ($result) {

				$userdata = [
					"user_session" => [
						"id_user" => $result->id_user,
						"username" => $result->username
					]
				];

				$this->session->set_userdata($userdata);
				$this->Etc_m->showMessage(200, "Selamat datang!" . $result->name);
				redirect(site_url('admin/dashboard'), 'location');
				return;
			}

			// pesan ini akan muncul ketika password dan email salah, tidak sesuai dengan data di database
			$this->Etc_m->showMessage(400, "username / password anda salah");
			redirect(site_url('admin/login'), 'refresh');
		}

		public function logout()
		{
			// menghapus seluruh nilai pada session userdata
			$this->session->sess_destroy();
			// pindah ke halaman login
			redirect(site_url('admin/login'), 'refresh');
		}
	}
	

?>
