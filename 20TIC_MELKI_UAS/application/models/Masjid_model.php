<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Masjid_model extends CI_Model
{
    public $table = 'kas_masjid';
    public $id = 'kas_masjid.id';
    public $nilai1, $nilai2, $hasil;

    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $this->db->get_where($this->table, ["id" => $id])->row();
        return $query->row_array();
    }
    // public function getById($id)
    // {
    //     $this->db->select('m.*,p.nama as prodi');
    //     $this->db->from('masjid m');
    //     $this->db->join('prodi p', 'm.prodi = p.id');
    //     $this->db->where('m.id', $id);
    //     $query = $this->db->get();
    //     return $query->row_array();
    // }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function tampilPemasukanMasjid()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Masuk');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampilPengeluaranMasjid()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Keluar');
        $query = $this->db->get();
        return $query->result();
    }
}
