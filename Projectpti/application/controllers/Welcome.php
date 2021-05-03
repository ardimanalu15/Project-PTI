<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->view('home/landingpage');
	}
	public function LoginCon()
	{
		$this->load->view('home/login');
	}
	public function InfoDaftarCon()
	{
		$this->load->view('home/infodaftar');
	}
	public function ProfileCon()
	{
		$this->load->view('home/profile');
	}
	public function GuruCon()
	{
		$this->load->view('home/guru');
	}
	public function TesCon()
	{
		$this->load->view('home/tes');
	}
	public function DashAdminCon()
	{
		$this->load->view('home/dashAdmin');
	}
	public function DashKepsekCon()
	{
		$this->load->view('home/dashKepsek');
	}
	public function DataSiswaCon()
	{


		$this->load->view('home/datasiswa');
	}
	public function DataSiswaKepsekCon()
	{
		$this->load->view('home/datasiswakepsek');
	}
	public function DataGuruCon()
	{
		$this->load->view('home/dataguru');
	}
	public function DataGuruKepsekCon()
	{
		$this->load->view('home/datagurukepsek');
	}
	public function StatusSppCon()
	{
		$this->load->view('home/StatusSpp');
	}
	public function StatusSppKepsekCon()
	{
		$this->load->view('home/statussppkepsek');
	}
	public function LapKeuCon()
	{
		$this->load->view('home/LapKeu');
	}
	public function LapKeuKepsekCon()
	{
		$this->load->view('home/lapkeukepsek');
	}
	public function DashUserCon()
	{
		$this->load->view('home/dashUser');
	}
	public function StatusSppUserCon()
	{
		$this->load->view('home/statusSppUser');
	}
	public function TambahDataSiswaCon()
	{
		$this->form_validation->set_rules('Nama_Calon_Siswa', 'Nama', 'required|trim');
		$this->form_validation->set_rules('ttl', 'Ttl', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('umur', 'Umur', 'required|trim|integer');
		$this->form_validation->set_rules('noakte', 'Noakte', 'required|trim');
		$this->form_validation->set_rules('nokk', 'Nokk', 'required|trim');
		$this->form_validation->set_rules('tinggi', 'Tinggi', 'required|trim|integer');
		$this->form_validation->set_rules('berat', 'Berat', 'required|trim|integer');
		$this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required|trim');
		$this->form_validation->set_rules('nama_ayah', 'Nama_ayah', 'required|trim');
		$this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required|trim');
		$this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan_ayah', 'required|trim');
		$this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan_ibu', 'required|trim');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan_ayah', 'required|trim');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan_ibu', 'required|trim');
		$this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan_ayah', 'required|integer|trim');
		$this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan_ibu', 'required|integer|trim');
		$this->form_validation->set_rules('ttl_ayah', 'Ttl_ayah', 'required|trim');
		$this->form_validation->set_rules('ttl_ibu', 'Ttl_ibu', 'required|trim');
		$this->form_validation->set_rules('notelpon', 'Notelpon', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto', 'required|trim');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/tambahDataMurid');
		} else {
			$data = [
				'nama' => $this->input->post('Nama_Calon_Siswa'),
				'ttl' => $this->input->post('ttl'),
				'alamat' => $this->input->post('alamat'),
				'umur' => $this->input->post('umur'),
				'akte' => $this->input->post('noakte'),
				'kk' => $this->input->post('nokk'),
				'tinggi' => $this->input->post('tinggi'),
				'berat' => $this->input->post('berat'),
				'jk' => $this->input->post('jeniskelamin'),
				'namaayah' => $this->input->post('nama_ayah'),
				'namaibu' => $this->input->post('nama_ibu'),
				'pendidikanayah' => $this->input->post('pendidikan_ayah'),
				'pendidikanibu' => $this->input->post('pendidikan_ibu'),
				'pekerjaanayah' => $this->input->post('pekerjaan_ayah'),
				'pekerjaanibu' => $this->input->post('pekerjaan_ibu'),
				'penghasilanayah' => $this->input->post('penghasilan_ayah'),
				'penghasilanibu' => $this->input->post('penghasilan_ibu'),
				'ttlayah' => $this->input->post('ttl_ayah'),
				'ttlibu' => $this->input->post('ttl_ibu'),
				'telpon' => $this->input->post('notelpon'),
				'foto' => $this->input->post('foto'),


			];
			$this->db->insert('siswa', $data);
			$this->load->view('home/datasiswa');
		}
	}
	public function EditDataSiswaCon()
	{
		$this->load->view('home/editdatasiswa');
	}
	public function halamanpendaf()
	{
		$this->form_validation->set_rules('Nama_Calon_Siswa', 'Nama', 'required|trim');
		$this->form_validation->set_rules('ttl', 'Ttl', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('umur', 'Umur', 'required|trim|integer');
		$this->form_validation->set_rules('noakte', 'Noakte', 'required|trim');
		$this->form_validation->set_rules('nokk', 'Nokk', 'required|trim');
		$this->form_validation->set_rules('tinggi', 'Tinggi', 'required|trim|integer');
		$this->form_validation->set_rules('berat', 'Berat', 'required|trim|integer');
		$this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required|trim');
		$this->form_validation->set_rules('nama_ayah', 'Nama_ayah', 'required|trim');
		$this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required|trim');
		$this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan_ayah', 'required|trim');
		$this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan_ibu', 'required|trim');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan_ayah', 'required|trim');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan_ibu', 'required|trim');
		$this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan_ayah', 'required|integer|trim');
		$this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan_ibu', 'required|integer|trim');
		$this->form_validation->set_rules('ttl_ayah', 'Ttl_ayah', 'required|trim');
		$this->form_validation->set_rules('ttl_ibu', 'Ttl_ibu', 'required|trim');
		$this->form_validation->set_rules('notelpon', 'Notelpon', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto', 'required|trim');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/halamanpendaf');
		} else {
			$data = [
				'nama' => $this->input->post('Nama_Calon_Siswa'),
				'ttl' => $this->input->post('ttl'),
				'alamat' => $this->input->post('alamat'),
				'umur' => $this->input->post('umur'),
				'akte' => $this->input->post('noakte'),
				'kk' => $this->input->post('nokk'),
				'tinggi' => $this->input->post('tinggi'),
				'berat' => $this->input->post('berat'),
				'jk' => $this->input->post('jeniskelamin'),
				'namaayah' => $this->input->post('nama_ayah'),
				'namaibu' => $this->input->post('nama_ibu'),
				'pendidikanayah' => $this->input->post('pendidikan_ayah'),
				'pendidikanibu' => $this->input->post('pendidikan_ibu'),
				'pekerjaanayah' => $this->input->post('pekerjaan_ayah'),
				'pekerjaanibu' => $this->input->post('pekerjaan_ibu'),
				'penghasilanayah' => $this->input->post('penghasilan_ayah'),
				'penghasilanibu' => $this->input->post('penghasilan_ibu'),
				'ttlayah' => $this->input->post('ttl_ayah'),
				'ttlibu' => $this->input->post('ttl_ibu'),
				'telpon' => $this->input->post('notelpon'),
				'foto' => $this->input->post('foto'),


			];
			$this->db->insert('siswa', $data);
			$this->load->view('home/');
		}
	}
	public function hubungikami()
	{
		$this->load->view('home/hubungikami');
	}
	public function profilgurucon()
	{
		$this->load->view('home/profilguru');
	}
	public function TambahDataKeucon()
	{
		$this->load->view('home/tambahdatakeu');
	}
	public function EditDataKeucon()
	{
		$this->load->view('home/editdatakeu');
	}
	public function TambahDataGurucon()
	{
		$this->load->view('home/tambahdataguru');
	}
	public function EditDataGurucon()
	{
		$this->load->view('home/editdataguru');
	}
}
