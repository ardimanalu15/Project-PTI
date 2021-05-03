<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelguru extends CI_Model
{
    public function Alldata()
    {
        return $this->db->get('guru')->result_array();
    }
    public function insert_data($data)
    {
        $this->db->insert('guru', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('guru');
    }

    public function ambil_id_siswa($id)
    {
        return $this->db->get_where('guru', ['id' => $id])->row_array();
    }
    public function updatedata($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function jumlahdata()
    {
        $this->db->select('*');
        $this->db->from('guru');
        return $this->db->get()->num_rows();
    }
}
