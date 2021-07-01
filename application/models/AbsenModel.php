<?php
class AbsenModel extends CI_Model{
    //model mengambil data
    function getAbsenMasuk(){
        return $this->db->get("catatan_masuk");
    }
    function getAbsenKeluar(){
        return $this->db->get("catatan_keluar");
    }

    //model menambah catatan
    function insertAbsenMasuk(){
        $absen = array(
            "username" => $this->input->post("nama"),
            "waktu_masuk" => $this->input->post("masuk")
        );
        return $this->db->insert("catatan_masuk",$absen);
    }
    function insertAbsenkeluar(){
        $absen = array(
            "username" => $this->input->post("nama"),
            "waktu_keluar" => $this->input->post("keluar")
        );
        return $this->db->insert("catatan_keluar",$absen);
    }

    //model get id
    function getAbsenMasukById($id){
        $this->db->where("id",$id);
        return $this->db->get('catatan_masuk');
    }
    function getAbsenKeluarById($id){
        $this->db->where("id",$id);
        return $this->db->get('catatan_keluar');
    }
    
    //model delete
    function deleteMasuk($id){
        $this->db->where("id",$id);
        return $this->db->delete("catatan_masuk");
    }
    function deleteKeluar($id){
        $this->db->where("id",$id);
        return $this->db->delete("catatan_keluar");
    }
}
?>