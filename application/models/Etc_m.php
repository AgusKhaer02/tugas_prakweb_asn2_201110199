<?php




class Etc_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSession()
    {
        if ($this->session->userdata('user_session')) {
            return true;
        }

        return false;
    }
    
    public function showMessage($code, $message)
    {
        $this->session->set_flashdata([
            "code" => $code,
            "message" => $message,
        ]);
    }
}
