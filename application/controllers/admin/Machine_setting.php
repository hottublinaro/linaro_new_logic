<?php class Machine_setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Machine_model', 'Machine_model');
    }
    public function select_machine()
    {
        $machine = $this->Machine_model->get_machine();
        $result = array(
            'path_file' => 'machine/select_machine',
            'menu_name' => 'Select Machine',
            'machine' => $machine
        );

        $this->load->view('admin/index', $result);
    }

    public function select_option()
    {
        $selection = $this->Machine_model->get_selection();
        $result = array(
            'path_file' => 'machine/select_option',
            'menu_name' => 'Select Machine',
            'selection' => $selection
        );

        $this->load->view('admin/index', $result);
    }
    public function update_machine()
    {
        $machine_name = $this->input->post('machine_name');
        $machine_code = $this->input->post('machine_code');
        $data = array(
            'machine_name' => $machine_name,
            'machine_code' => $machine_code
        );
        $this->Machine_model->update_machine($data);

        $path =  "/home/linaro/machine_code/machine_code.txt";
        if (!write_file($path, $machine_code)) {
            echo 'Unable to write the file';
        } else {
            echo 'File written!';
        }
    }
    public function update_selection()
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
        $temp = $this->input->post('temp');


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
            'temperature' => isset($temp) ? 1 : 0,
        );

        $this->Machine_model->update_selection($data);
        redirect('admin/Machine_setting/select_option', 'refresh');
        exit();
    }
}
