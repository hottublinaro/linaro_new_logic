<?php class Filtration extends CI_Controller
{
    private $path_server = "https://ultrabioozone.fr/";
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Filtration_model', 'Filtration_model');
        $this->load->model('admin/Setting_model', 'Setting_model');
    }
    public function index()
    {
        $info = $this->Filtration_model->get_filtration_set();
        $setting_mode = $this->Setting_model->setting_mode();
        $online_setting = $this->Setting_model->get_online_setting();
        $machine_code = $this->Setting_model->get_machine_code();
        $result = array(
            'path_file' => 'filtration/index',
            'menu_name' => 'Réglages Filtration',
            'info' => $info,
            'setting_mode' => $setting_mode,
            'online_setting' => $online_setting,
            'machine_code' => $machine_code,
            'path_server' => $this->path_server
        );

        $this->load->view('admin/index', $result);
    }
    public function set_filration_time()
    {
        $status = $this->input->post('status');
        $time_set = $this->input->post('time_set');
        $ft_zone = $this->input->post('ft_zone');
        $ft_status =  $this->input->post('ft_status');
        $this->Filtration_model->set_filration_time($status, $time_set, $ft_zone, $ft_status);
    }
}
