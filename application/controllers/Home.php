<?php
class Home extends CI_COntroller{
    public function __construct(){
       parent::__construct();
       $this->load->model("AkunModel","",TRUE);
       $this->load->model("AbsenModel","",TRUE);
       $this->load->library('table');
    }
    public function index(){
        //cek home login
        if($this->session->userdata('login')){
            //cek login admin
            if($this->session->userdata('tipe')=="admin"){
                $this->load->view("homeadmin");
            }else{
                $this->load->view("home");
            }
        }else{
            $this->load->view("login");
        }
    }
    //fungsi panggil datapegawai
    public function datapegawai(){
        if($this->session->userdata('login')){
            $data['datapegawai']=$this->AkunModel->getAkun();
            $this->load->view("data_pegawai",$data);
        }else{
            $this->load->view("login");
        }
    }
    public function datapegawaiadmin(){
        if($this->session->userdata('login')){
            $data['datapegawai']=$this->AkunModel->getAkun();
            $this->load->view("data_pegawaiadmin",$data);
        }else{
            $this->load->view("login");
        }
    }
    //fungsi panggil catatan
    public function bukacatatan(){
        if($this->session->userdata('login')){
            $data['catatanmasuk']= $this->AbsenModel->getAbsenMasuk();
            $this->load->view("catatan",$data);
        }else{
            $this->load->view("login");
        }
    }
    public function bukacatatanadmin(){
        if($this->session->userdata('login')){
            $data['catatanmasuk']= $this->AbsenModel->getAbsenMasuk();
            $this->load->view("catatanadmin",$data);
        }else{
            $this->load->view("login");
        }
    }

    public function bukacatatankeluar(){
        if($this->session->userdata('login')){
            $data['catatankeluar']= $this->AbsenModel->getAbsenKeluar();
            $this->load->view("catatankeluar",$data);
        }else{
            $this->load->view("login");
        }
    }
    public function bukacatatankeluaradmin(){
        if($this->session->userdata('login')){
            $data['catatankeluar']= $this->AbsenModel->getAbsenKeluar();
            $this->load->view("catatankeluaradmin",$data);
        }else{
            $this->load->view("login");
        }
    }
    //fungsi panggil daftar
    public function daftar(){
        //cek home login
        if($this->session->userdata('login')){
            //cek login admin
            if($this->session->userdata('tipe')=="admin"){
                $this->load->view("daftarakun");
            }else{
                $this->load->view("home");
            }
        }else{
            $this->load->view("login");
        }
    }

    //fungsi mendaftar (admin)
    public function prosesDaftar(){
        if($this->AkunModel->insertAkun()){
            redirect(site_url("home"));
        }else{
            redirect(site_url("home/daftarakun"));
        }
    }

    //fungsi update
    public function update($id){
        $data['akun'] = $this->AkunModel->getAkun();
        $data['akun'] = $this->AkunModel->getAkunById($id)->row();
        $this->load->view("akun_update",$data);
    }
    public function updateadmin($id){
        $data['akun'] = $this->AkunModel->getAkun();
        $data['akun'] = $this->AkunModel->getAkunById($id)->row();
        $this->load->view("akun_updateadmin",$data);
    }
    //proses update
    public function prosesUpdate($id){
        if($this->AkunModel->updateAkun($id)){
            redirect(site_url("home"));
        }else{
            redirect(site_url("home/akun_update/$id"));
        }
    }
    public function prosesUpdateAdmin($id){
        if($this->AkunModel->updateAkunAdmin($id)){
            redirect(site_url("home"));
        }else{
            redirect(site_url("home/akun_updateadmin/$id"));
        }
    }
    //fungsi hapus
    public function hapus($id){
        $this->AkunModel->deleteAkun($id);
        redirect(site_url("home/datapegawaiadmin"));
    }
    //fungsi login dan logout
    public function login(){
        if($this->AkunModel->login()->row()){
            $data=$this->db->get_where('akun',array('username'=> $this->input->post("username")))->row();
            $session_data = array(
                "login" => true,
                "username" => $this->input->post("username"),
                "nama" => $data->nama,
                "alamat" => $data->alamat,
                "no_tlp" => $data->no_tlp,
                "jabatan" => $data->jabatan,
                "tipe" => $data->tipe_akun,
                "id" => $data->id,
            );
            $this->session->set_userdata($session_data);
            redirect(site_url("home"));
        } else {
            $this->session->set_flashdata("error","Username atau Password Salah");
            redirect(site_url("home"));
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
?>