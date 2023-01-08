<?php
defined('BASEPATH') or exit('No direct script access allowed');
class JenisKurban_model extends CI_Model
{
    public $table = 'jenis_kurban';
    public $id = 'jenis_kurban.id';
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
    //     $this->db->select('k.*,jk.kode as JenisKurban');
    //     $this->db->from('kurban k');
    //     $this->db->join('jenis jk', 'k.JenisKurban = jk.id');
    //     $this->db->where('k.id', $id);
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

    public function totalPemasukanMasjid()
    {


        $this->db->select('sum(masuk) as masuk2 ');
        $this->db->from($this->table);
        // $this->db->where('jenis', 'Masuk');
        $query = $this->db->get();
        return $query->result_array();

        // $this->db->from($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
    }
}
