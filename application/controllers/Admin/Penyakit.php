<?php


/**
 *
 */
class Penyakit extends CI_Controller
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

    $data['penyakit'] = $this->Admin_model->getAll_penyakit()->result();

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/daftar_penyakit',$data);
		$this->load->view('pages/admin/footer');
	}

  public function tambah(){

		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/tambah_penyakit');
		$this->load->view('pages/admin/footer');
	}

  public function proses_tambah(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $kode_penyakit = $this->input->post('kode_penyakit');
    $nama_penyakit = $this->input->post('nama_penyakit');
		$penjelasan = $this->input->post('penjelasan');
    $gejala = $this->input->post('gejala');
    $penanganan = $this->input->post('penanganan');

		$data = array(
      'kode_penyakit' => $kode_penyakit,
			'nama_penyakit' => $nama_penyakit,
			'penjelasan' => $penjelasan,
			'gejala' => $gejala,
			'penanganan' => $penanganan
    );

		$cek_kode = $this->Admin_model->cek_kode($kode_penyakit)->num_rows();
		if ($cek_kode == 0) {
		  $this->Admin_model->insert_penyakit($data);
      redirect(base_url('admin/penyakit'));
		}
		else {
			$data['cek_kode'] = "ada";
			$this->load->view('pages/admin/header');
			$this->load->view('pages/admin/tambah_penyakit',$data);
			$this->load->view('pages/admin/footer');
		}
  }

  public function edit(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_penyakit = $this->uri->segment(4);

    $where = array('id_penyakit' => $id_penyakit, );

		$data['penyakit'] = $this->Admin_model->get_penyakit($where)->result();

		$this->load->view('pages/admin/header');
		$this->load->view('pages/admin/edit_penyakit',$data);
		$this->load->view('pages/admin/footer');
	}

  public function proses_edit(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $id_penyakit = $this->input->post('id_penyakit');
    $now_kode_penyakit = $this->input->post('now_kode_penyakit');

    $kode_penyakit = $this->input->post('kode_penyakit');
    $nama_penyakit = $this->input->post('nama_penyakit');
		$penjelasan = $this->input->post('penjelasan');
    $gejala = $this->input->post('gejala');
    $penanganan = $this->input->post('penanganan');

		$data = array(
      'kode_penyakit' => $kode_penyakit,
			'nama_penyakit' => $nama_penyakit,
			'penjelasan' => $penjelasan,
			'gejala' => $gejala,
			'penanganan' => $penanganan
    );

		$cek_kode = $this->Admin_model->cek_kode($kode_penyakit)->num_rows();
		if ($cek_kode == 0) {
		  $this->Admin_model->update_penyakit($data,$id_penyakit);
      redirect(base_url('admin/penyakit'));
		}
		else {
			if ($kode_penyakit == $now_kode_penyakit) {
        $this->Admin_model->update_penyakit($data,$id_penyakit);
        redirect(base_url('admin/penyakit'));
      }else {
        $data['cek_kode'] = "ada";
        $where = array('id_penyakit' => $id_penyakit );

    		$data['penyakit'] = $this->Admin_model->get_penyakit($where)->result();
  			$this->load->view('pages/admin/header');
  			$this->load->view('pages/admin/edit_penyakit',$data);
  			$this->load->view('pages/admin/footer');
      }
		}
  }

  public function hapus(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_penyakit = $this->uri->segment(4);

		$this->Admin_model->delete_penyakit($id_penyakit);

		redirect(base_url('admin/penyakit'));
	}

}
