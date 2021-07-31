<?php


/**
 *
 */
class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('upload');
    $this->load->helper('url_helper');
    $this->load->helper('text');
    $this->load->helper('date');
    $this->load->library('pagination');
    $this->load->model('Admin_model');
  }

  public function index(){

		if($this->session->userdata('status') == "login"){
			redirect(base_url('admin/home'));
		}

		$this->load->view('pages/admin/login');
	}

  public function proses_login(){
		$username = $this->input->post('username');
    $password = $this->input->post('password');

		$data = array(
      'username' => $username,
			'password' => $password
    );

    $cek = $this->Admin_model->get_admin($data)->num_rows();
    if($cek > 0){
      $data_session = array(
        'username' => $username,
        'status' => "login"
      );
      $this->session->set_userdata($data_session);
      redirect(base_url('admin/home'));
    }
    else{
      $data['login'] = "salah";
      $this->load->view('pages/admin/login',$data);
    }
	}

	public function proses_logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/login'));
	}
}
