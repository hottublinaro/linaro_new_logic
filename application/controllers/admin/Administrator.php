<?php class Administrator extends CI_Controller
{
    // private $url_online = "http://125.25.33.188:81/ci_hottub_server/api/Receive_api/";
    private $url_online = "https://ultrabioozone.fr/api/Receive_api/";

    public function __construct()
    {

        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Advance_model', 'Advance_model');
    }
    public function index()
    {
        $setting = $this->Advance_model->get_setting();
        $machine_code = $this->Advance_model->get_machinecode();
        $night_time = $this->Advance_model->get_night_time_setting();
        $result = array(
            'path_file' => 'administrator/index',
            'menu_name' => 'Administrator',
            'setting' => $setting,
            'url_online' => $this->url_online,
            'machine_code' => $machine_code,
            'night_time' => $night_time
        );
        $this->load->view('admin/index', $result);
    }
    public function signout()
    {
        $this->session->sess_destroy();
        redirect('member/dashboard/index', 'refresh');
        exit();
    }
    public function about_hottub()
    {
        $machine_code = $this->Advance_model->get_machinecode();
        $result = array(
            'path_file' => 'administrator/about',
            'menu_name' => 'About',
            'url_online' => $this->url_online,
            'machine_code' => $machine_code
        );
        $this->load->view('admin/index', $result);
    }
    public function check_permission()
    {
        $user_permission = $this->input->post('user_permission');
        $pwd_permission = $this->input->post('pwd_permission');

        echo json_encode($this->Advance_model->check_permission($user_permission, $pwd_permission));
    }
    public function change_user_password()
    {
        $user_permission = $this->input->post('user_permission');
        $pwd_permission = $this->input->post('pwd_permission');
        $this->Advance_model->change_user_password($user_permission, $pwd_permission);
    }
    public function setting_night_time()
    {
        $sm_night_time = $this->input->post('sm_night_time');
        $sm_night_status = $this->input->post('sm_night_status');
        $night_time_start_time = $this->input->post('night_time_start_time');
        $night_time_stop_time = $this->input->post('night_time_stop_time');
        $data = array(
            'night_time_enable' => $sm_night_time,
            'night_time_status' => $sm_night_status,
            'night_time_start' => $night_time_start_time,
            'night_time_end' => $night_time_stop_time
        );
        $this->Advance_model->setting_night_time($data);
    }
}
