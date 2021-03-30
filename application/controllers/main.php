<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
	public function index(){
		$this->load->view('auth/login');
	}
    public function index2(){
        $this->load->view('auth/loginsiswa');
    }
    public function __construct(){
        parent::__construct();
        $this->load->model('model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    function auth(){
        $username = $_POST['username'];
        $password = $_POST['password'];
 
        $cek_petugas=$this->model->auth_petugas($username,$password);
 
                if($cek_petugas->num_rows() > 0){
                    $data=$cek_petugas->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['id_petugas']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('petugas/mainpageadmin');
 
                 }else{
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['id_petugas']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('page');
                 }
 
                    }else{  
                    $cek_siswa=$this->login_model->auth_siswa($username,$password);
                    if($cek_siswa->num_rows() > 0){
                            $data=$cek_siswa->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_id',$data['nisn']);
                            $this->session->set_userdata('ses_nama',$data['nama']);
                            redirect('page');
                    }else{
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
                    }
                }
            }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}