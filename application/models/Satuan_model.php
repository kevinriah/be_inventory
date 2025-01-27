<?php
/* file satuan model */

defined('BASEPATH') or exit('No direct script access allowed');

class Satuan_model extends CI_Model
{
    public $table = 'satuan';
    public $id = 'id_satuan';

    function __construct()
    {
        parent::__construct();
    }

    //untuk menampilkan semua data
    function get_all()
    {
        $this->db->select('*');
        $this->db->from('satuan');
        $data = $this->db->get();
        return $data;
    }

    //untuk menampilkan data berdasarkan id
    function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('satuan');
        $this->db->where('id_satuan', $id);
        $data = $this->db->get();
        return $data;
    }

    //untuk mengedit data
    function put($data, $id)
    {
        $this->db->where('id_satuan', $id);
        $update = $this->db->update($this->table, $data);
        return $update;
    }

    //untuk menambah data
    function post($data)
    {
        $insert = $this->db->insert($this->table, $data);
        return $insert;
    }

    //untuk menghapus data
    function delete($id)
    {
        $this->db->where('id_satuan', $id);
        $delete = $this->db->delete($this->table);
        return $delete;
    }
}
