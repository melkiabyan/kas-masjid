<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kurban_model extends CI_Model
{
    public $table = 'kurban';
    public $id = 'kurban.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('k.*,jk.kode as kode, jk.jenis as jenis, jk.harga as hwnharga');
        $this->db->distinct();
        $this->db->from('kurban k');
        $this->db->join('jenis_kurban jk', 'k.id_JenisKurban = jk.id');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
        // $this->db->from($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
    }

    // public function getJk()
    // {
    //     $this->db->select('k.*,jk.kode as kode, jk.jenis as jenis');
    //     $this->db->distinct();
    //     $this->db->from('kurban k');
    //     $this->db->join('jenis_kurban jk', 'k.kode = jk.id');
    //     $this->db->from($this->table);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

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
    //     $this->db->select('k.*,jk.kode as kode, jk.jenis as jenis');
    //     $this->db->from('kurban k');
    //     $this->db->join('jenis_kurban jk', 'k.id_JenisKurban = jk.id');
    //     $this->db->where('k.id', $id);
    //     $query = $this->db->get();
    //     return $query->row_array();
    //     // $this->db->from($this->table);
    //     // $this->db->where('id', $id);
    //     // $query = $this->db->get();
    //     // $this->db->get_where($this->table, ["id" => $id])->row();
    //     // return $query->row_array();
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
