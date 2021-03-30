<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class model extends CI_Model {
    
    public function auth_petugas($username,$password){
    $this->db->query("select * from petugas where id_petugas='$username' AND password='$password'");
    return $query;
    }
    public function auth_siswa($username,$password){
        $this->db->query("select * from siswa where nisn='$username' AND password='$password'");
        return $query;
    }
}
