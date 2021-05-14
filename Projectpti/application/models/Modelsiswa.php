<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelsiswa extends CI_Model
{
    public function Alldata()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function insert_data($data)
    {
        $this->db->insert('siswa', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('siswa');
    }
    public function ambil_id_siswa($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }
    public function ambildata($nik)
    {
        return $this->db->get_where('siswa', ['nik' => $nik])->row_array();
    }
    public function updatedata($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function jumlahdata()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        return $this->db->get()->num_rows();
    }
    public function jumlahlaki()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('jk', "Laki-Laki");
        return $this->db->get()->num_rows();
    }
    public function jumlahperempuan()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('jk', "Perempuan");
        return $this->db->get()->num_rows();
    }
}
