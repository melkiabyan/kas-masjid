<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masjid_model');
        $this->load->model('Sosial_model');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['dashboard'] = $this->Dashboard_model->get();
        $data['masjid'] = $this->Masjid_model->get();
        $data['sosial'] = $this->Sosial_model->get();
        // print_r($data['masjid']);
        // die;
        $this->load->view("layout/admin/header", $data);
        $this->load->view("dashboard/vw_dashboard", $data);
        $this->load->view("layout/admin/footer", $data);
    }
}
