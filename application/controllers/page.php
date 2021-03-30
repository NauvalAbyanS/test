<?php
class page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
 
  function index(){
    $this->load->view('v_dashboard');
  }
 
  function Historysiswa(){
    // function ini hanya boleh diakses oleh admin dan petugas
    if($this->session->userdata('akses')=='1'){
      $this->load->view('auth/historysiswa');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function transaksi(){
    // function ini hanya boleh diakses oleh admin dan petugas
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('auth/transaksi');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
  function HistoryAdPe{
    // function ini hanya boleh diakses oleh admin dan petugas
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('auth/historyAdPe');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function laporan(){
    // function ini hanya boleh diakses oleh admin
    if($this->session->userdata('akses')=='1'){
      $this->load->view('auth/laporan');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}