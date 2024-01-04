<?php class Advance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member/Advance_model', 'Advance_model');
    }
    public function index()
    {
        $setting = $this->Advance_model->get_setting();
        $result = array(
            'path_file' => 'advance/index',
            'menu_name' => 'Reglages avances',
            'setting' => $setting
        );

        $this->load->view('member/index', $result);
    }
    public function update_setting()
    {
        $number_set = $this->input->post('number_set');
        $field = $this->input->post('field');
        $this->Advance_model->update_setting($number_set, $field);
    }
}
