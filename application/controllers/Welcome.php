<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');

		// if ($this->Welcome_model->check_status_setting() == 0) {
		redirect('admin/dashboard/index', 'refresh');
		exit();
		// } else if ($this->Welcome_model->check_status_setting() == 1) {
		// 	redirect('welcome/index', 'refresh');
		// 	exit();
		// } else if ($this->Welcome_model->check_status_setting() == 2) {
		// 	redirect('welcome/select_option', 'refresh');
		// 	exit();
		// }
	}
	public function index()
	{
		$this->load->view('select_machine');
	}

	public function select_option()
	{
		$this->load->view('select_option');
	}
	public function set_machine()
	{
		$machine_name = $this->input->post('machine_name');
		$machine_code = $this->input->post('machine_code');
		$this->Welcome_model->set_machine($machine_name, $machine_code);
	}
	public function save_machine_selection()
	{
		$volt_1 = $this->input->post('volt_1');
		$volt_2 = $this->input->post('volt_2');
		$backwash = $this->input->post('backwash');
		$ph = $this->input->post('ph');
		$orp = $this->input->post('orp');
		$apf = $this->input->post('apf');
		$chlorine = $this->input->post('chlorine');
		$heater_1 = $this->input->post('heater_1');
		$heater_2 = $this->input->post('heater_2');
		$night_time = $this->input->post('night_time');
		$heat = $this->input->post('heat');
		$cooling =  $this->input->post('cooling');
		$heat_cooling = $this->input->post('heat_cooling');
		$ozone_choc = $this->input->post('ozone_choc');
		$ozone_1 = $this->input->post('ozone_1');
		$ozone_2 = $this->input->post('ozone_2');
		$uv = $this->input->post('uv');
		$air_pump = $this->input->post('air_pump');
		$isaver_mode_1 = $this->input->post('isaver_mode_1');
		$isaver_mode_2 = $this->input->post('isaver_mode_2');
		$isaver_mode_3 = $this->input->post('isaver_mode_3');
		$isaver_mode_4 = $this->input->post('isaver_mode_4');

		$data = array(
			'volt_1_ph' => isset($volt_1) ? 1 : 0,
			'volt_2_ph' => isset($volt_2) ? 1 : 0,
			'backwash' => isset($backwash) ? 1 : 0,
			'ph' => isset($ph) ? 1 : 0,
			'orp' => isset($orp) ? 1 : 0,
			'apf' => isset($apf) ? 1 : 0,
			'chlorine' => isset($chlorine) ? 1 : 0,
			'heater_1' => isset($heater_1) ? 1 : 0,
			'heater_2' => isset($heater_2) ? 1 : 0,
			'night_time' => isset($night_time) ? 1 : 0,
			'heat_pump_heater' => isset($heat) ? 1 : 0,
			'heat_pump_cooling' => isset($cooling) ? 1 : 0,
			'heat_pump_all' => isset($heat_cooling) ? 1 : 0,
			'ozone_choc' => isset($ozone_choc) ? 1 : 0,
			'ozone_1' => isset($ozone_1) ? 1 : 0,
			'ozone_2' => isset($ozone_2) ? 1 : 0,
			'uv' => isset($uv) ? 1 : 0,
			'air_pump' => isset($air_pump) ? 1 : 0,
			'isaver_mode_1' => isset($isaver_mode_1) ? 1 : 0,
			'isaver_mode_2' => isset($isaver_mode_2) ? 1 : 0,
			'isaver_mode_3' => isset($isaver_mode_3) ? 1 : 0,
			'isaver_mode_4' => isset($isaver_mode_4) ? 1 : 0,
		);

		$this->Welcome_model->save_machine_selection($data);

		redirect('member/dashboard/index', 'refresh');
		exit();
	}
}
