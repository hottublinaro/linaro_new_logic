<?php class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member/Setting_model', 'Setting_model');
    }
    public function index()
    {
        $setting_mode = $this->Setting_model->setting_mode();
        $result = array(
            'path_file' => 'setting/index',
            'menu_name' => 'Setting',
            'setting_mode' => $setting_mode
        );
        $this->load->view('member/index', $result);
    }
    public function update_setting()
    {
        $set = $this->input->post('set');
        $field = $this->input->post('field');

        $this->Setting_model->update_setting($set, $field);
    }
}
