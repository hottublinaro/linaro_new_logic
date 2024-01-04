<?php class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Menu_model', 'Menu_model');
    }
    public function index()
    {
        $options = $this->Menu_model->get_options();
        $result = array(
            'path_file' => 'menu/index',
            'menu_name' => 'MENU',
            'options' => $options
        );
        $this->load->view('admin/index', $result);
    }
    public function check_recovery_mode()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $admin = $this->db->select('*')->from('administrator')->where('admin_userlogin', $username)
            ->where('admin_password', sha1($password))->get()->result();
        if (count($admin) > 0) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
}
