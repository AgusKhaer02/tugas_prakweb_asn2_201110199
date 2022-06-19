<?php


class Dashboard extends CI_Controller
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
		$this->title = "Dashboard";
		$this->breadcrumbs = [
			$this->title
		];
	}

	public function index()
	{
		$where = [
			"id_user" => $this->idUser,
			"username" => $this->username,
		];
		$dashboard['user_data'] = $this->Dashboard_model->showUserProfile($where);
		$data['breadcrumbs'] = $this->breadcrumbs;
		$data['username_session'] = $this->username;
		$data['username'] =	$this->username;
		$data['title'] = $this->title;
		$data['contents'] = $this->load->view('admin/dashboard/dashboard', $dashboard, true);
		$this->load->view("admin/layout/template", $data);
	}
}

?>
