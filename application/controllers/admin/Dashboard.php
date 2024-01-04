<?php class Dashboard extends CI_Controller
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
        $options = $this->Setting_model->get_machine_option();
        $result = array(
            'path_file' => 'dashboard/index',
            'menu_name' => 'Accueil',
            'temp' => $temp,
            'setting_mode' => $setting_mode,
            'online_setting' => $online_setting,
            'machine_code' => $machine_code,
            'path_server' => $this->path_server,
            'options' => $options
        );

        $this->load->view('admin/index', $result);
    }
    public function update_set_temperature()
    {
        $temp = $this->input->post('temp');

        $this->Dashboard_model->update_set_temperature($temp);
    }
}
