<?php


/**
 *
 */
class Konsultasi_control extends CI_Controller
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

  public function konsultasi(){

    $data['penyakit']=$this->Konsultasi_model->daftar_penyakit();

    $this->load->view('pages/static/header');
    $this->load->view('pages/forms/daftar_konsultasi',$data);
    $this->load->view('pages/static/footer');

  }

  public function pertanyaan(){
    $data['pertanyaan'] = $this->Konsultasi_model->daftar_pertanyaan()->result();
    $data['jumlah_pertanyaan'] = $this->Konsultasi_model->daftar_pertanyaan()->num_rows();
    $data['penyakit'] = $this->Konsultasi_model->get_penyakit()->result();

    $this->load->view('pages/static/header');
    $this->load->view('pages/forms/daftar_pertanyaan',$data);
    $this->load->view('pages/static/footer');

  }

  public function api_pertanyaan(){
    $pertanyaan = $this->Konsultasi_model->daftar_pertanyaan()->result();
    $penyakit = $this->Konsultasi_model->get_penyakit()->result();

    /*
    foreach ($data['pertanyaan'] as $value) {
      echo $value->kode;
      echo $value->pertanyaan."<br>";
    }*/
    $response = array(
      'pertanyaan' => $pertanyaan,
      'penyakit' => $penyakit
    );

    echo json_encode($response);
  }

  public function api_rule(){
    $rule = $this->Konsultasi_model->get_rule()->result();

    $response = array(
      'rule' => $rule
    );

    echo json_encode($response);
  }

  public function cek_diagnosa(){
    $data['waktu'] = $this->input->post('waktu');
    echo $data['waktu'];
    $hasil = $this->input->post('jawaban');
    $arr_hasil = explode(",",$hasil);
    $data['hasil'] = implode(" ",$arr_hasil);
    echo $data['hasil'];

    $this->Konsultasi_model->tambah_riwayat($data);


    $get = $this->Konsultasi_model->get_riwayat($data['waktu'])->result();
    foreach ($get as $key) {
      $id = $key->id_jawaban;
    }
    redirect(base_url('hasil_diagnosis/'.$id));
  }

  public function hasil_diagnosis(){
    $id = $this->uri->segment(2);
    $data['hasil'] = $this->Konsultasi_model->get_riwayatid($id)->result();
    $data['rule'] = $this->Konsultasi_model->get_rule()->result();
    $data['penyakit'] = $this->Konsultasi_model->get_penyakit()->result();

    $this->load->view('pages/static/header');
    $this->load->view('pages/forms/hasildiagnosa',$data);
    $this->load->view('pages/static/footer');
  }

  public function cek_diag(){
    $id = $this->uri->segment(2);
    $hasil = $this->Konsultasi_model->get_riwayatid($id)->result();
    foreach ($hasil as $key) {
      $id_penyakit = $key->id_penyakit;
    }
    $penyakit = $this->Konsultasi_model->get_NamaPenyakit($id_penyakit)->result();
    $pertanyaan = $this->Konsultasi_model->daftar_pertanyaan($id_penyakit)->result();

    foreach ($hasil as $value) {
      $jawaban = $value->jawaban;
      $id_jawaban = $value->id_jawaban;
    }
    $exjawaban = explode (" ",$jawaban);
    foreach ($penyakit as $keys) {
      $rule = $keys->ketentuan;
    }
    $exrule = explode (" ",$rule);



    echo "<br><br>";

    $no = 0;
    foreach ($pertanyaan as $p) {
    if ($exjawaban[$no]==$exrule[$no]) {
      if ($exjawaban[$no]=="Y") {
        echo "Ya";
      }else {
        echo "Tidak";
      }
    }else {
      if ($exjawaban[$no]=="Y") {
        echo "Ya";
      }else {
        echo "Tidak";
      }
    }
    $no++;
    }


    echo "<br><br><br><br>";

    foreach ($hasil as $values) {
      $jawabans = $values->jawaban;
      $id_jawabans = $values->id_jawaban;
    }
    $exjawabans = explode (" ",$jawabans);
    foreach ($penyakit as $keyss) {
      $rules = $keyss->ketentuan;
    }
    $exrules = explode (" ",$rules);

    echo "rule lama:";
    foreach ($exrules as $key) {
      echo $key;
    }
    echo "<br>";

    $nojwb = 0;
    //$nextrule = [];
    echo "rule baru:";
    foreach ($exjawabans as $jwb) {
      if ($exrules[$nojwb]!=$exjawabans) {
        if ($exrules[$nojwb]=="O") {
          $nextrule[$nojwb] = $exjawabans[$nojwb];
        }else {
          $nextrule[$nojwb]=$exrules[$nojwb];
        }
      }else {
        $nextrule[$nojwb]=$exrules[$nojwb];
      }
      $nojwb++;
    }
    foreach ($nextrule as $key) {
      echo $key;
    }
    echo "<br>";
    echo "jawaban:";
    foreach ($exjawabans as $key) {
      echo $key;
    }


    echo "<br><br>";

    if ($exjawabans == $nextrule) {
      echo "sakit";
    }else {
      echo "tidak sakit";
    }
  }

  public function cetak(){
    $id = $this->uri->segment(2);
    $data['hasil'] = $this->Konsultasi_model->get_riwayatid($id)->result();
    $data['rule'] = $this->Konsultasi_model->get_rule()->result();
    $data['penyakit'] = $this->Konsultasi_model->get_penyakit()->result();

    $this->load->view('pages/static/print_diagnosa',$data);
  }

  public function cek_diagnosaold(){
    $data['waktu'] = $this->input->post('waktu');
    echo $data['waktu'];
    foreach ($this->input->post('inp') as $key => $value) {
      if ($value=="Ya") {
        $ar_hasil[]=$key;
      }
    }

    if ($ar_hasil==null) {
      $ar_hasil[0] = "G0";
    }

    $data['hasil'] = implode(' ', $ar_hasil);

    $this->Konsultasi_model->tambah_riwayat($data);


    $get = $this->Konsultasi_model->get_riwayat($data['waktu'])->result();
    foreach ($get as $key) {
      $id = $key->id_jawaban;
    }
    redirect(base_url('hasil_diagnosis/'.$id));
  }

}
