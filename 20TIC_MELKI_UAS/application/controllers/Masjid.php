<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masjid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masjid_model');
    }

    public function index()
    {
        $data['judul'] = "Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masjid'] = $this->Masjid_model->tampilPemasukanMasjid();
        $data['getMasjid'] = $this->Masjid_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("masjid/masuk/pemasukan", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function pemasukan()
    {
        $data['judul'] = "Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['getMasjid'] = $this->Masjid_model->get();
        $data['masjid'] = $this->Masjid_model->tampilPemasukanMasjid();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("masjid/masuk/pemasukan", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function pengeluaran()
    {
        $data['judul'] = "Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masjid'] = $this->Masjid_model->tampilPengeluaranMasjid();
        $data['getMasjid'] = $this->Masjid_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("masjid/keluar/pengeluaran", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function rekap()
    {
        $data['judul'] = "Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masjid'] = $this->Masjid_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("masjid/rekap/rekap_kasmasjid", $data);
        $this->load->view("layout/admin/footer", $data);
    }

    public function tambah()
    {
        // $data['judul'] = "Halaman Tambah Masjid";
        // $data['prodi'] = $this->Prodi_model->get();
        // $this->load->view("layout/header");
        // $this->load->view("masjid/vw_tambah_masjid", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masjid'] = $this->Masjid_model->get();

        $this->form_validation->set_rules('tgl', 'Tanggal Pemasukan', 'required', [
            'required' => 'Tanggal Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('uraian', 'Uraian Pemasukan', 'required', [
            'required' => 'Uraian Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('masuk', 'masuk', 'required', [
            'required' => 'Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_user', 'id_user', 'required', [
            'required' => 'id_user Masjid Wajib di isi'
        ]);
        // $this->form_validation->set_rules('keluar', 'Prodi', 'required', [
        //     'required' => 'Prodi Masjid Wajib di isi'
        // ]);
        // $this->form_validation->set_rules('jenis', 'Alamat', 'required', [
        //     'required' => 'Alamat Masjid Wajib di isi'
        // ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("masjid/masuk/tambah_pemasukan", $data);
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
            // die;
            $upload_image = $_FILES['gambar']['name'];
            // echo $upload_image;
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/masjid/masuk';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Masjid_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Masjid Berhasil Ditambah!</div>');
            redirect('Masjid');
        }
    }

    public function tambah_pengeluaran()
    {
        // $data['judul'] = "Halaman Tambah Masjid";
        // $data['prodi'] = $this->Prodi_model->get();
        // $this->load->view("layout/header");
        // $this->load->view("masjid/vw_tambah_masjid", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Pengeluaran Kas Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masjid'] = $this->Masjid_model->get();

        $this->form_validation->set_rules('tgl', 'Tanggal Pengeluaran', 'required', [
            'required' => 'Tanggal Pengeluaran Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('uraian', 'Uraian Pengeluaran', 'required', [
            'required' => 'Uraian Pengeluaran Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('keluar', 'keluar', 'required', [
            'required' => 'Pengeluaran Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_user', 'id_user', 'required', [
            'required' => 'id_user Masjid Wajib di isi'
        ]);
        // $this->form_validation->set_rules('keluar', 'Prodi', 'required', [
        //     'required' => 'Prodi Masjid Wajib di isi'
        // ]);
        // $this->form_validation->set_rules('jenis', 'Alamat', 'required', [
        //     'required' => 'Alamat Masjid Wajib di isi'
        // ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("masjid/keluar/tambah_pengeluaran", $data);
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
                $config['upload_path'] = './assets/img/masjid/keluar';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Masjid_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengeluaran Kas Masjid Berhasil Ditambah!</div>');
            redirect('Masjid/pengeluaran');
        }
    }

    public function edit($id)
    {
        // $data['judul'] = "Halaman Edit Mahasiswa";
        // $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        // $this->load->view("layout/header");
        // $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masjid'] = $this->Masjid_model->getById($id);

        $this->form_validation->set_rules('tgl', 'Tanggal Pemasukan', 'required', [
            'required' => 'Tanggal Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('uraian', 'Uraian Pemasukan', 'required', [
            'required' => 'Uraian Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('masuk', 'masuk', 'required', [
            'required' => 'Pemasukan Masjid Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("masjid/masuk/ubah_pemasukan", $data);
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
            // print_r($data);
            // die;
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/masjid/masuk';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['masjid']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/masjid/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Masjid_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Masjid Berhasil Diubah!</div>');
            redirect('Masjid');
        }
    }

    public function edit_pengeluaran($id)
    {
        // $data['judul'] = "Halaman Edit Mahasiswa";
        // $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        // $this->load->view("layout/header");
        // $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Masjid";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masjid'] = $this->Masjid_model->getById($id);

        $this->form_validation->set_rules('tgl', 'Tanggal Pemasukan', 'required', [
            'required' => 'Tanggal Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('uraian', 'Uraian Pemasukan', 'required', [
            'required' => 'Uraian Pemasukan Masjid Wajib di isi'
        ]);
        $this->form_validation->set_rules('keluar', 'keluar', 'required', [
            'required' => 'Pemasukan Masjid Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("masjid/keluar/ubah_pengeluaran", $data);
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
                $config['upload_path'] = './assets/img/masjid/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['masjid']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/masjid/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Masjid_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Masjid Berhasil Diubah!</div>');
            redirect('Masjid/pengeluaran');
        }
    }


    public function hapus($id)
    {
        // $this->Mahasiswa_model->delete($id);
        // redirect('Mahasiswa');
        $this->Masjid_model->delete($id);
        $this->session->set_flashdata('message', '<div class="mdc-button mdc-button--unelevated filled-button--success w-100" role="alert">Data Masjid Berhasil Dihapus!</div>');
        redirect('Masjid');
    }
}
