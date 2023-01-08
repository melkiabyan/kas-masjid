<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sosial extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sosial_model');
    }

    public function index()
    {
        $data['judul'] = "Sosial";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sosial'] = $this->Sosial_model->tampilPemasukanSosial();
        $data['getSosial'] = $this->Sosial_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("sosial/masuk/pemasukan", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function pemasukan()
    {
        $data['judul'] = "Sosial";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sosial'] = $this->Sosial_model->tampilPemasukanSosial();
        $data['getSosial'] = $this->Sosial_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("sosial/masuk/pemasukan", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function pengeluaran()
    {
        $data['judul'] = "Sosial";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sosial'] = $this->Sosial_model->tampilPengeluaranSosial();
        $data['getSosial'] = $this->Sosial_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("sosial/keluar/pengeluaran", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function rekap()
    {
        $data['judul'] = "Sosial";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sosial'] = $this->Sosial_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("sosial/rekap/rekap_kassosial", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function tambah()
    {
        // $data['judul'] = "Halaman Tambah Sosial";
        // $data['prodi'] = $this->Prodi_model->get();
        // $this->load->view("layout/header");
        // $this->load->view("sosial/vw_tambah_sosial", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Sosial";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sosial'] = $this->Sosial_model->get();

        $this->form_validation->set_rules('tgl', 'Tanggal Pemasukan', 'required', [
            'required' => 'Tanggal Pemasukan Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('uraian', 'Uraian Pemasukan', 'required', [
            'required' => 'Uraian Pemasukan Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('masuk', 'masuk', 'required', [
            'required' => 'Pemasukan Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_user', 'id_user', 'required', [
            'required' => 'id_user Masjid Wajib di isi'
        ]);
        // $this->form_validation->set_rules('keluar', 'Prodi', 'required', [
        //     'required' => 'Prodi Sosial Wajib di isi'
        // ]);
        // $this->form_validation->set_rules('jenis', 'Alamat', 'required', [
        //     'required' => 'Alamat Sosial Wajib di isi'
        // ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("sosial/masuk/tambah_pemasukan", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'tgl' => $this->input->post('tgl'),
                'uraian' => $this->input->post('uraian'),
                'masuk' => $this->input->post('masuk'),
                // 'keluar' => $this->input->post('keluar'),
                'jenis' => $this->input->post('jenis'),
                'id_user' => $this->input->post('id_user'),
            ];
            // print_r($data);
            $upload_image = $_FILES['gambar']['name'];
            // echo $upload_image;
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/sosial/masuk';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Sosial_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sosial Berhasil Ditambah!</div>');
            redirect('Sosial');
        }
    }

    public function tambah_pengeluaran()
    {
        // $data['judul'] = "Halaman Tambah Sosial";
        // $data['prodi'] = $this->Prodi_model->get();
        // $this->load->view("layout/header");
        // $this->load->view("sosial/vw_tambah_sosial", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Pengeluaran Kas Sosial";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sosial'] = $this->Sosial_model->get();

        $this->form_validation->set_rules('tgl', 'Tanggal Pengeluaran', 'required', [
            'required' => 'Tanggal Pengeluaran Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('uraian', 'Uraian Pengeluaran', 'required', [
            'required' => 'Uraian Pengeluaran Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('keluar', 'keluar', 'required', [
            'required' => 'Pengeluaran Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_user', 'id_user', 'required', [
            'required' => 'id_user Masjid Wajib di isi'
        ]);
        // $this->form_validation->set_rules('keluar', 'Prodi', 'required', [
        //     'required' => 'Prodi Sosial Wajib di isi'
        // ]);
        // $this->form_validation->set_rules('jenis', 'Alamat', 'required', [
        //     'required' => 'Alamat Sosial Wajib di isi'
        // ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("sosial/keluar/tambah_pengeluaran", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'tgl' => $this->input->post('tgl'),
                'uraian' => $this->input->post('uraian'),
                'keluar' => $this->input->post('keluar'),
                // 'keluar' => $this->input->post('keluar'),
                'jenis' => $this->input->post('jenis'),
                'id_user' => $this->input->post('id_user'),
            ];
            // print_r($data);
            $upload_image = $_FILES['gambar']['name'];
            // echo $upload_image;
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/sosial/keluar';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Sosial_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengeluaran Kas Sosial Berhasil Ditambah!</div>');
            redirect('Sosial/pengeluaran');
        }
    }

    public function edit($id)
    {
        // $data['judul'] = "Halaman Edit Mahasiswa";
        // $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        // $this->load->view("layout/header");
        // $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Sosial";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sosial'] = $this->Sosial_model->getById($id);

        $this->form_validation->set_rules('tgl', 'Tanggal Pemasukan', 'required', [
            'required' => 'Tanggal Pemasukan Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('uraian', 'Uraian Pemasukan', 'required', [
            'required' => 'Uraian Pemasukan Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('masuk', 'masuk', 'required', [
            'required' => 'Pemasukan Sosial Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("sosial/masuk/ubah_pemasukan", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'tgl' => $this->input->post('tgl'),
                'uraian' => $this->input->post('uraian'),
                'masuk' => $this->input->post('masuk'),
                // 'keluar' => $this->input->post('keluar'),
                // 'jenis' => $this->input->post('jenis'),
                // 'gambar' => $this->input->post('gambar'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/sosial/masuk/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['sosial']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/sosial/masuk/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Sosial_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sosial Berhasil Diubah!</div>');
            redirect('Sosial');
        }
    }

    public function edit_pengeluaran($id)
    {
        // $data['judul'] = "Halaman Edit Mahasiswa";
        // $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        // $this->load->view("layout/header");
        // $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Sosial";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sosial'] = $this->Sosial_model->getById($id);

        $this->form_validation->set_rules('tgl', 'Tanggal Pemasukan', 'required', [
            'required' => 'Tanggal Pemasukan Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('uraian', 'Uraian Pemasukan', 'required', [
            'required' => 'Uraian Pemasukan Sosial Wajib di isi'
        ]);
        $this->form_validation->set_rules('keluar', 'keluar', 'required', [
            'required' => 'Pemasukan Sosial Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("sosial/keluar/ubah_pengeluaran", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'tgl' => $this->input->post('tgl'),
                'uraian' => $this->input->post('uraian'),
                'keluar' => $this->input->post('keluar'),
                // 'keluar' => $this->input->post('keluar'),
                // 'jenis' => $this->input->post('jenis'),
                // 'gambar' => $this->input->post('gambar'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/sosial/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['sosial']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/sosial/keluar/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Sosial_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sosial Berhasil Diubah!</div>');
            redirect('Sosial/pengeluaran');
        }
    }


    public function hapus($id)
    {
        // $this->Mahasiswa_model->delete($id);
        // redirect('Mahasiswa');
        $this->Sosial_model->delete($id);
        $this->session->set_flashdata('message', '<div class="mdc-button mdc-button--unelevated filled-button--success w-100" role="alert">Data Sosial Berhasil Dihapus!</div>');
        redirect('Sosial');
    }
}
