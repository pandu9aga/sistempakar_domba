<?php


/**
 *
 */
class Rule extends CI_Controller
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

		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $data['rule'] = $this->Admin_model->getAll_rule()->result();

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/daftar_rule',$data);
		$this->load->view('pages/admin/footer');
	}

  public function tambah(){

		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/tambah_rule');
		$this->load->view('pages/admin/footer');
	}

  public function proses_tambah(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $kode_rule = $this->input->post('kode_rule');
    $kode_gejala = $this->input->post('kode_gejala');
    $kode_penyakit = $this->input->post('kode_penyakit');

		$data = array(
      'kode_rule' => $kode_rule,
      'kode_gejala' => $kode_gejala,
      'kode_penyakit' => $kode_penyakit
    );

		$cek_kode = $this->Admin_model->cek_kode_rule($kode_rule)->num_rows();
		if ($cek_kode == 0) {
		  $this->Admin_model->insert_rule($data);
      redirect(base_url('admin/rule'));
		}
		else {
			$data['cek_kode'] = "ada";
			$this->load->view('pages/admin/header');
			$this->load->view('pages/admin/tambah_rule',$data);
			$this->load->view('pages/admin/footer');
		}
  }

  public function edit(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_rule = $this->uri->segment(4);

    $where = array('id_rule' => $id_rule, );

		$data['rule'] = $this->Admin_model->get_rule($where)->result();

		$this->load->view('pages/admin/header');
		$this->load->view('pages/admin/edit_rule',$data);
		$this->load->view('pages/admin/footer');
	}

  public function proses_edit(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $id_rule = $this->input->post('id_rule');
    $now_kode_rule = $this->input->post('now_kode_rule');

    $kode_rule = $this->input->post('kode_rule');
    $kode_gejala = $this->input->post('kode_gejala');
    $kode_penyakit = $this->input->post('kode_penyakit');

		$data = array(
      'kode_rule' => $kode_rule,
      'kode_gejala' => $kode_gejala,
      'kode_penyakit' => $kode_penyakit
    );

		$cek_kode = $this->Admin_model->cek_kode_rule($kode_rule)->num_rows();
		if ($cek_kode == 0) {
		  $this->Admin_model->update_rule($data,$id_rule);
      redirect(base_url('admin/rule'));
		}
		else {
			if ($kode_rule == $now_kode_rule) {
        $this->Admin_model->update_rule($data,$id_rule);
        redirect(base_url('admin/rule'));
      }else {
        $data['cek_kode'] = "ada";
        $where = array('id_rule' => $id_rule );

    		$data['rule'] = $this->Admin_model->get_rule($where)->result();
  			$this->load->view('pages/admin/header');
  			$this->load->view('pages/admin/edit_rule',$data);
  			$this->load->view('pages/admin/footer');
      }
		}
  }

  public function hapus(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_rule = $this->uri->segment(4);

		$this->Admin_model->delete_rule($id_rule);

		redirect(base_url('admin/rule'));
	}

}
