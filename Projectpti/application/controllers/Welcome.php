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
	public function DataSiswaCon()
	{
		$this->load->view('home/datasiswa');
	}
	public function StatusSppCon()
	{
		$this->load->view('home/StatusSpp');
	}
	public function LapKeuCon()
	{
		$this->load->view('home/LapKeu');
	}
	public function halamanpendaf()
	{
		$this->load->view('home/halamanpendaf');
	}
	public function hubungikami()
	{
		$this->load->view('home/hubungikami');
	}
	public function profilgurucon()
	{
		$this->load->view('home/profilguru');
	}
}
