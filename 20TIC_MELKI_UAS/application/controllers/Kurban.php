<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurban extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kurban_model');
        $this->load->model('JenisKurban_model');
    }

    public function index()
    {
        $data['judul'] = "Kurban";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kurban'] = $this->Kurban_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("kurban/peserta_kurban", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function hewan_kurban()
    {
        $data['judul'] = "Kurban";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['JenisKurban'] = $this->JenisKurban_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("kurban/hewan_kurban", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Peserta Kurban";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['JenisKurban'] = $this->JenisKurban_model->get();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required', [
            'required' => 'Tahun Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_JenisKurban', 'id_JenisKurban', 'required', [
            'required' => 'Harga Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("kurban/tambah_peserta", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'tahun' => $this->input->post('tahun'),
                'id_JenisKurban' => $this->input->post('id_JenisKurban'),
                // 'id_JenisKurban' => $this->input->post('id_JenisKurban'),
                // 'harga' => $this->input->post('harga')
            ];
            // print_r($data);
            // die;

            $this->Kurban_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Kurban Berhasil Ditambah!</div>');
            redirect('Kurban');
        }
    }

    // public function edit($id)
    // {
    //     $data['judul'] = "Peserta Kurban";
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['kurban'] = $this->Kurban_model->getById($id);
    //     $data['JenisKurban'] = $this->JenisKurban_model->get();

    //     $this->form_validation->set_rules('nama', 'Nama', 'required', [
    //         'required' => 'Nama Wajib di isi'
    //     ]);
    //     $this->form_validation->set_rules('tahun', 'Tahun', 'required', [
    //         'required' => 'Tahun Wajib di isi'
    //     ]);
    //     $this->form_validation->set_rules('kode', 'Kode', 'required', [
    //         'required' => 'Kode Wajib di isi'
    //     ]);

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view("layout/admin/header", $data);
    //         $this->load->view("kurban/ubah_peserta", $data);
    //         $this->load->view("layout/admin/footer", $data);
    //     } else {
    //         $data = [
    //             'nama' => $this->input->post('nama'),
    //             'tahun' => $this->input->post('tahun'),
    //             'kode' => $this->input->post('kode')
    //         ];
    //         // print_r($data);
    //         // die;
    //         $id = $this->input->post('id');
    //         $this->Kurban_model->update(['id' => $id], $data);
    //         $this->session->set_flashdata('message', '<div class="mdc-button mdc-button--unelevated filled-button--success w-100" role="alert">Data Kurban Berhasil Diubah!</div>');
    //         redirect('Kurban');
    //     }
    // }

    public function edit($id)
    {
        // $data['judul'] = "Halaman Edit Mahasiswa";
        // $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        // $this->load->view("layout/header");
        // $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kurban'] = $this->Kurban_model->getById($id);
        $data['JenisKurban'] = $this->JenisKurban_model->get();

        $this->form_validation->set_rules('nama', 'Tanggal Pemasukan', 'required', [
            'required' => 'Tanggal Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun', 'Uraian Pemasukan', 'required', [
            'required' => 'Uraian Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_JenisKurban', 'masuk', 'required', [
            'required' => 'Pemasukan Masjid Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("kurban/ubah_peserta", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'tahun' => $this->input->post('tahun'),
                'id_JenisKurban' => $this->input->post('id_JenisKurban'),

                // 'keluar' => $this->input->post('keluar'),
                // 'jenis' => $this->input->post('jenis'),
                // 'gambar' => $this->input->post('gambar'),
            ];
            // print_r($data);
            // die;
            $id = $this->input->post('id');
            $this->Kurban_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Peserta Kurban Berhasil Diubah!</div>');
            redirect('Kurban');
        }
    }

    public function hapus($id)
    {
        // $this->Mahasiswa_model->delete($id);
        // redirect('Mahasiswa');
        $this->Kurban_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Peserta Kurban Dihapus! </div>');
        redirect('Kurban');
    }

    public function hapus_hewan($id)
    {
        // $this->Mahasiswa_model->delete($id);
        // redirect('Mahasiswa');
        $this->JenisKurban_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Hewan Kurban Dihapus! </div>');
        redirect('kurban/hewan_kurban');
    }

    public function tambah_hewan()
    {
        $data['judul'] = "Peserta Kurban";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['JenisKurban'] = $this->JenisKurban_model->get();

        $this->form_validation->set_rules('kode', 'Kode', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis', 'Jenis', 'required', [
            'required' => 'Jenis Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("kurban/tambah_hewan", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga')
            ];
            // print_r($data);
            // echo $upload_image;
            $this->JenisKurban_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Hewan Kurban Berhasil Ditambah! </div>');
            redirect('Kurban/hewan_kurban');
        }
    }

    public function edit_hewan($id)
    {
        // $data['judul'] = "Halaman Edit Mahasiswa";
        // $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        // $this->load->view("layout/header");
        // $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kurban'] = $this->JenisKurban_model->getById($id);
        $data['JenisKurban'] = $this->JenisKurban_model->get();

        $this->form_validation->set_rules('kode', 'Kode', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis', 'Jenis', 'required', [
            'required' => 'Jenis Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("kurban/ubah_hewan", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga')
                // 'keluar' => $this->input->post('keluar'),
                // 'jenis' => $this->input->post('jenis'),
                // 'gambar' => $this->input->post('gambar'),
            ];
            // print_r($data);
            // die;
            $id = $this->input->post('id');
            $this->JenisKurban_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Hewan Kurban Berhasil Diubah!</div>');
            redirect('Kurban/hewan_kurban');
        }
    }
}
