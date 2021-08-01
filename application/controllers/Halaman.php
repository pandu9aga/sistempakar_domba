<?php


class Halaman extends CI_Controller {
			public function __construct(){
					parent::__construct();
					$this->load->helper('form');
					$this->load->library('form_validation');
					$this->load->library('upload');
					$this->load->helper('url_helper');
					$this->load->helper('text');
					$this->load->helper('date');
					$this->load->library('pagination');
			}
	public function view()
	{

		$this->load->view('pages/static/header1');
		$this->load->view('pages/forms/home');
		$this->load->view('pages/static/footer');

	}
	public function homes()
	{

		$this->load->view('pages/static/header');
		$this->load->view('pages/forms/homes');
		$this->load->view('pages/static/footer');

	}
}
