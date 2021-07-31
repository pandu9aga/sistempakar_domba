<?php



/**
 *
 */
class Admin_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  //------------------user----------------------------------------------------------
  public function get_admin($data){
    $this->db->select('*');
    $this->db->from('tb_admin');
    $this->db->where('username = ',$data['username']);
    $this->db->where('password = ',$data['password']);
    $query = $this->db->get();
    return $query;
  }



  //------------------penyakit----------------------------------------------------------
  public function getAll_penyakit(){
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $query = $this->db->get();
    return $query;
  }

  public function get_penyakit($where){
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $this->db->where($where);
    $query = $this->db->get();
    return $query;
  }

  public function cek_kode($kode_penyakit){
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $this->db->where('kode_penyakit = ',$kode_penyakit);
    $query = $this->db->get();
    return $query;
  }

  public function insert_penyakit($data){
    $this->db->set('kode_penyakit',$data['kode_penyakit']);
    $this->db->set('nama_penyakit',$data['nama_penyakit']);
    $this->db->set('penjelasan',$data['penjelasan']);
    $this->db->set('gejala',$data['gejala']);
    $this->db->set('penanganan',$data['penanganan']);
    $this->db->insert('tb_penyakit');
  }

  public function update_penyakit($data,$id_penyakit){
    $this->db->where('id_penyakit = ',$id_penyakit);
    $this->db->update('tb_penyakit',$data);
  }

  public function delete_penyakit($id_penyakit){
    $this->db->where('id_penyakit = ',$id_penyakit);
    $this->db->delete('tb_penyakit');
  }

  //------------------gejala----------------------------------------------------------
  public function getAll_gejala(){
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $query = $this->db->get();
    return $query;
  }

  public function get_gejala($where){
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $this->db->where($where);
    $query = $this->db->get();
    return $query;
  }

  public function cek_kode_gejala($kode_gejala){
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $this->db->where('kode_gejala = ',$kode_gejala);
    $query = $this->db->get();
    return $query;
  }

  public function insert_gejala($data){
    $this->db->set('kode_gejala',$data['kode_gejala']);
    $this->db->set('gejala',$data['gejala']);
    $this->db->insert('tb_gejala');
  }

  public function update_gejala($data,$id_gejala){
    $this->db->where('id_gejala = ',$id_gejala);
    $this->db->update('tb_gejala',$data);
  }

  public function delete_gejala($id_gejala){
    $this->db->where('id_gejala = ',$id_gejala);
    $this->db->delete('tb_gejala');
  }

  //------------------rule----------------------------------------------------------
  public function getAll_rule(){
    $this->db->select('*');
    $this->db->from('tb_rule');
    $query = $this->db->get();
    return $query;
  }

  public function get_rule($where){
    $this->db->select('*');
    $this->db->from('tb_rule');
    $this->db->where($where);
    $query = $this->db->get();
    return $query;
  }

  public function cek_kode_rule($kode_rule){
    $this->db->select('*');
    $this->db->from('tb_rule');
    $this->db->where('kode_rule = ',$kode_rule);
    $query = $this->db->get();
    return $query;
  }

  public function insert_rule($data){
    $this->db->set('kode_rule',$data['kode_rule']);
    $this->db->set('kode_gejala',$data['kode_gejala']);
    $this->db->set('kode_penyakit',$data['kode_penyakit']);
    $this->db->insert('tb_rule');
  }

  public function update_rule($data,$id_rule){
    $this->db->where('id_rule = ',$id_rule);
    $this->db->update('tb_rule',$data);
  }

  public function delete_rule($id_rule){
    $this->db->where('id_rule = ',$id_rule);
    $this->db->delete('tb_rule');
  }

}
