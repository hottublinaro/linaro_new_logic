<?php class Analysing extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Analysing_model', 'Analysing_model');
    }
    public function index()
    {
        $settings = $this->Analysing_model->get_setting();
        $result = array(
            'path_file' => 'analysing/index',
            'menu_name' => 'Diagnostic',
            'settings' => $settings
        );
        $this->load->view('admin/index', $result);
    }
}
