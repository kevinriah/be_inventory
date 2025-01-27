<?php
/* file stok barang model */

defined('BASEPATH') or exit('No direct script access allowed');

class Stokbarang_model extends CI_Model
{
    public $table = 'stok_barang';
    public $id = 'id_stok_barang';

    function __construct()
    {
        parent::__construct();
    }

    //untuk menampilkan semua data
    function get_all()
    {
        $this->db->select('*');
        $this->db->from('stok_barang');
        $this->db->join('master_barang', 'master_barang.id_barang = stok_barang.id_barang');
        $this->db->join('satuan', 'satuan.id_satuan = master_barang.id_satuan');
        $data = $this->db->get();
        return $data;
    }

    //untuk menampilkan data berdasarkan id
    function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('stok_barang');
        $this->db->where('id_stok_barang', $id);
        $data = $this->db->get();
        return $data;
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
        $this->db->where('id_stok_barang', $id);
        $delete = $this->db->delete($this->table);
        return $delete;
    }

     //untuk mengedit data
     function put($data, $id)
     {
         $this->db->where('id_stok_barang', $id);
         $update = $this->db->update($this->table, $data);
         return $update;
     }
}
