<?php
class Home extends CI_COntroller{
    public function __construct(){
       parent::__construct();
       $this->load->model("AkunModel");
       $tipe="admin";
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

    //fungsi mendaftar (admin)
    public function prosesDaftar(){

    }
    //fungsi login dan logout
    public function login(){
        if($this->AkunModel->login()->row()){
            $tipe=$this->db->get_where('akun',array('username'=> $this->input->post("username")))->row();
            $session_data = array(
                "login" => true,
                "username" => $this->input->post("username"),
                "tipe" => $tipe->tipe_akun,
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