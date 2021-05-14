<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelspp extends CI_Model
{
    public function Alldata()
    {
        return $this->db->get('spp')->result_array();
    }
    public function insert_data($data)
    {
        $this->db->insert('spp', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('spp');
    }

    public function ambil_id_spp($id)
    {
        return $this->db->get_where('spp', ['id' => $id])->row_array();
    }
    public function ambildata($nik)
    {
        return $this->db->get_where('spp', ['nik' => $nik])->result_array();
    }
    public function updatedata($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
