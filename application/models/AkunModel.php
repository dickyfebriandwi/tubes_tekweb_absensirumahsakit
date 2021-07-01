<?php
class AkunModel extends CI_Model{
    //model mengambil data
    function getAkun(){
        return $this->db->get("akun");
    }

    //model menambah akun
    function insertAkun(){
        $akun = array(
            "username" => $this->input->post("user"),
            "password" => $this->input->post("pass"),
            "nama" => $this->input->post("nama"),
            "alamat" => $this->input->post("alamat"),
            "no_tlp" => $this->input->post("no_tlp"),
            "jabatan" => $this->input->post("jabatan"),
            "tipe_akun" => $this->input->post("tipe_akun"),
        );
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

    function getAkunById($id){
        $this->db->where("id",$id);
        return $this->db->get('akun');
    }
    function updateAkun($id){
        $data = array(
            "username" => $this->input->post("user"),
            "password" => $this->input->post("pass"),
            "nama" => $this->input->post("nama"),
            "alamat" => $this->input->post("alamat"),
            "no_tlp" => $this->input->post("no_tlp"),
            "jabatan" => $this->input->post("jabatan"),
        );
        $this->db->where("id",$id);
        return $this->db->update("akun",$data);
    }
    function updateAkunAdmin($id){
        $data = array(
            "username" => $this->input->post("user"),
            "password" => $this->input->post("pass"),
            "nama" => $this->input->post("nama"),
            "alamat" => $this->input->post("alamat"),
            "no_tlp" => $this->input->post("no_tlp"),
            "jabatan" => $this->input->post("jabatan"),
            "tipe_akun" => $this->input->post("tipe_akun"),
        );
        $this->db->where("id",$id);
        return $this->db->update("akun",$data);
    }
    function deleteAkun($id){
        $this->db->where("id",$id);
        return $this->db->delete("akun");
    }
}
?>