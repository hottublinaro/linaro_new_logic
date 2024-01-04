<?php class Advance extends CI_Controller
{
    private $url_online = "http://localhost/hottub_server/api/Receive_api/";
    private $path_server = "https://ultrabioozone.fr/";
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Advance_model', 'Advance_model');
        $this->load->model('admin/Setting_model', 'Setting_model');
    }
    public function index()
    {
        $setting = $this->Advance_model->get_setting();
        $machine_code = $this->Advance_model->get_machinecode();
        $setting_mode = $this->Setting_model->setting_mode();
        $online_setting = $this->Setting_model->get_online_setting();
        $heatpump = $this->Advance_model->get_heatpump();
        $status_heatpump =  $this->Advance_model->get_option_heatpump();

        $result = array(
            'path_file' => 'advance/index',
            'menu_name' => 'Réglages de délai démarrage',
            'setting' => $setting,
            'url_online' => $this->url_online,
            'machine_code' => $machine_code,

            'setting_mode' => $setting_mode,
            'online_setting' => $online_setting,
            'path_server' => $this->path_server,
            'heatpump' => $heatpump,
            'status_heatpump' => $status_heatpump
        );
        $this->load->view('admin/index', $result);
    }
    public function update_setting()
    {
        $number_set = $this->input->post('number_set');
        $field = $this->input->post('field');
        $this->Advance_model->update_setting($number_set, $field);
    }
    public function update_status_online()
    {
        $status = $this->input->post('status');
        $this->Advance_model->update_status_online($status);
    }
    public function update_type_calibrate_pression()
    {
        $type_calibrate = $this->input->post('type_calibrate');
        $this->Advance_model->update_type_calibrate_pression($type_calibrate);
    }
    public function update_value_calibrate_pression()
    {
        $calibrate_temp = $this->input->post('calibrate_temp');
        $this->Advance_model->update_value_calibrate_pression($calibrate_temp);
    }
    public function save_time_heatpump()
    {
        $heapump_start_time = $this->input->post('heapump_start_time');
        $heapump_end_time = $this->input->post('heapump_end_time');

        $this->Advance_model->save_time_heatpump($heapump_start_time, $heapump_end_time);
    }
}
