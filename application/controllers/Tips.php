<?php


/**
 *
 */
class Tips extends CI_Controller
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
    $this->load->model('Konsultasi_model');
  }

  public function index(){
    $data['penyakit']=$this->Konsultasi_model->daftar_penyakit();

    $this->load->view('pages/static/header');
    $this->load->view('pages/forms/tips_perawatan',$data);
    $this->load->view('pages/static/footer');
  }

}
