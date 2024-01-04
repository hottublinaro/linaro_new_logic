<?php class Setting extends CI_Controller
{
    private $path_server = "https://ultrabioozone.fr/";
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Setting_model', 'Setting_model');
    }
    public function index()
    {
        $setting_mode = $this->Setting_model->setting_mode();
        $online_setting = $this->Setting_model->get_online_setting();
        $machine_code = $this->Setting_model->get_machine_code();
        $result = array(
            'path_file' => 'setting/index',
            'menu_name' => 'Mode de fonctionnement',
            'setting_mode' => $setting_mode,
            'online_setting' => $online_setting,
            'path_server' => $this->path_server,
            'machine_code' => $machine_code
        );
        $this->load->view('admin/index', $result);
    }
    public function update_setting()
    {
        $set = $this->input->post('set');
        $field = $this->input->post('field');

        $this->Setting_model->update_setting($set, $field);
    }
}
