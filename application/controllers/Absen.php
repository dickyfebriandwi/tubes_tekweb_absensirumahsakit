<?php
class Absen extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("AkunModel","",TRUE);
        $this->load->model("AbsenModel","",TRUE);
        $this->load->library('table');
     }
     public function prosesMasuk(){
        if($this->AbsenModel->insertAbsenMasuk()){
            redirect(site_url("home/bukacatatan"));
        }else{
            redirect(site_url("home"));
        }
     }
     public function prosesKeluar(){
        if($this->AbsenModel->insertAbsenKeluar()){
            redirect(site_url("home/bukacatatankeluar"));
        }else{
            redirect(site_url("home"));
        }
     }
    //fungsi hapus
    public function hapusMasuk($id){
        $this->AbsenModel->deleteMasuk($id);
        redirect(site_url("home/bukacatatanadmin"));
    }
    public function hapusKeluar($id){
        $this->AbsenModel->deleteKeluar($id);
        redirect(site_url("home/bukacatatankeluaradmin"));
    }
    
}

?>