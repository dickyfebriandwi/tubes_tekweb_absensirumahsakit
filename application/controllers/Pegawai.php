<?php
class Pegawai extends CI_COntroller{
    public function __construct(){
        parent::__construct();
        $this->load->model("AkunModel","",TRUE);
        $data['pegawai'] = $this->AkunModel->getAkun();
        $this->load->library('table');
    }
    public function index(){
        //cek home login
        if($this->session->userdata('login')){
            //cek login admin
            if($this->session->userdata('tipe')=="admin"){
                $this->load->view("datapegawaiadmin", $data);
            }else{
                $this->load->view("datapegawai", $data);
            }
        }else{
            $this->load->view("login");
        }
    }

    //fungsi mendaftar (admin)
    public function prosesDaftar(){

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