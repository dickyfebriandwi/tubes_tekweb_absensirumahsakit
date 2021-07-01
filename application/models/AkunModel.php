<?php
class AkunModel extends CI_Model{
    //model menambah akun
    function insertAkun($akun){
        return $this->db->insert("akun",$akun);
    }

    //model login
    function login(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $this->db->where("username",$username);
        $this->db->where("password",$password);
        return $this->db->get("akun");
    }
}
?>