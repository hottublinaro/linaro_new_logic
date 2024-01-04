<?php class Temperature extends CI_Controller
{
    private $path_server = "https://ultrabioozone.fr/";
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Dashboard_model', 'Dashboard_model');
        $this->load->model('admin/Setting_model', 'Setting_model');
    }
    public function index()
    {
        $temp = $this->Dashboard_model->get_temperature();
        $setting_mode = $this->Setting_model->setting_mode();
        $online_setting = $this->Setting_model->get_online_setting();
        $machine_code = $this->Setting_model->get_machine_code();
        $result = array(
            'path_file' => 'temperature/index',
            'menu_name' => 'Température',
            'temp' => $temp,

            'setting_mode' => $setting_mode,
            'online_setting' => $online_setting,
            'machine_code' => $machine_code,
            'path_server' => $this->path_server
        );

        $this->load->view('admin/index', $result);
    }
    public function update_status_type()
    {
        $type_calibrate = $this->input->post('type_calibrate');
        $this->Setting_model->update_status_type($type_calibrate);
    }
    public function update_value_calibrate()
    {
        $calibrate_temp = $this->input->post('calibrate_temp');
        $this->Setting_model->update_value_calibrate($calibrate_temp);
    }
}
