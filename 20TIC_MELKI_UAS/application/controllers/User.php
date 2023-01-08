<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Masjid_model');
        $this->load->model('Sosial_model');
    }

    public function index()
    {
        $data['judul'] = "User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['user'] = $this->User_model->tampilPemasukanUser();
        $data['getUser'] = $this->User_model->get();
        $data['masjid'] = $this->Masjid_model->get();
        $data['sosial'] = $this->Sosial_model->get();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_user", $data);
        $this->load->view("layout/user/footer", $data);
    }
}
