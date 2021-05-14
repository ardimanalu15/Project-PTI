<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelkeu extends CI_Model
{
    public function Alldata()
    {
        return $this->db->get('keuangan')->result_array();
    }
    public function insert_data($data)
    {
        $this->db->insert('keuangan', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('keuangan');
    }

    public function ambil_id_keu($id)
    {
        return $this->db->get_where('keuangan', ['id' => $id])->row_array();
    }
    public function updatedata($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
