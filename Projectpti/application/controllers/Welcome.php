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
<<<<<<< HEAD
=======
		// if (!$this->session->userdata('username')) {
		// 	redirect('Welcome/LoginCon');
		// }
>>>>>>> d5bee8e9af6bfc8b02b1db55a2274e9af51ab526
	}


	public function index()
	{
		$this->load->view('home/landingpage');
	}
	public function LoginCon()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('home/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('akun', ['username' => $username])->row_array();

		if ($user) {
			if ($user['is_active'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'role_id' => $user['role_id'],
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('Welcome/DashAdminCon');
					} else if ($user['role_id'] == 3) {
						redirect('Welcome/DashKepsekCon');
					} else {
						redirect('Welcome/DashUserCon');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert
			 			alert-danger" role="alert">Password salah! </div>');
					redirect('Welcome/LoginCon');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert
			 	alert-danger" role="alert">Akun belum diaktifkan!</div>');
				redirect('Welcome/LoginCon');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert
			 alert-danger" role="alert">Akun belum terdaftar!</div>');
			redirect('Welcome/LoginCon');
		}
		if (!$this->session->userdata('username')) {
			redirect('Welcome/LoginCon');
		}
	}



	public function RegisterCon()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[akun.username]', ['is_unique' => 'username sudah dipakai!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/Register');
		} else {
			$nama = $this->input->post('nama', TRUE);
			$nik = $this->input->post('nik', TRUE);
			$username =  htmlspecialchars($this->input->post('username', true));
			$password =  password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

			$data = array(
				'nama' => $nama,
				'nik' => $nik,
				'username' => $username,
				'password' => $password,
				'last' => $last,
				'role_id' => 2,
				'is_active' => 1,
			);
			$this->Modelakun->insert_data($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun sudah Berhasil Ditambahkan!</div>');
			redirect('Welcome/LoginCon');
		}
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
		$data['jlh'] = $this->Modelsiswa->jumlahdata();
		$data['jlhguru'] = $this->Modelguru->jumlahdata();
		$this->load->view('home/dashAdmin', $data);
	}
	public function DashKepsekCon()
	{
		$data['jlh'] = $this->Modelsiswa->jumlahdata();
		$data['jlhguru'] = $this->Modelguru->jumlahdata();
		$this->load->view('home/dashKepsek', $data);
	}
	public function DataSiswaCon()
	{
		$data['jlh'] = $this->Modelsiswa->jumlahdata();
		$data['laki'] = $this->Modelsiswa->jumlahlaki();
		$data['perempuan'] = $this->Modelsiswa->jumlahperempuan();
		$data['siswa'] = $this->Modelsiswa->Alldata();
		$this->load->view('home/datasiswa', $data);
	}
	public function DataSiswaKepsekCon()
	{
		$data['jlh'] = $this->Modelsiswa->jumlahdata();
		$data['laki'] = $this->Modelsiswa->jumlahlaki();
		$data['perempuan'] = $this->Modelsiswa->jumlahperempuan();
		$data['siswa'] = $this->Modelsiswa->Alldata();
		$this->load->view('home/datasiswakepsek', $data);
	}
	public function DataGuruCon()
	{
		$data['jlh'] = $this->Modelguru->jumlahdata();
		$data['guru'] = $this->Modelguru->Alldata();
		$this->load->view('home/dataguru', $data);
	}
	public function DataGuruKepsekCon()
	{
		$data['jlh'] = $this->Modelguru->jumlahdata();
		$data['guru'] = $this->Modelguru->Alldata();
		$this->load->view('home/datagurukepsek', $data);
	}
	public function DataAkunCon()
	{
		$data['jlh'] = $this->Modelakun->jumlahdata();
		$data['akun'] = $this->Modelakun->Alldata();
		$this->load->view('home/dataakun', $data);
	}
	public function DataAkunKepsekCon()
	{
		$data['jlh'] = $this->Modelakun->jumlahdata();
		$data['akun'] = $this->Modelakun->Alldata();
		$this->load->view('home/dataakunkepsek', $data);
	}
	public function StatusSppCon()
	{
		$data['jlh'] = $this->Modelsiswa->jumlahdata();
		$data['status'] = $this->Modelspp->Alldata();
		$this->load->view('home/StatusSpp', $data);
	}
	public function StatusSppKepsekCon()
	{
		$data['jlh'] = $this->Modelsiswa->jumlahdata();
		$data['status'] = $this->Modelspp->Alldata();
		$this->load->view('home/statussppkepsek', $data);
	}
	public function LapKeuCon()
	{
		$data['keuangan'] = $this->Modelkeu->Alldata();
		$this->load->view('home/LapKeu', $data);
	}
	public function LapKeuKepsekCon()
	{
		$data['keuangan'] = $this->Modelkeu->Alldata();
		$this->load->view('home/lapkeukepsek', $data);
	}
	public function DashUserCon()
	{
		$data['user'] = $this->db->get_where('akun', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->view('home/dashUser', $data);
	}
	public function StatusSppUserCon()
	{
		$this->load->view('home/statusSppUser');
	}
	public function TambahDataAkunCon()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[akun.username]', ['is_unique' => 'username sudah dipakai!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim');




		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/tambahdataakun');
		} else {


			$nama = $this->input->post('nama', TRUE);
			$nik = $this->input->post('nik', TRUE);
			$username =  htmlspecialchars($this->input->post('username', true));
			$password =  password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

			$data = array(
				'nama' => $nama,
				'nik' => $nik,
				'username' => $username,
				'password' => $password,
				'last' => $last,
				'role_id' => 2,
				'is_active' => 1,
			);
			$this->Modelakun->insert_data($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun sudah Berhasil Ditambahkan!</div>');
			redirect('Welcome/DataAkunCon');
		}
		// $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		// $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		// $this->form_validation->set_rules('username', 'Username', 'required|trim');
		// $this->form_validation->set_rules('password', 'Password', 'required');



		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->view('home/tambahdataakun');
		// } else {


		// 	$nama = $this->input->post('nama', TRUE);
		// 	$nik = $this->input->post('nik', TRUE);
		// 	$username = $this->input->post('username', TRUE);
		// 	$password = $this->input->post('password', TRUE);
		// 	$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

		// 	$data = array(
		// 		'nama' => $nama,
		// 		'nik' => $nik,
		// 		'username' => $username,
		// 		'password' => $password,
		// 		'last' => $last,
		// 	);



		// 	$this->Modelakun->insert_data($data);
		// 	$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
		// 	redirect('Welcome/DataAkunCon');
		// }
	}


	public function TambahDataSiswaCon()
	{
		$this->form_validation->set_rules('Nama_Calon_Siswa', 'Nama', 'required|trim');
		$this->form_validation->set_rules('ttl', 'Tanggal lahir', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('umur', 'Umur', 'required|trim|integer');
		$this->form_validation->set_rules('noakte', 'Nomor akte', 'required|trim');
		$this->form_validation->set_rules('nokk', 'Nomor KK', 'required|trim');
		$this->form_validation->set_rules('tinggi', 'Tinggi', 'required|trim|integer');
		$this->form_validation->set_rules('berat', 'Berat', 'required|trim|integer');
		$this->form_validation->set_rules('jeniskelamin', 'Jenis kelamin', 'required|trim');
		$this->form_validation->set_rules('nama_ayah', 'Nama ayah', 'required|trim');
		$this->form_validation->set_rules('nama_ibu', 'Nama ibu', 'required|trim');
		$this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan ayah', 'required|trim');
		$this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan ibu', 'required|trim');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan ayah', 'required|trim');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan ibu', 'required|trim');
		$this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan ayah', 'required|integer|trim');
		$this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan ibu', 'required|integer|trim');
		$this->form_validation->set_rules('ttl_ayah', 'Tanggal lahir ayah', 'required|trim');
		$this->form_validation->set_rules('ttl_ibu', 'Tanggal lahir ibu', 'required|trim');
		$this->form_validation->set_rules('notelpon', 'Nomor telpon', 'required|trim');



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/tambahDataMurid');
		} else {


			$nama = $this->input->post('Nama_Calon_Siswa', TRUE);
			$ttl = $this->input->post('ttl', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$umur = $this->input->post('umur', TRUE);
			$akte = $this->input->post('noakte', TRUE);
			$kk = $this->input->post('nokk', TRUE);
			$tinggi = $this->input->post('tinggi', TRUE);
			$berat = $this->input->post('berat', TRUE);
			$jk = $this->input->post('jeniskelamin', TRUE);
			$namaayah = $this->input->post('nama_ayah', TRUE);
			$namaibu = $this->input->post('nama_ibu', TRUE);
			$pendidikanayah = $this->input->post('pendidikan_ayah', TRUE);
			$pendidikanibu = $this->input->post('pendidikan_ibu', TRUE);
			$pekerjaanayah = $this->input->post('pekerjaan_ayah', TRUE);
			$pekerjaanibu = $this->input->post('pekerjaan_ibu', TRUE);
			$penghasilanayah = $this->input->post('penghasilan_ayah', TRUE);
			$penghasilanibu = $this->input->post('penghasilan_ibu', TRUE);
			$ttlayah = $this->input->post('ttl_ayah', TRUE);
			$ttlibu = $this->input->post('ttl_ibu', TRUE);
			$telpon = $this->input->post('notelpon', TRUE);
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());;
			// $image = $_FILES['image']['name'];
			// if ($image) {
			// 	$config['upload_path'] = './assets/fotosiswa'; //letak folder file yang akan diupload
			// 	$config['allowed_types'] = 'jpg|png|img|jpeg'; //jenis file yang dapat diterima
			// 	$config['max_size'] = '2048'; // kb
			// 	$this->load->library('upload', $config); //deklarasi library upload (config)

			// 	if ($this->upload->do_upload('foto')) {
			// 		$foto =  $this->upload->data('file_name');
			// 		$this->db->set('foto');
			// 	} else {
			// 		echo $this->upload->display_errors();
			// 	}
			// }


			$data = array(
				'nama' => $nama,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'umur' => $umur,
				'akte' => $akte,
				'kk' => $kk,
				'tinggi' => $tinggi,
				'berat' => $berat,
				'jk' => $jk,
				'namaayah' => $namaayah,
				'namaibu' => $namaibu,
				'pendidikanayah' => $pendidikanayah,
				'pendidikanibu' => $pendidikanibu,
				'pekerjaanayah' => $pekerjaanayah,
				'pekerjaanibu' => $pekerjaanibu,
				'penghasilanayah' => $penghasilanayah,
				'penghasilanibu' => $penghasilanibu,
				'ttlayah' => $ttlayah,
				'ttlibu' => $ttlibu,
				'telpon' => $telpon,
				'last' => $last,
				// 'foto' => 'default.jpg ',
			);


			$this->Modelsiswa->insert_data($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
			redirect('Welcome/DataSiswaCon');
		}
	}

	public function EditDataSiswaCon($id)
	{
		$data['siswa'] = $this->Modelsiswa->ambil_id_siswa($id);
		$this->load->view('home/editdatasiswa', $data);
	}
	public function EditDataGurucon($id)
	{
		$data['guru'] = $this->Modelguru->ambil_id_guru($id);
		$this->load->view('home/editdataguru', $data);
	}
	public function EditDataSppCon($id)
	{
		$data['status'] = $this->Modelspp->ambil_id_spp($id);
		$this->load->view('home/editdataspp', $data);
	}
	public function EditDataKeucon($id)
	{
		$data['keuangan'] = $this->Modelkeu->ambil_id_keu($id);
		$this->load->view('home/editdatakeu', $data);
	}
	public function EditDataAkunCon($id)
	{
		$data['akun'] = $this->Modelakun->ambil_id_akun($id);
		$this->load->view('home/editdataakun', $data);
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
		// $this->form_validation->set_rules('foto', 'Foto', 'required|trim');
		$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

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
				'last' => $last,
				// 'foto' => $this->input->post('foto'),


			];
			$this->db->insert('siswa', $data);
			redirect('Welcome/InfoDaftarCon');
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
		$this->form_validation->set_rules('tanggalKeu', 'TanggalKeu', 'required|trim');
		$this->form_validation->set_rules('jenisTransaksi', 'JenisTransaksi', 'required|trim');
		$this->form_validation->set_rules('banyak', 'Banyak', 'required|trim|integer');
		$this->form_validation->set_rules('satuan', 'Satuan', 'required|trim|integer');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('kas', 'Kas', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/tambahdatakeu');
		} else {


			$nama = $this->input->post('tanggalKeu', TRUE);
			$jk = $this->input->post('jenisTransaksi', TRUE);
			$banyak = $this->input->post('banyak', TRUE);
			$satuan = $this->input->post('satuan', TRUE);
			$ttl = $this->input->post('kategori', TRUE);
			$alamat = $this->input->post('kas', TRUE);
			$jlh = $banyak * $satuan;
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

			$data = array(
				'tanggal' => $nama,
				'jenistransaksi' => $jk,
				'banyak' => $banyak,
				'satuan' => $satuan,
				'kategori' => $ttl,
				'jeniskas' => $alamat,
				'jumlah' => $jlh,
				'last' => $last,
			);


			$this->Modelkeu->insert_data($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
			redirect('Welcome/LapKeuCon');
		}
	}
	public function TambahDataGurucon()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jeniskelamin', 'Jenis kelamin', 'required|trim');
		$this->form_validation->set_rules('ttl', 'Tanggal lahir', 'required|trim');
		$this->form_validation->set_rules('alamatguru', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('NIK', 'Nik', 'required|trim');
		$this->form_validation->set_rules('NIP', 'Nip', 'required|trim');
		$this->form_validation->set_rules('NUPTK', 'Nuptk', 'required|trim');
		$this->form_validation->set_rules('jenisPTK', 'JenisPTK', 'required|trim');
		$this->form_validation->set_rules('NPSN', 'Npsn', 'required|trim');
		// $this->form_validation->set_rules('nama_ayah', 'Nama ayah', 'required|trim');
		// $this->form_validation->set_rules('nama_ibu', 'Nama ibu', 'required|trim');
		// $this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan ayah', 'required|trim');
		// $this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan ibu', 'required|trim');
		// $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan ayah', 'required|trim');
		// $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan ibu', 'required|trim');
		// $this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan ayah', 'required|integer|trim');
		// $this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan ibu', 'required|integer|trim');
		// $this->form_validation->set_rules('ttl_ayah', 'Tanggal lahir ayah', 'required|trim');
		// $this->form_validation->set_rules('ttl_ibu', 'Tanggal lahir ibu', 'required|trim');
		// $this->form_validation->set_rules('notelpon', 'Nomor telpon', 'required|trim');



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/tambahdataguru');
		} else {


			$nama = $this->input->post('nama', TRUE);
			$jk = $this->input->post('jeniskelamin', TRUE);
			$ttl = $this->input->post('ttl', TRUE);
			$alamat = $this->input->post('alamatguru', TRUE);
			$nik = $this->input->post('NIK', TRUE);
			$nip = $this->input->post('NIP', TRUE);
			$nuptk = $this->input->post('NUPTK', TRUE);
			$jenis = $this->input->post('jenisPTK', TRUE);
			$npsn = $this->input->post('NPSN', TRUE);
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());
			// $namaayah = $this->input->post('nama_ayah', TRUE);
			// $namaibu = $this->input->post('nama_ibu', TRUE);
			// $pendidikanayah = $this->input->post('pendidikan_ayah', TRUE);
			// $pendidikanibu = $this->input->post('pendidikan_ibu', TRUE);
			// $pekerjaanayah = $this->input->post('pekerjaan_ayah', TRUE);
			// $pekerjaanibu = $this->input->post('pekerjaan_ibu', TRUE);
			// $penghasilanayah = $this->input->post('penghasilan_ayah', TRUE);
			// $penghasilanibu = $this->input->post('penghasilan_ibu', TRUE);
			// $ttlayah = $this->input->post('ttl_ayah', TRUE);
			// $ttlibu = $this->input->post('ttl_ibu', TRUE);
			// $telpon = $this->input->post('notelpon', TRUE);
			// $image = $_FILES['image']['name'];
			// if ($image) {
			// 	$config['upload_path'] = './assets/fotosiswa'; //letak folder file yang akan diupload
			// 	$config['allowed_types'] = 'jpg|png|img|jpeg'; //jenis file yang dapat diterima
			// 	$config['max_size'] = '2048'; // kb
			// 	$this->load->library('upload', $config); //deklarasi library upload (config)

			// 	if ($this->upload->do_upload('foto')) {
			// 		$foto =  $this->upload->data('file_name');
			// 		$this->db->set('foto');
			// 	} else {
			// 		echo $this->upload->display_errors();
			// 	}
			// }


			$data = array(
				'namaguru' => $nama,
				'jk' => $jk,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'NIK' => $nik,
				'NIP' => $nip,
				'NUPTK' => $nuptk,
				'JPTK' => $jenis,
				'NPSN' => $npsn,
				'last' => $last,
				// 'namaayah' => $namaayah,
				// 'namaibu' => $namaibu,
				// 'pendidikanayah' => $pendidikanayah,
				// 'pendidikanibu' => $pendidikanibu,
				// 'pekerjaanayah' => $pekerjaanayah,
				// 'pekerjaanibu' => $pekerjaanibu,
				// 'penghasilanayah' => $penghasilanayah,
				// 'penghasilanibu' => $penghasilanibu,
				// 'ttlayah' => $ttlayah,
				// 'ttlibu' => $ttlibu,
				// 'telpon' => $telpon,
				// 'foto' => 'default.jpg ',
			);


			$this->Modelguru->insert_data($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
			redirect('Welcome/DataGuruCon');
		}
	}

	public function TambahDataSppCon()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required|trim|integer');
		$this->form_validation->set_rules('tanggalbayar', 'Tanggalbayar', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/tambahdataspp');
		} else {


			$nama = $this->input->post('nama', TRUE);
			$nik = $this->input->post('nik', TRUE);
			$nominal = $this->input->post('nominal', TRUE);
			$tanggal = $this->input->post('tanggalbayar', TRUE);
			$status = $this->input->post('status', TRUE);
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

			$data = array(
				'nama' => $nama,
				'nik' => $nik,
				'nominal' => $nominal,
				'tglbayar' => $tanggal,
				'status' => $status,
				'last' => $last,
			);


			$this->Modelspp->insert_data($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
			redirect('Welcome/StatusSppCon');
		}
	}

	public function DeleteDataSiswaCon($id)
	{
		$this->Modelsiswa->hapus_data($id);
		$this->DataSiswaCon();
	}
	public function DeleteDataGuruCon($id)
	{
		$this->Modelguru->hapus_data($id);
		$this->DataGuruCon();
	}
	public function DeleteDataKeuCon($id)
	{
		$this->Modelkeu->hapus_data($id);
		$this->LapKeuCon();
	}
	public function DeleteDataAkunCon($id)
	{
		$this->Modelakun->hapus_data($id);
		$this->DataAkunCon();
	}
	public function DeleteDataSppCon($id)
	{
		$this->Modelspp->hapus_data($id);
		$this->StatusSppCon();
	}
	public function UpdateDataSiswaCon()
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


		$id = $this->input->post('id');

		if ($this->form_validation->run() == FALSE) {
			$this->EditDataSiswaCon($id);
		} else {
			$nama = $this->input->post('Nama_Calon_Siswa');
			$ttl = $this->input->post('ttl');
			$alamat = $this->input->post('alamat');
			$umur = $this->input->post('umur');
			$akte = $this->input->post('noakte');
			$kk = $this->input->post('nokk');
			$tinggi = $this->input->post('tinggi');
			$berat = $this->input->post('berat');
			$jk = $this->input->post('jeniskelamin');
			$namaayah = $this->input->post('nama_ayah');
			$namaibu = $this->input->post('nama_ibu');
			$pendidikanayah = $this->input->post('pendidikan_ayah');
			$pendidikanibu = $this->input->post('pendidikan_ibu');
			$pekerjaanayah = $this->input->post('pekerjaan_ayah');
			$pekerjaanibu = $this->input->post('pekerjaan_ibu');
			$penghasilanayah = $this->input->post('penghasilan_ayah');
			$penghasilanibu = $this->input->post('penghasilan_ibu');
			$ttlayah = $this->input->post('ttl_ayah');
			$ttlibu = $this->input->post('ttl_ibu');
			$telpon = $this->input->post('notelpon');
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());
			// if (isset($_FILES['image'])) {
			// $upload_image = $_FILES['image']['name'];
			// if ($upload_image) {
			// 	$config['allowed_types'] 		= 'jpg|png|img'; //jenis file yang dapat diterima
			// 	$config['max_size'] 			= '2048'; // kb
			// 	$config['upload_path']			= './assets/foto/'; //letak folder file yang akan diupload
			// 	$this->load->library('upload', $config); //deklarasi library upload (config)
			// 	// $this->upload->initialize($config);
			// 	// $this->db->set('foto', $new_image);
			// 	if ($this->upload->do_upload('image')) {
			// 		$new_image = $this->upload->data('file_name');
			// 	} else {

			// 		echo $this->upload->display_errors();
			// 	}
			// }
			$data = array(
				'nama' => $nama,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'umur' => $umur,
				'akte' => $akte,
				'kk' => $kk,
				'tinggi' => $tinggi,
				'berat' => $berat,
				'jk' => $jk,
				'namaayah' => $namaayah,
				'namaibu' => $namaibu,
				'pendidikanayah' => $pendidikanayah,
				'pendidikanibu' => $pendidikanibu,
				'pekerjaanayah' => $pekerjaanayah,
				'pekerjaanibu' => $pekerjaanibu,
				'penghasilanayah' => $penghasilanayah,
				'penghasilanibu' => $penghasilanibu,
				'ttlayah' => $ttlayah,
				'ttlibu' => $ttlibu,
				'telpon' => $telpon,
				'last' => $last,
				// 'foto' => $new_image,
			);
			$where = array('id' => $id);
			$this->Modelsiswa->updatedata($where, $data, 'siswa');
			// }
			$this->session->set_flashdata('Massage', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
			redirect('Welcome/DataSiswaCon');
		}
	}
	public function UpdateDataGuruCon()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jeniskelamin', 'Jenis kelamin', 'required|trim');
		$this->form_validation->set_rules('ttl', 'Tanggal lahir', 'required|trim');
		$this->form_validation->set_rules('alamatguru', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('NIK', 'Nik', 'required|trim');
		$this->form_validation->set_rules('NIP', 'Nip', 'required|trim');
		$this->form_validation->set_rules('NUPTK', 'Nuptk', 'required|trim');
		$this->form_validation->set_rules('jenisPTK', 'JenisPTK', 'required|trim');
		$this->form_validation->set_rules('NPSN', 'Npsn', 'required|trim');
		// $this->form_validation->set_rules('nama_ayah', 'Nama ayah', 'required|trim');
		// $this->form_validation->set_rules('nama_ibu', 'Nama ibu', 'required|trim');
		// $this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan ayah', 'required|trim');
		// $this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan ibu', 'required|trim');
		// $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan ayah', 'required|trim');
		// $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan ibu', 'required|trim');
		// $this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan ayah', 'required|integer|trim');
		// $this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan ibu', 'required|integer|trim');
		// $this->form_validation->set_rules('ttl_ayah', 'Tanggal lahir ayah', 'required|trim');
		// $this->form_validation->set_rules('ttl_ibu', 'Tanggal lahir ibu', 'required|trim');
		// $this->form_validation->set_rules('notelpon', 'Nomor telpon', 'required|trim');

		$id = $this->input->post('id');

		if ($this->form_validation->run() == FALSE) {
			$this->EditDataGuruCon($id);
		} else {


			$nama = $this->input->post('nama', TRUE);
			$jk = $this->input->post('jeniskelamin', TRUE);
			$ttl = $this->input->post('ttl', TRUE);
			$alamat = $this->input->post('alamatguru', TRUE);
			$nik = $this->input->post('NIK', TRUE);
			$nip = $this->input->post('NIP', TRUE);
			$nuptk = $this->input->post('NUPTK', TRUE);
			$jenis = $this->input->post('jenisPTK', TRUE);
			$npsn = $this->input->post('NPSN', TRUE);
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());
			// $namaayah = $this->input->post('nama_ayah', TRUE);
			// $namaibu = $this->input->post('nama_ibu', TRUE);
			// $pendidikanayah = $this->input->post('pendidikan_ayah', TRUE);
			// $pendidikanibu = $this->input->post('pendidikan_ibu', TRUE);
			// $pekerjaanayah = $this->input->post('pekerjaan_ayah', TRUE);
			// $pekerjaanibu = $this->input->post('pekerjaan_ibu', TRUE);
			// $penghasilanayah = $this->input->post('penghasilan_ayah', TRUE);
			// $penghasilanibu = $this->input->post('penghasilan_ibu', TRUE);
			// $ttlayah = $this->input->post('ttl_ayah', TRUE);
			// $ttlibu = $this->input->post('ttl_ibu', TRUE);
			// $telpon = $this->input->post('notelpon', TRUE);
			// $image = $_FILES['image']['name'];
			// if ($image) {
			// 	$config['upload_path'] = './assets/fotosiswa'; //letak folder file yang akan diupload
			// 	$config['allowed_types'] = 'jpg|png|img|jpeg'; //jenis file yang dapat diterima
			// 	$config['max_size'] = '2048'; // kb
			// 	$this->load->library('upload', $config); //deklarasi library upload (config)

			// 	if ($this->upload->do_upload('foto')) {
			// 		$foto =  $this->upload->data('file_name');
			// 		$this->db->set('foto');
			// 	} else {
			// 		echo $this->upload->display_errors();
			// 	}
			// }


			$data = array(
				'namaguru' => $nama,
				'jk' => $jk,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'NIK' => $nik,
				'NIP' => $nip,
				'NUPTK' => $nuptk,
				'JPTK' => $jenis,
				'NPSN' => $npsn,
				'last' => $last,
				// 'namaayah' => $namaayah,
				// 'namaibu' => $namaibu,
				// 'pendidikanayah' => $pendidikanayah,
				// 'pendidikanibu' => $pendidikanibu,
				// 'pekerjaanayah' => $pekerjaanayah,
				// 'pekerjaanibu' => $pekerjaanibu,
				// 'penghasilanayah' => $penghasilanayah,
				// 'penghasilanibu' => $penghasilanibu,
				// 'ttlayah' => $ttlayah,
				// 'ttlibu' => $ttlibu,
				// 'telpon' => $telpon,
				// 'foto' => 'default.jpg ',
			);

			$where = array('id' => $id);
			$this->Modelguru->updatedata($where, $data, 'guru');
			// }
			$this->session->set_flashdata('Massage', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
			redirect('Welcome/DataGuruCon');
		}
	}

	public function UpdateDataKeuCon()
	{

		$this->form_validation->set_rules('tanggalKeu', 'TanggalKeu', 'required|trim');
		$this->form_validation->set_rules('jenisTransaksi', 'JenisTransaksi', 'required|trim');
		$this->form_validation->set_rules('banyak', 'Banyak', 'required|trim|integer');
		$this->form_validation->set_rules('satuan', 'Satuan', 'required|trim|integer');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('kas', 'Kas', 'required|trim');

		$id = $this->input->post('id');

		if ($this->form_validation->run() == FALSE) {
			$this->EditDataKeuCon($id);
		} else {


			$nama = $this->input->post('tanggalKeu', TRUE);
			$jk = $this->input->post('jenisTransaksi', TRUE);
			$banyak = $this->input->post('banyak', TRUE);
			$satuan = $this->input->post('satuan', TRUE);
			$ttl = $this->input->post('kategori', TRUE);
			$alamat = $this->input->post('kas', TRUE);
			$jlh = $banyak * $satuan;
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

			$data = array(
				'tanggal' => $nama,
				'jenistransaksi' => $jk,
				'banyak' => $banyak,
				'satuan' => $satuan,
				'kategori' => $ttl,
				'jeniskas' => $alamat,
				'jumlah' => $jlh,
				'last' => $last,
			);

			$where = array('id' => $id);
			$this->Modelkeu->updatedata($where, $data, 'keuangan');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('Welcome/LapKeuCon');
		}
	}
	public function UpdateDataAkunCon()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		// $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		// $this->form_validation->set_rules('username', 'Username', 'required|trim');
		// $this->form_validation->set_rules('password', 'Password', 'required');


		$id = $this->input->post('id');
		if ($this->form_validation->run() == FALSE) {
			$this->EditDataAkunCon($id);
		} else {


			$nama = $this->input->post('nama', TRUE);
			$username = htmlspecialchars($this->input->post('username', true));
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

			$data = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'last' => $last,
				'role_id' => 2,
				'is_active' => 1,

			);

			$where = array('id' => $id);
			$this->Modelakun->updatedata($where, $data, 'akun');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('Welcome/DataAkunCon');
		}
	}
	public function UpdateDataSppCon()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required|trim|integer');
		$this->form_validation->set_rules('tanggalbayar', 'Tanggalbayar', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');

		$id = $this->input->post('id');
		if ($this->form_validation->run() == FALSE) {
			$this->EditDataSppCon($id);
		} else {


			$nama = $this->input->post('nama', TRUE);
			$nik = $this->input->post('nik', TRUE);
			$nominal = $this->input->post('nominal', TRUE);
			$tanggal = $this->input->post('tanggalbayar', TRUE);
			$status = $this->input->post('status', TRUE);
			$last = mdate('%d-%m-%Y/ %h:%i:%a', time());

			$data = array(
				'nama' => $nama,
				'nik' => $nik,
				'nominal' => $nominal,
				'tglbayar' => $tanggal,
				'status' => $status,
				'last' => $last,
			);

			$where = array('id' => $id);
			$this->Modelspp->updatedata($where, $data, 'spp');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('Welcome/StatusSppCon');
		}
	}
}
